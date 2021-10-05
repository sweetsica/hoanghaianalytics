<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;
use App\Http\Controllers\VisitorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\UserController@getLogin')->name('user.login.get');

Route::get('/dashboard','App\Http\Controllers\VisitorController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/clear','App\Http\Controllers\UserController@userSessionClear')->name('clear.session');
Route::get('/generate-shorten-link', [ShortLinkController::class,'index'])->name('shortlink')->middleware('auth');
Route::post('/generate-shorten-link', [ShortLinkController::class,'store'])->name('generate-shorten-link.post')->middleware('auth');

//create account with email and username
//Route::get('/register','App\Http\Controllers\UserController@getRegister');
//Route::post('/register','App\Http\Controllers\UserController@postRegister')->name('user.create');

//login - check session username
Route::get('/login','App\Http\Controllers\UserController@getLogin');
Route::post('/login','App\Http\Controllers\UserController@checkLogin')->name('user.login');

//visitor
Route::get('/visitor-manage','App\Http\Controllers\VisitorController@index')->name('visitor.manage')->middleware('auth');

//Survey
Route::get('/khaosat','App\Http\Controllers\SurveyController@create')->name('khaosat');
Route::post('/khaosat','App\Http\Controllers\SurveyController@store')->name('khaosat.save');
Route::get('/khaosat-list','App\Http\Controllers\SurveyController@list')->name('khaosat.list')->middleware('auth');;

//Route Shortlink
Route::get('short-link/{id}',[ShortLinkController::class,'delete'])->name('shortlink.delete');
Route::get('{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');

