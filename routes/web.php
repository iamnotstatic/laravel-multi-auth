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

// Auth::routes();
//Users
Route::get('/register', 'Auth\user\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\user\RegisterController@register');
Route::get('/login', 'Auth\user\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\user\LoginController@login')->name('user_login');
Route::get('/logout', 'Auth\user\LoginController@showLogout')->name('logout');
Route::post('/logout', 'Auth\user\LoginController@logout');
Route::get('/user', 'HomeController@index')->name('user_home');



// //Admin routes
Route::get('/admin_login', 'Auth\admin\AdminLoginController@showLoginForm')->name('admin_login');
Route::post('/admin_login', 'Auth\admin\AdminLoginController@login')->name('admin_login');
Route::post('/admin_logout', 'Auth\admin\AdminLoginController@logout')->name('admin_logout');

Route::get('/admin_register', 'Auth\admin\AdminRegisterController@showRegistrationForm')->name('admin_register');
Route::post('/admin_register', 'Auth\admin\AdminRegisterController@register')->name('admin_register');
Route::get('/admin', 'AdminController@index')->name('admin_home');