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

Route::get('/editjobs', 'EditjobsController@index')->name('editjobs');
// Route::patch('/dashboard/{id}/edit', 'DashboardController@edit')->name('dashboard');

Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::post('/jobs', 'JobsController@store')->name('jobs');

Route::get('/addingjobs', 'AddingJobsController@index')->name('jobs')->middleware('auth');

Route::get('/jobdetail/{id}', 'JobDetailController@index')->name('jobdetail');

Route::redirect('/home', '/', 302);
