<?php

use App\Http\Controllers\Clients\PostController;
use App\Http\Controllers\Clients\ProductController;
use App\Http\Controllers\Clients\SitemapController;
use App\Http\Controllers\Clients\TagController;
use Illuminate\Support\Facades\Route;

$c = PostController::class;
$route = 'posts.';

$controller = TagController::class;

Route::get('/tags/{tag}.html',                             [$controller,'getPosts']       )->name($route . 'tag');

$controller = SitemapController::class;

Route::get('/sitemap.xml',                                 [$controller,'sitemap']       )->name('sitemap');


/**
 * -------------------------------------------------------------------------------------------------------------------------------
 *  Method | URI                                           | Controller @ Nethod         | Route Name               
 * -------------------------------------------------------------------------------------------------------------------------------
 */
Route::get('/danh-muc-{dynamic}/',                          [$c,'viewCategory']            )->name($route.'categories.view-by-id');
Route::get('/{dynamic}.html',                               [$c,'viewDynamicPage']         )->name('posts');
Route::get('/{dynamic}/{post}.html',                        [$c,'viewPost']                )->name($route.'view');

Route::get('/{slug}.html',                                  [$c,'viewDynamicPage']         )->name('pages.view-simple');
Route::get('/{parent}/{child}.html',                        [$c,'viewPost']                )->name('pages.view-child');


$prefix = '/{dynamic}';
Route::get($prefix.'/{slug}/',                              [$c,'viewCategory']            )->name($route.'categories.view-simple');
Route::get($prefix.'/{parent}/{child}/',                    [$c,'viewCategory']            )->name($route.'categories.view-child');
Route::get($prefix.'/{first}/{second}/{third}/',            [$c,'viewCategory']            )->name($route.'categories.view-3-level');
Route::get($prefix.'/{first}/{second}/{third}/{fourth}/',   [$c,'viewCategory']            )->name($route.'categories.view-4-level');
if(get_web_type() == 'ecommerce'){
    Route::controller(ProductController::class)->name('products.')->group(function(){
        Route::get('cate',                                  'viewCategory'                 )->name('categories.view-by-id');
        Route::get('{slug}',                                'viewCategory'                 )->where(['slug' => '[A-z0-9_\-]+'])->name('categories.view-simple');
        Route::get('{parent}/{child}',                      'viewCategory'                 )->where(['parent' => '[A-z0-9_\-]+', 'child' => '[A-z0-9_\-]+'])->name('categories.view-child');
        Route::get('{first}/{second}/{third}',              'viewCategory'                 )->where(['first' => '[A-z0-9_\-]+', 'second' => '[A-z0-9_\-]+', 'third' => '[A-z0-9_\-]+'])->name('categories.view-3-level');
        Route::get('{first}/{second}/{third}/{fourth}',     'viewCategory'                 )->where(['first' => '[A-z0-9_\-]+', 'second' => '[A-z0-9_\-]+', 'third' => '[A-z0-9_\-]+', 'fourth' => '[A-z0-9_\-]+'])->name('categories.view-4-level');
    });
}
