<?php

namespace App\Http\Controllers\Clients;

# use App\Http\Controllers\Clients\ClientController;

use App\Repositories\StyleSets\Personal\ItemConfigRepository;
use App\Repositories\StyleSets\Personal\StyleSetItemRepository;
use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\StyleSets\Personal\StyleSetRepository;
use App\Repositories\StyleSets\Personal\TemplateItemConfigRepository;
use App\Repositories\StyleSets\Personal\TemplateItemRepository;
use App\Repositories\StyleSets\Personal\TemplateRepository;
use Illuminate\Support\Facades\DB;

/**
 * @property-read ItemConfigRepository $itemConfigRepository
 * @property-read TemplateItemConfigRepository $templateItemConfigRepository
 * @property-read TemplateItemRepository $templateItemRepository
 * @property-read TemplateRepository $templateRepository
 * @property-read StyleSetItemRepository $styleSetItemRepository
 */
class PersonalStyleSetController extends ClientController
{
    protected $module = 'style-sets';

    protected $moduleName = 'Style Cá Nhân';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var StyleSetRepository
     */
    public $repository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        StyleSetRepository $repository,
        TemplateRepository $templateRepository, 
        TemplateItemRepository $templateItemRepository,
        ItemConfigRepository $styleItemConfigRepository, 
        TemplateItemConfigRepository $templateItemConfigRepository,
        StyleSetItemRepository $styleSetItemRepository
    )
    {
        $this->repository = $repository->mode('mask');
        $this->styleSetItemRepository = $styleSetItemRepository->mode('mask');
        $this->templateRepository = $templateRepository->mode('mask');
        $this->templateItemRepository = $templateItemRepository->mode('mask');
        $this->itemConfigRepository = $styleItemConfigRepository->mode('mask');
        $this->templateItemConfigRepository = $templateItemConfigRepository->mode('mask');

        $this->init();
    }

    public function viewMyStyleList(Request $request)
    {
        $styleSets = $this->repository->getResults($request, [
            'user_id' => $request->user()->id
        ]);
        return $this->viewModule('list', [
            'styleSets' => $styleSets
        ]);

    }

    public function viewCreateForm(Request $request)
    {
        if(!count($templateList = $this->templateRepository->getListWithAttributes()))
            return redirect()->route('client.alert')->with('message', 'Hệ thống chưa có style mẫu');
        $templateDetail = $templateList[0];
        
        if(!$templateDetail) redirect()->route('client.alert')->with('message', 'Hệ thống chưa có style mẫu');
        $style = null;
        $styleItems = [];
        return $this->viewModule('form', [
            'templateDetail' => $templateDetail, 
            'templateList' => $templateList, 
            'action' => 'create',
            'style' => $style,
            'styleItems' => $styleItems
        ]);
    }

    public function viewUpdateForm(Request $request, $id = null)
    {
        $id = $id?$id:$request->id;
        if(!$id || !($style = $this->repository->detail(['id' => $id, 'user_id' => $request->user()->id]))) abort(404);
        if(!count($templateList = $this->templateRepository->getListWithAttributes()))
            return redirect()->route('client.alert')->with('message', 'Hệ thống chưa có style mẫu');
        
        $templateDetail = $templateList->getItem(['id' => $style->template_id]);
        if(!$templateDetail)
            return redirect()->route('client.alert')->with('message', 'Hệ thống chưa có style mẫu');

        $templateList = $this->templateRepository->getData([]);
        $styleItems = $this->styleSetItemRepository->getItemTemplateIDs($style->id);
        return $this->viewModule('form', [
            'templateDetail' => $templateDetail, 
            'templateList' => $templateList, 
            'action' => 'create',
            'style' => $style,
            'styleItems' => $styleItems
        ]);
    }


    public function saveStyle(Request $request)
    {
        $data = $this->repository->validate($request);
        $data['user_id'] = $request->user()->id;
        
        if ($file = $this->uploadImage($request, 'thumbnail', null, get_content_path('style-sets'))) {
            $data['thumbnail_image'] = $file->filename;
        }
        if($request->id && $set = $this->repository->find($request->id)){
            $data['set_data'] = array_merge($set->getSetData(), ['attr_values' => $request->attrs??[]]);
        }else{
            $data['set_data'] = ['attr_values' => $request->attrs??[]];
        }

        if(!($styleSet = $this->repository->save($data, $request->id)) || !($this->styleSetItemRepository->updateItems($styleSet->id, $request->items))) return redirect()->back()->withInput()->with('error', 'Lỗi không xác định')->with('error_message', 'Lỗi không xác định');
        return redirect()->route('client.style-sets.update', ['id' => $styleSet->id])->with('success_message', ($request->id && $request->id == $styleSet->id ?'Cập nhật' : 'Tạo ').' style '. $styleSet->name . ' thành công');

    }
    

    

    public function getStyleTemplates(Request $request)
    {
        extract($this->apiDefaultData);

        if(!count($list = $this->templateRepository->getData())){
            $message = 'Không có style mẫu';
        }else{
            $status = true;
            $data = $list;
        }

        return $this->json(compact($this->apiSystemVars));
    }

    public function getStyleTemplateDetail(Request $request, $id = null)
    {
        extract($this->apiDefaultData);

        if(!$id) $id = $request->id;

        return $this->json(compact($this->apiSystemVars));
    }

}
