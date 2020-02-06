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

// Route::prefix('/')->group(function() {
//    Route::get('/', 'ProjectController@index');
// });

// Route::get('/', function () {
//    return view('proyek::dashboard');
// });

Route::resource('project', 'ProjectController');
Route::resource('tim', 'TimController');
Route::resource('membertim', 'MembertimController');
Route::resource('mvp', 'MvpController');

Route::get('/project/pilih/tim/{project}', 'PilihController@tim')->name('project.tim');
Route::match(array('PUT', 'PATCH'), "/project/pilih/tim/edit/{project}", array(
    'uses' => 'PilihController@pilih',
    'as' => 'project.pilih'
));

Route::get('/project/pilih/membertim/{project}', 'PilihController@membertim')->name('project.membertim');