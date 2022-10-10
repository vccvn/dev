<?php

namespace App\Http\Controllers\Clients;

# use App\Http\Controllers\Clients\ClientController;

use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

use App\Repositories\Courses\CourseRepository;
use App\Repositories\Courses\LessonRepository;

class CourseController extends ClientController
{
    protected $module = 'courses';

    protected $moduleName = 'Course';

    protected $flashMode = true;

    /**
     * repository chinh
     *
     * @var CourseRepository
     */
    public $repository;

    /**
     * repository chinh
     *
     * @var LessonRepository
     */
    public $lessonRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CourseRepository $repository, LessonRepository $lessonRepository)
    {
        $this->repository = $repository->mode('mask');
        $this->lessonRepository = $lessonRepository->mode('mask');
        $this->init();
    }

    public function viewCourses(Request $request)
    {
        $courses = $this->repository->paginate(12)->getResults($request, []);
        $page_title = 'Các khóa học';
        return $this->viewModule('list', [
            'page_title' => $page_title,
            'courses' => $courses
        ]);
    }

    public function viewCourseDetail(Request $request, $slug = null)
    {
        if (!$slug) $slug = $request->slug;
        if (!$slug || !($course = $this->repository->getCourseDetail(['slug' => $slug])))
            return $this->view('errors.404');
        // $course->applyMetadata();
        set_active_model('course', $course);
        $page_title = $course->name;
        $article = $course;
        $this->breadcrumb->add('Khóa học', route('client.courses'));
        $this->breadcrumb->add($course->name, $course->view_url);

        return $this->viewModule('detail', [
            'page_title' => $page_title,
            'course' => $course,
            'article' => $article
        ]);
    }

    public function viewLessonDetail(Request $request, $course_slug = null, $lesson_slug = null)
    {
        if (!$course_slug) $course_slug = $request->course;
        if (!$lesson_slug) $lesson_slug = $request->lesson;
        if (
            !$course_slug || 
            !$lesson_slug || 
            !($course = $this->repository->getCourseDetail(['slug' => $course_slug])) || 
            !($lesson = $this->lessonRepository->getLessonDetail(['course_id' => $course->id, 'slug' => $lesson_slug]))
        )
            return $this->view('errors.404');
        set_active_model('lesson', $lesson);
        $page_title = $lesson->name;
        $article = $lesson;
        $this->breadcrumb->add('Khóa học', route('client.courses'));
        $this->breadcrumb->add($course->name, $course->view_url);
        $this->breadcrumb->add($lesson->name, $lesson->view_url);
        return $this->viewModule('lesson-detail', [
            'page_title' => $page_title,
            'course' => $course,
            'article' => $article,
            'lesson' => $lesson
        ]);
    }
}

