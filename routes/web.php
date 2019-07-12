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
 
Auth::routes();
Route::get('/', 'HomeController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@index')->name('user.dashboard');

Route::get('/job/add','JobController@add')->name('job.add');

Route::post('/job/store','JobController@store')->name('job.store');

Route::post('/job/job_status','JobController@job_status')->name('job.job_status');

Route::get('/job/status','JobController@status')->name('job.status');

Route::get('/job/upload','JobController@upload')->name('job.upload');

Route::get('/job/upload_result','JobController@upload_result')->name('job.upload_result');

Route::get('/user/delete/{id}','HomeController@user_delete')->name('user.delete');


Route::get('/admin/job','Admin\AdminController@job_manage')->name('admin.job_manage');

Route::get('admin/dashboard','Admin\AdminController@index')->name('admin.dashboard');

Route::get('admin/usermanage','Admin\AdminController@usermanage')->name('admin.usermanage');

Route::get('admin/panelmanage','Admin\PanelController@index')->name('admin.panelmanage');

Route::get('admin/panel_details/{id}','Admin\PanelController@panel_details')->name('admin.panel_details');

Route::get('admin/panel/add','Admin\PanelController@add')->name('admin.panel.add');