<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')
        ->name('home');

Route::get('/detail/{slug}', 'DetailController@index')
        ->name('detail');

Route::post('/checkout/{id}', 'CheckoutController@proses')
        ->name('checkout_proses')
        ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
        ->name('checkout')
        ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
        ->name('checkout-create')
        ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
        ->name('checkout-remove')
        ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{detail_id}', 'CheckoutController@success')
        ->name('checkout-success')
        ->middleware(['auth','verified']);

Route::post('/datapelanggans', 'Admin\DataPelanggansController@store')
        ->name('datapelanggans')
        ->middleware(['auth','verified']);

Route::get('/datapelanggans', 'Admin\DataPelanggansController@create')
        ->name('datapelanggans-create')
        ->middleware(['auth','verified']);


Route::get('cetak', 'Admin\DataPelanggansController@cetak')->name('cetak-data');

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware(['auth','admin']) //tambahan
        ->group(function(){
            Route::get('/', 'DashboardController@index')
            ->name('dashboard');

            Route::resource('paket-travels', 'PaketTravelsController');
            Route::resource('galeris', 'GalerisController');
            Route::resource('transaksis', 'TransaksisController');
            Route::resource('datapelanggans', 'DataPelanggansController');
            
            Route::get('cetak', 'Admin\TransaksisController@cetak')->name('cetak-transaksi');
    });

Auth::routes(['verify' => true]);

