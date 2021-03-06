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
Route::delete('/user/{id}', 'Auth\RegisterController@destroy');

// Route::delete('/dashboard/{id}', 'JobsController@destroy')->name('dashboard');

Route::get('/editjobs/{id}', 'JobsController@edit');
Route::post('/editjobs/{id}', 'JobsController@update');

Route::get('/edituser/{id}', 'Auth\RegisterController@edit');
Route::post('/edituser/{id}', 'Auth\RegisterController@update');

Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::post('/jobs', 'JobsController@store')->name('jobs');
Route::delete('/jobs/{id}', 'JobsController@destroy');

Route::get('/addingjobs', 'JobsController@create')->name('jobs')->middleware('auth');

Route::get('/jobdetail/{id}', 'JobsController@show')->name('jobdetail');
Route::post('/jobdetail', 'ResponseController@store');
Route::delete('/jobdetail/{id}', 'ResponseController@destroy');

Route::redirect('/home', '/', 302);

Route::get('/userblogposts', 'UserblogpostsController@index')->name('userblogposts');
Route::post('/userblogposts', 'UserblogpostsController@store')->name('userblogposts');
Route::delete('/dashboard/{id}', 'UserblogpostsController@destroy')->name('userblogposts');

Route::view('/about', 'about');
Route::view('/rules', 'rules');


Route::get('/jobs/search', 'JobsController@search');


Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@store')->name('admin.login.submit');
    Route::get('/', 'AdminDashboardController@index')->name('admin.dashboard');
});

