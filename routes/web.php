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

Route::get('/','Site\HomeController@index')->name('home');

Route::prefix('painel')->group(function(){

    Route::get('/', 'Admin\HomeController@index')->name('admin');

    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
    route::post('login', 'Admin\Auth\LoginController@authenticate');

    Route::get('register', 'Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::resource('users', 'Admin\UserController');
    Route::resource('pages', 'PageController');

    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::put('profilesave', 'ProfileController@save')->name('profile.save');

    Route::get('settings', 'SettingController@index')->name('settings');
    Route::put('settingssave', 'SettingController@save')->name('settings.save');


});

Route::get('page/{slug}', 'PageController@single')->name('page.single');
