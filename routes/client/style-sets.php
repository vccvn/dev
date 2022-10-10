<?php

use App\Http\Controllers\Clients\PersonalStyleSetController;
use Illuminate\Support\Facades\Route;

Route::controller(PersonalStyleSetController::class)->name('style-sets')->middleware('client.auth')->group(function(){
    /**
     * -------------------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                           | Controller @ Nethod         | Route Name
     * -------------------------------------------------------------------------------------------------------------------------------
     */

    Route::get('/style-ca-nhan.html',                           'viewMyStyleList'         )->name("");
    Route::get('/tao-style-ca-nhan.html',                       'viewCreateForm'          )->name(".create");
    
    Route::get('/cap-nhat-style-ca-nhan-{id}.html',             'viewUpdateForm'          )->name(".update");
    Route::post('/luu-style-ca-nhan',                           'saveStyle'               )->name(".save");
    
    
    
    
    Route::get('style-templates.json',                          'getStyleTemplates'       )->name(".templates");
    Route::get('style-templates/detail/{id?}',                  'getTemplateDetail'       )->name(".templates.detail");
    

});