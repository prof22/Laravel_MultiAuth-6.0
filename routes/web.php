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
Route::get('logout/', 'Auth\LoginController@logout')->name('user.logout');
Route::prefix('admin')->group(function(){
    Route::get('login', 'Auth\AdminLoginController@Showlogin')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
});
Route::prefix('super_admin')->group(function(){
    Route::get('login', 'Auth\SuperAdminLoginController@Showlogin')->name('super_admin.login');
    Route::post('login', 'Auth\SuperAdminLoginController@login')->name('super_admin.login.submit');
    Route::get('logout/', 'Auth\SuperAdminLoginController@logout')->name('super_admin.logout');
    Route::get('dashboard','Super_admin\SuperAdminController@super_dashboard')->name('super_admin.dashboard');
});
