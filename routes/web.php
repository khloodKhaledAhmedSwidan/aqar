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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth','auto-check-permission'] , 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('home', 'HomeController@index')->name('main.page');
    Route::resource('setting', 'SettingController')->except(['destroy', 'show', 'create', 'store']);
    Route::resource('rent-period', 'RentPeriodController')->except(['show']);
    Route::resource('realty-type', 'RealtyTypeController')->except(['show']);
    Route::resource('city', 'CityController')->except(['show']);
    Route::resource('contact', 'ContactController')->except(['create','store','edit','update']);
    Route::resource('client', 'ClientController')->except(['create','store','edit','update']);
    Route::resource('advertisement', 'AdvertisementController')->except(['create','store','edit','update']);
    Route::resource('question', 'QuestionController')->except(['create','store']);
    Route::resource('message', 'MessageController')->except(['create','store','edit','update','show']);
    Route::resource('user', 'UserController')->except(['show']);
    Route::get('change-password-form', 'UserController@passForm')->name('pass.form');
    Route::post('change-password', 'UserController@changePass')->name('pass.change');
    Route::resource('role', 'RoleController');



});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
