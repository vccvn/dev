<?php

namespace App\Http\Controllers\Admin\Edu;

use App\Http\Controllers\Admin\AdminController;
use App\Repositories\Courses\CourseRepository;
use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\Courses\LessonRepository;
use App\Repositories\Metadatas\MetadataRepository;

class LessonController extends AdminController
{
    protected $module = 'courses.lessons';

    protected $moduleName = 'Bài giảng';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var LessonRepository
     */
    public $repository;
    
    /**
     * repository chinh
     *
     * @var CourseRepository
     */
    public $courserepository;
    /**
     * @var MetadataRepository $metadataRepository
     */
    protected $metadataRepository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        LessonRepository $repository,
        CourseRepository $courseRepository,
        MetadataRepository $metadataRepository
    )
    {
        $this->repository = $repository;
        $this->metadataRepository = $metadataRepository;
        $this->courserepository = $courseRepository;
        $this->init();
    }

    
    /**
     * lưu các dữ liệu liên quan như thuộc tính, meta, gallery
     * @param Request $request
     * @param \App\Models\Lesson $lesson
     * @param Arr $data dữ liệu từ input đã dược kiểm duyệt
     *
     * @return void
     */
    public function afterSave(Request $request, $lesson, $data)
    {
        $data->features = implode(',', text2array($data->features));
        $this->metadataRepository->saveMany('lesson', $lesson->id, $data->copy([
            'custom_slug'
            
        ]));

    }

    public function getLessonOfCourse(Request $request, $course = null)
    {
        if(!$course) $course = $request->course;
        if(!$course || !($courseModel = $this->courserepository->first(['slug' => $course]))){
            return $this->showError($request, 404, "Không tìm thấy khóa học");
        }
        $this->moduleName .= " của khóa học $courseModel->name";
        $this->repository->addDefaultParam('course_id', $courseModel->id);
        return $this->getList($request);
    }
}
