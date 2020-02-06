<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('prodi','ProdiController@index');
Route::post('prodi','ProdiController@create');
Route::delete('prodi/{id}/delete','ProdiController@delete');
Route::get('fingerprint','FingerprintController@index');
Route::post('fingerprint','FingerprintController@create');
Route::delete('fingerprint/{id}/delete','FingerprintController@delete');
Route::get('user','UserController@index');
Route::post('user','UserController@create');
Route::delete('user/{id}/delete','UserController@delete');
Route::get('sprint','SprintController@index');
Route::post('sprint','SprintController@create');
Route::delete('sprint/{id}/delete','SprintController@delete');
Route::get('absencelog','AbsencelogController@index');
Route::post('absencelog','AbsencelogController@create');
Route::delete('absencelog/{id}/delete','AbsencelogController@delete');
Route::get('absenfp','AbsencelogController@absenfp');
Route::get('kelompok','KelompokController@index');
Route::post('kelompok','KelompokController@create');
Route::delete('kelompok/{id}/delete','KelompokController@delete');
