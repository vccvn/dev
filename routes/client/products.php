<?php

use App\Http\Controllers\Clients\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->name('products')->group(function(){
    /**
     * -------------------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                           | Controller @ Nethod         | Route Name
     * -------------------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/san-pham/',                                    'viewProducts'            )->name("");
    // $prefix = '/danh-muc/';
    // Route::get($prefix,                                         'viewCategory'            )->name('.categories.view-by-id');
    // Route::get($prefix.'{slug}.html',                           'viewCategory'            )->name('.categories.view-simple');
    // Route::get($prefix.'{parent}/{child}.html',                 'viewCategory'            )->name('.categories.view-child');
    // Route::get($prefix.'{first}/{second}/{third}.html',         'viewCategory'            )->name('.categories.view-3-level');
    // Route::get($prefix.'{first}/{second}/{third}/{fourth}.html','viewCategory'            )->name('.categories.view-4-level');
    Route::get('/san-pham/{slug}.html',                         'viewProductDetail'       )->name('.detail');
    Route::get('/san-pham/{slug}.json',                         'getProductJsonData'      )->name('.json');
    Route::get('/products/detail/{id?}',                        'getProductJsonData'      )->name('.data');
    Route::post('san-pham/kiem-tra-gia',                        'checkPrice'              )->name('.check-price');

    Route::post('san-pham/danh-gia',                            'makeReview'              )->name('.review');
    Route::post('san-pham/gui-danh-gia-bang-ajax',              'ajaxMakeReview'          )->name('.ajax-review');

});