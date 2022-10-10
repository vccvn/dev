<?php

use App\Http\Controllers\Admin\Business\TeamController;
use App\Http\Controllers\Admin\Business\TeamMemberController;
use Illuminate\Support\Facades\Route;

$controller = 'Business\TeamController@';

$route = 'teams';

Route::controller(TeamController::class)->group(function(){
    $master = admin_routes(null, true, true, true, null, 'Quản lý Team', 'Thêm sửa xóa các Team' );
    $options = Route::get('options',                       'getSelectOptions'          )->name('.select-options');
    $detail = Route::get('detail',                         'getResourceDetail'         )->name('.detail');

    $master->addActionByRouter($options, ['view', 'refs'], 'Select Options');
    $master->addActionByRouter($detail, ['view', 'refs'], 'Xem chi tiết');

    Route::controller(TeamMemberController::class)->name('.members')->prefix('members')->group(function() use($master){
        $memberMaster = $master->addSub('members', ['name' => 'Team Member', 'path' => 'admin.teams.members']);

        $detail = Route::get('detail',                 'getResourceDetail'         )->name('.detail');
        $save   = Route::post('save',                  'ajaxSave'                  )->name('.save');
        $create = Route::post('create',                'ajaxSave'                  )->name('.create');
        $update = Route::post('update',                'ajaxSave'                  )->name('.update');
        $delete = Route::delete('delete',              'delete'                    )->name('.delete');

        
        
    });
});
