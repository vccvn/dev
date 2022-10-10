<?php

use App\Http\Controllers\Admin\Edu\CourseController;
use App\Http\Controllers\Admin\Edu\LessonController;
use Illuminate\Support\Facades\Route;



$controller = CourseController::class;

$master = admin_routes($controller, true, true, true, null, "Quản lý khóa học", "Quản lý danh sách khóa học, cho phép thêm sửa xóa khóa học, Biai2 giảng, tiết học...");

Route::controller($controller)->name('.')->group(function()use ($master){
    

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *                Method | URI                           |  Nethod                   | Route Name                
     * --------------------------------------------------------------------------------------------------------------------
     */

    $checkSlug = Route::post('/check-slug',                    'checkSlug'                            )->name('check-slug');
    $getSlug   = Route::get('/get-slug',                       'getSlug'                              )->name('get-slug');
    $prodopts  = Route::get('/options',                        'getCourseSelectOptions'              )->name('select-options');
    $prodTags  =  Route::get('/tags',                          'getCourseTagData'                    )->name('tag-data');
    $detail    = Route::get('detail/{course}', [LessonController::class, 'getLessonOfCourse'])->name('course-detail');

    $master->addActionByRouter($checkSlug, ['create', 'update']);
    $master->addActionByRouter($getSlug, ['create', 'update']);
    $master->addActionByRouter($prodopts, ['view', 'refs']);
    $master->addActionByRouter($prodTags, ['view', 'refs']);
    $master->addActionByRouter($detail, ['view', 'refs']);
    
});


Route::controller(LessonController::class)->prefix('lesson')->name('.lessons')->group(function()use ($master){
    $Lessons = admin_routes(null, true, true, true, null, 'Quản lý bài giảng', 'Thêm / sửa / xóa các bài giảng', $master);

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *                Method | URI                           |  Nethod                   | Route Name                
     * --------------------------------------------------------------------------------------------------------------------
     */

    $checkSlug = Route::post('/check-slug',                    'checkSlug'                            )->name('.check-slug');
    $getSlug   = Route::get('/get-slug',                       'getSlug'                              )->name('.get-slug');
    // $prodopts  = Route::get('/lesson-options',                'getProductSelectOptions'              )->name('.select-options');
    // $prodTags  =  Route::get('/lesson-tags',                  'getProductTagData'                    )->name('.tag-data');

    $master->addActionByRouter($checkSlug, ['create', 'update']);
    $master->addActionByRouter($getSlug, ['create', 'update']);
    // $master->addActionByRouter($prodopts, ['view', 'refs']);
    // $master->addActionByRouter($prodTags, ['view', 'refs']);
    
});