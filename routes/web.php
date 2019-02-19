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

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); 

Route::delete('/dashboard/{id}', 'DashboardController@destroy')->name('dashboard');

Route::get('/editjobs/{id}', 'EditjobsController@index')->name('editjobs');
Route::post('/editjobs/{id}', 'EditjobsController@update');

Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::post('/jobs', 'JobsController@store')->name('jobs');

Route::get('/addingjobs', 'AddingJobsController@index')->name('jobs')->middleware('auth');

Route::get('/jobdetail/{id}', 'JobDetailController@jobdetail');

Route::redirect('/home', '/', 302);

Route::get('/userblogposts', 'UserblogpostsController@index')->name('userblogposts');
Route::post('/userblogposts', 'UserblogpostsController@store')->name('userblogposts');

Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@store')->name('admin.login.submit');
    Route::get('/', 'AdminDashboardController@index')->name('admin.dashboard'); 
});

