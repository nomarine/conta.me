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

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('site.index');

Route::get('bills', 'App\Http\Controllers\BillController@bill')->name('site.bill.index');
Route::get('bill_registration', 'App\Http\Controllers\BillController@bill_registration')->name('site.bill.registration');
Route::middleware('log.form')->post('bill_registration/save', 'App\Http\Controllers\BillController@save')->name('site.bill.save');
