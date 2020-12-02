<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('admin/users', 'Admin\UserController', ['except' => ['show','index','create','store'] ]); 

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UserController', ['except' => ['show','create','store'] ]);  

});
 
Route::prefix('product')->name('product.')->group(function(){ 

    Route::resource('/', 'ProductController', ['except' => ['edit','update','destroy'] ]);
    Route::get('/edit/{product}', 'ProductController@edit')->name('edit');
    Route::put('/update/{product}', 'ProductController@update')->name('update');
    Route::delete('/delete/{product}', 'ProductController@destroy')->name('delete');

});

Route::prefix('order')->name('order.')->group(function(){ 

    Route::resource('/', 'OrderController', ['except' => ['edit','update','destroy'] ]);
    Route::get('/edit/{order}', 'OrderController@edit')->name('edit');
    Route::put('/update/{order}', 'OrderController@update')->name('update');
    Route::delete('/delete/{order}', 'OrderController@destroy')->name('delete');

});

Route::prefix('customer')->name('customer.')->group(function(){ 

    Route::resource('/', 'CustomerController', ['except' => ['edit','update','destroy'] ]);
    Route::get('/edit/{customer}', 'CustomerController@edit')->name('edit');
    Route::put('/update/{customer}', 'CustomerController@update')->name('update');
    Route::delete('/delete/{customer}', 'CustomerController@destroy')->name('delete');
    Route::post('/printdata', 'CustomerController@printdata')->name('printdata');

    Route::get('/printdataslip', 'CustomerController@printdataslip')->name('printdataslip');

});