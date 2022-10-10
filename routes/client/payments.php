<?php

use App\Http\Controllers\Clients\PaymentController;
use Illuminate\Support\Facades\Route;



$rp = 'client.payments.';
$p = 'PaymentController@';

Route::name('payments.')->controller(PaymentController::class)->group(function(){
    /**
     * -------------------------------------------------------------------------------------------------------------------------------
     *  Method | URI                                           | Controller @ Nethod         | Route Name
     * -------------------------------------------------------------------------------------------------------------------------------
     */

    Route::get('thanh-toan-chuyen-khoan.html',                  'transfer'              )->name('transfer');
    Route::get('check-order-payment',                           'checkOrderPayment'     )->name('check-order');
    Route::post('check-order-payment',                          'checkOrderPayment'     );
    Route::post('verify-transfer',                              'verifyTransfer'        )->name('verify-transfer');



    Route::get('/vnpay',                                        'vnPay'                 )->name('vnpay');
    Route::get('/vnpay/form',                                   'vnPay'                 )->name('vnpay.form');
    Route::get('/vnpay/create',                                 'vnPayCreate'           )->name('vnpay.submit');
    Route::post('/vnpay/create',                                'vnPayCreate'           );

    Route::get('/vnpay/check',                                  'vnPayCheck'            )->name('vnpay.check');
    Route::post('/vnpay-check',                                 'vnPayCheck'            );

    Route::get('/vnpay/status',                                 'vnPayStatus'           )->name('vnpay.status');
    Route::post('/vnpay/status',                                'vnPayStatus'           );
});