<?php

use App\Models\Course;
use App\Models\Lesson;
use App\Repositories\Courses\CourseRepository;

if(!function_exists('get_privacy_course_type_labels')){
    function get_privacy_course_type_labels()
    {
        return Course::TYPE_PRIVACY_LABELS;
    }
}

if(!function_exists('get_commerce_course_type_labels')){
    function get_commerce_course_type_labels()
    {
        return Course::TYPE_PRIVACY_LABELS;
    }
}
if(!function_exists('get_privacy_lesson_type_labels')){
    function get_privacy_lesson_type_labels()
    {
        return Lesson::TYPE_PRIVACY_LABELS;
    }
}

if(!function_exists('get_commerce_lesson_type_labels')){
    function get_commerce_lesson_type_labels()
    {
        return Lesson::TYPE_PRIVACY_LABELS;
    }
}
if(!function_exists('get_course_options')){
    function get_course_options($args = [])
    {
        return app(CourseRepository::class)->getDataOptions($args);
    }
}


if(!function_exists('get_course')){
    function get_course($args = [])
    {
        return app(CourseRepository::class)->mode('mask')->detail($args);
    }
}


if(!function_exists('get_courses')){
    function get_courses($args = [])
    {
        return app(CourseRepository::class)->mode('mask')->getData($args);
    }
}
if(!function_exists('get_course_sortby_options')){
    function get_course_sortby_options()
    {
        $options = get_edu_config('courses.list.sortby', []);

        return $options;
    }
}





