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
Route::get('/home', 'HomeController@index')->name('home');


//Specialty
Route::get('/specialties', 'SpecialtyController@index'); //registro
Route::get('/specialties/create', 'SpecialtyController@create'); // form de registro
Route::get('/specialties/{specialty}/edit', 'SpecialtyController@edit');// vista para editar

Route::post('/specialties', 'SpecialtyController@store');//envío del form
Route::put('/specialties/{specialty}', 'SpecialtyController@update');// actualizar un campo
Route::delete('/specialties/{specialty}', 'SpecialtyController@destroy');// actualizar un campo

//Doctors
Route::resource('doctors','DoctorController');

//Patients
