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


// ---------------------------------------------
//                  LANDING
// ---------------------------------------------
Route::get('/','MainController@index')->name('main.landing');
Route::post('/download/cv','MainController@download')->name('main.cv.download');
Route::get('/about','MainController@about')->name('main.about');
Route::get('/services','MainController@services')->name('main.services');
Route::get('/portfolio','MainController@portfolio')->name('main.portfolio');
Route::get('/contact','MainController@contact')->name('main.contact');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// ----------------------------------------------
//            ADMIN DASHBOARD
// ----------------------------------------------
Route::get('/admin/login','DashboardController@showLoginForm')->name('admin.login');
Route::middleware('is_admin')->prefix('management')->as('admin.')->group(function(){
    Route::get('/','DashboardController@index')->name('dashboard.main');
    // USER
    Route::resource('user','UserController');
    Route::delete('user/{user}/soft','UserController@softDestroy')->name('user.softdestroy');
    Route::post('user/{user}/restore','UserController@restore')->name('user.restore');
    Route::post('user/{user}/block','UserController@block')->name('user.block');
    Route::post('user/{user}/suspend','UserController@suspend')->name('user.suspend');
    // -------
    Route::resource('cv','Main\CvController');
    Route::resource('project','Main\ProjectController');
});


// ----------------------------------------------
//                 BLOGGER DASHBOARD
// ----------------------------------------------
Route::middleware('is_blogger')->prefix('blogger')->as('blogger.')->group(function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard.main');
});