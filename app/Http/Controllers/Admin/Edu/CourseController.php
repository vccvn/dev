<?php

namespace App\Http\Controllers\Admin\Edu;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Course;
use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\Courses\CourseRepository;
use App\Repositories\Tags\TagRefRepository;

class CourseController extends AdminController
{
    protected $module = 'courses';

    protected $moduleName = 'Khóa học';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var CourseRepository
     */
    public $repository;
    /**
     * @var TagRefRepository $tagRefRepository
     */
    protected $tagRefRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CourseRepository $repository, TagRefRepository $tagRefRepository)
    {
        $this->repository = $repository;
        $this->tagRefRepository = $tagRefRepository;
        $this->init();
    }

    /**
     * can thiệp trước khi luu
     * @param Request $request
     * @param Arr $data dũ liệu đã được validate
     * @return void
     */
    protected function beforeSave(Request $request, $data)
    {
        $slug = str_slug($request->custom_slug? $request->slug : $request->name);
        $data->slug = $this->repository->getSlug(
            $slug?$slug : uniqid(),
            $request->id
        );

        $data->metadata = $data->copy(
            [
                'custom_slug',
                'start_date',
                'duetime',
                'duetime_unit',
                "course_level",
                "user_level",
                "outpoint",
                "rating_avg",
                "rating_count",
                "lesson_count",
                "student_count"
            ]
        );

    }

    public function afterSave($request, $result, $data)
    {
        
        $this->tagRefRepository->updateTagRef(Course::REF_KEY, $result->id, $data->tags??[]);
    }


    /**
     * tim kiếm thông tin sản phẩm
     * @param Request $request
     * @return json
     */
    public function getCourseSelectOptions(Request $request)
    {
        extract($this->apiDefaultData);

        if($options = $this->repository->getRequestDataOptions($request, ['@limit'=>10])){
            $data = $options;
            $status = true;
        }else{
            $message = 'Không có kết quả phù hợp';
        }

        return $this->json(compact(...$this->apiSystemVars));
    }



    /**
     * tim kiếm thông tin sản phẩm
     * @param Request $request
     * @return json
     */
    public function getProductTagData(Request $request)
    {
        extract($this->apiDefaultData);

        if($options = $this->repository->getProductTagData($request, ['@limit'=>10])){
            $data = $options;
            $status = true;
        }else{
            $message = 'Không có kết quả phù hợp';
        }

        return $this->json(compact(...$this->apiSystemVars));
    }


    
}
