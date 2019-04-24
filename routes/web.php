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

Route::get('/management/organizations', 'ManagementController@organizations')->name('organizations');
Route::get('/management/organization/{organization}', 'ManagementController@organization')->name('organization');
Route::get('/management/worker/{worker}', 'ManagementController@worker')->name('worker');
Route::post('/organization/upload', 'DownloadController@organizationUpload')->name('organization.upload');
Route::post('/worker/upload/{id}', 'DownloadController@workerUpload')->name('worker.upload');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/organization', 'OrganizationController', ['as' => 'admin']);
    Route::get('worker/create/{id}', 'WorkerController@create')->name('admin.worker.create');
    Route::resource('/worker', 'WorkerController', ['except' => 'create', 'as' => 'admin']);
});

Route::get('/', function () {
    return view('management.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

