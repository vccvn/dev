<?php

use App\Http\Controllers\Clients\CourseController;
use Illuminate\Support\Facades\Route;
Route::controller(CourseController::class)->name('courses')->group(function(){
    /**
     * -------------------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                           | Controller @ Nethod         | Route Name
     * -------------------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/cac-khoa-hoc.html',                           'viewCourses'                 )->name("");
    Route::get('/khoa-hoc/{slug}.html',                        'viewCourseDetail'            )->name('.detail');
    Route::get('/khoa-hoc/{course}/{lesson}.html',             'viewLessonDetail'            )->name('.lesson');
    
    
});