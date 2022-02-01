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

Route::resource('/Orden/Crear', 'App\Http\Controllers\CreateController');
Route::resource('/Orden/View', 'App\Http\Controllers\ViewController');
Route::resource('/Orden/Edit', 'App\Http\Controllers\EditController');

Route::post('/Orden/UpdateRechazo', 'App\Http\Controllers\CreateController@UpdateRechazo')->name('UpdateRechazo'); //dy

Route::post('/Orden/GetProductos', 'App\Http\Controllers\CreateController@productList')->name('productList'); //dy
Route::post('/Orden/CreateOrden', 'App\Http\Controllers\CreateController@CreateOrden')->name('CreateOrden'); //dy
Route::post('/Orden/GetOrders', 'App\Http\Controllers\CreateController@GetOrders')->name('GetOrders'); //dy
Route::Delete('/Orden/DeleteOrden', 'App\Http\Controllers\CreateController@DeleteOrden')->name('DeleteOrden'); //dy

Route::post('/Orden/sendEmail', 'App\Http\Controllers\MailController@sendEmail')->name('sendEmail'); //dy
Route::get('/Orden/PDF', 'App\Http\Controllers\PDFController@generatePDF')->name('generatePDF'); //dy
Route::post('/test/flutter', 'App\Http\Controllers\CreateController@TestFlutter')->name('TestFlutter'); //dy
Route::post('/test/flutter/notification', 'App\Http\Controllers\CreateController@TestNotification')->name('TestNotification'); //dy

