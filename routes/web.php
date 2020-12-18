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

// Website Routes
Route::get('/', function () {
    return view('website.home');
});

Route::get('/tickets', function () {
    return view('website.tickets');
});

Route::get('klanten', function () {
    return view('website.klanten');
});

Route::get('/contact', function () {
    return view('website.contact');
});

// Admin Routes
Route::get('/admin', function (){
    return view('admin.admin');
});

// Website Routes
Route::post('/tickets', 'OrderController@create');
Route::post('/klanten', 'CustomerController@create');
// Admin Routes
Route::get('/admin/klanten', 'CustomerController@showAll');
Route::get('/admin/klanten/{id}', 'CustomerController@edit');
Route::put('/admin/klanten/{id}', 'CustomerController@update');
Route::get('/admin/klanten/{id}/delete', 'CustomerController@destroy');
Route::get('/admin/bestellingen', 'OrderController@showAll');
Route::get('/admin/bestellingen/{id}', 'OrderController@edit');
Route::put('/admin/bestellingen/{id}', 'OrderController@update');
Route::get('/admin/bestellingen/{id}/delete', 'OrderController@destroy');
