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

Route::get('/', 'FrontendController@index');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/authenticate', 'Auth\LoginController@login')->name('authenticate');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/backend', function () {
        return view('backend');
    });
    Route::get('/patients', 'PatientController@index');
    Route::post('/patients', 'PatientController@index');
    Route::get('/patients/{id}', 'PatientController@edit');
    Route::get('/patients/create', 'PatientController@create');
});
