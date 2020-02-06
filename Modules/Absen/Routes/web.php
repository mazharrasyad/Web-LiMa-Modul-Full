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
    return view('absen::login');
});

Auth::routes();

Route::group( [ 'prefix' => 'admin' ], function()
{
	Route::get('/dashboard','HomeController@dashboard');
	Route::get('/dashboard/hadir','KehadiranController@hadir');
	Route::get('/dashboard/hadirpersprint/{id}','KehadiranController@hadirpersprint');
	Route::get('/dashboard/hadirpersprint/{id}/poinkelompok','KehadiranController@poinkelompok');
	Route::get('/viewsprint','SprintController@viewsprint');
	Route::post('/viewsprint','SprintController@createsprint');
});


Route::group( [ 'prefix' => 'mahasiswa' ], function()
{
	Route::get('/dashboard','HomeController@dashboard');
	Route::get('/historyabsen/{id}','AbsenController@historyabsen');
	Route::get('/dashboard/{id}/hadir','AbsenController@daftarhadir');
	Route::get('/{id}/hadirpersprint/{sprintid}','AbsenController@hadirpersprint');
	Route::get('/absenmahasiswa/{id}','AbsenController@index');
	
});
Route::post('/absenmahasiswa','AbsenController@createabsen');
Route::get('/loginadmin','AuthController@login');
Route::post('/login/admin','AuthController@loginadmin');
Route::get('/registeruser','AuthController@register');
Route::post('/registeruser','AuthController@create');
Route::get('/logout','HomeController@logout');
