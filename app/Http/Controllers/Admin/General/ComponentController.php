<?php

namespace App\Http\Controllers\Admin\General;

use App\Repositories\Components\ComponentRepository;
use App\Repositories\Html\AreaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use Gomee\Helpers\Arr;

use App\Repositories\Files\FileRefRepository;
use App\Repositories\Html\ComponentRepository as HtmlComponentRepository;

class ComponentController extends AdminController
{
    protected $module = 'components';

    protected $moduleName = 'Component';

    protected $flashMode = true;
    
    /**
     * Undocumented variable
     *
     * @var ComponentRepository
     */
    protected $componentRepository;
    
    /**
     * lien ket file
     *
     * @var FileRefRepository
     */
    protected $fileRefRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        HtmlComponentRepository $HtmlComponentRepository, 
        ComponentRepository $componentRepository, 
        AreaRepository $areaRepository,
        FileRefRepository $fileRefRepository
    )
    {
        $this->repository = $HtmlComponentRepository;
        $this->componentRepository = $componentRepository;
        $this->areaRepository = $areaRepository;
        
        $this->fileRefRepository = $fileRefRepository;
        $this->init();
    }

    public function showComponents(Request $request)
    {
        $areas = $this->areaRepository->getComponentAreas();
        $urls = [
            'sort' => $this->getModuleRoute('sort'),
            'save' => $this->getModuleRoute('ajax-save'),
            'delete' => $this->getModuleRoute('delete'),
            'detail' => $this->getModuleRoute('detail'),
            'inputs' => $this->getModuleRoute('inputs'),
        ];
        $componentOptions = $this->componentRepository->getComponentOptionData();
        $data = compact('areas', 'urls', 'componentOptions');
        return $this->view('html.components.list', $data);
    }
    

        
    /**
     * xu ly data truoc khi luu
     *
     * @param Request $request
     * @param Arr $data
     * @return void
     */
    public function beforeSave(Request $request, Arr $data)
    {
        $this->processData($request, $data);
    }

    public function beforeAjaxSave(Request $request, Arr $data)
    {
        $this->processData($request, $data);
    }

    
    /**
     * x?? l?? d??? li???u ng?????i d??ng g???i l??n
     *
     * @param Request $request
     * @param Arr $data
     * @return void
     */
    public function processData(Request $request, Arr $data)
    {
        $c = null;
        $d = [];
        $component = $this->componentRepository->getComponentDetail($data->component_id);
        $fileList = $component->files;
        if($request->id && $htmlComponent = $this->repository->findBy('id', $request->id)){
           $c = $htmlComponent;
           $d = is_array($c->data)?$c->data:[];

        }
        else {
            $d = $component->data;
        }
        if($c && $c->component_id != $component->id){
            $c->delete();
        }
        if($fileList){
            foreach($fileList as $item){
                $fn = uniqid();
                if($d){
                    if(isset($d[$item]) && $d[$item]){
                        $fn = $this->getFilenameWithoutExtension($d[$item]);
                    }
                }
                $upload = $this->saveBase64File($request->{$item.'_data'}, $fn, get_content_path('components'));
                // $img = $this->saveImageFileData($request, $item, $fn, 'static/webs/'.$ownerID.'/components');
                if($upload){
                    $data->{$item} = $upload->filename;
                }else{
                    $data->remove($item);
                }
                $data->remove($item.'_data');
            }
        }
        $a = $data->cutWithout(['id', 'component_id', 'area_id']);
        if($d){
            $a = array_merge($d, $a);
        }
        $data->data = $a;
    }

    
    /**
     * s???p x???p l???i v??? tr?? sau khi t???o m???i
     *
     * @param Request $request
     * @param App\Models\Slider $result
     * @return void
     */
    public function afterCreate(Request $request, $result)
    {
        $this->repository->updatePriority($result->id, $result->priority);
    }
    public function afterAjaxCreate(Request $request, $result)
    {
        $this->repository->updatePriority($result->id, $result->priority);
    }

    /**
     * l???y th??ng tin input khi th??m component m???i
     *
     * @param Request $request
     * @return JSON
     */
    public function getComponentInputs(Request $request)
    {
        extract($this->apiDefaultData);

        if(!$request->component_id){
            $message = "Thi???u Component ID";
        }
        else{
            $status = true;
            if(!($componentData = $this->repository->setComponentRepository($this->componentRepository)->getComponentInputs($request->component_id, $request->id))){
                $message = "Component kh??ng t???n t???i";
            }else{
                $componentData['config'] = [
                    'form_group_options' => [
                        'group_class' => 'row',
                        'label_class' => 'col-md-4 col-lg-3 col-form-label',
                        'wrapper_class' => 'col-md-8 col-lg-9'
                    ],
                    'lock_style' => true
                ];
                $data = $this->view('forms.inputs', $componentData)->render();
            }
        }

        return $this->json(compact(...$this->apiSystemVars));
    }
  

    /**
     * l???y th??ng tin chi ti???t component
     *
     * @param Request $request
     * @return void
     */
    public function getComponentDetail(Request $request)
    {
        extract($this->apiDefaultData);
        if(!$request->id || !($htmlComponent = $this->repository->findBy('id', $request->id))){
            $message = "Thi???u Component ID ho???c Component kh??ng t???n t???i";
        }
        else{
            $status = true;
            if(!($componentData = $this->repository->setComponentRepository($this->componentRepository)->getComponentInputs($htmlComponent->component_id, $htmlComponent->id))){
                $message = "Component kh??ng t???n t???i";
            }else{
                $componentData['config'] = [
                    'form_group_options' => [
                        'group_class' => 'row',
                        'label_class' => 'col-md-4 col-lg-3 col-form-label',
                        'wrapper_class' => 'col-md-8 col-lg-9'
                    ],
                    'lock_style' => true
                ];
                $htmlComponent->inputs = $this->view('forms.inputs', $componentData)->render();
            }
            $data = $htmlComponent;
        }
        return $this->json(compact(...$this->apiSystemVars));
    }

    /**
     * s???p x???p component
     *
     * @param Request $request
     * @return void
     */
    public function sort(Request $request)
    {
        extract($this->apiDefaultData);

        // validate
        $validator = $this->repository->validator($request, 'Html\SortComponentValidator');
        if(!$validator->success()){
            $message = '???? c?? l???i x???y ra. Vui l??ng ki???m tra l???i';
            $errors = $validator->errors();
        }
        elseif(is_array($request->data)){
            $status = true;
            foreach ($request->data as $area) {
                if(isset($area['area_id']) && $area['area_id'] && isset($area['components']) && is_array($area['components']) && count($area['components'])){
                    if(!$this->repository->sortComponents($area['components'], $area['area_id'])){
                        $status = false;
                        $message = 'L???i kh??ng x??c ?????nh. Vui l??ng th??? l???i sau gi??y l??y';
                    }
                }
            }
        
        }
        return $this->json(compact(...$this->apiSystemVars));
    }


}
