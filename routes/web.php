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
Route::get('/jobs', 'JobController@index')->name('jobs');
// Route::resource('patients', 'PatientsController');
Route::get('/patients', 'PatientsController@index')->name('patients');
Route::get('/patients/form', 'PatientsController@create')->name('pForm');
Route::post('/patients/store', 'PatientsController@store')->name('storePatient');
Route::get('/patients/edit{id}', 'PatientsController@edit')->name('editPatient');
Route::post('/patients/update{id}', 'PatientsController@update')->name('updatePatient');
Route::get('/patients/delete{id}', 'PatientsController@delete')->name('deletePatient');

Route::get('/drugs', 'DrugsController@index')->name('drugs');
Route::get('/drugs/form', 'DrugsController@create')->name('dForm');
Route::post('/drugs/store', 'DrugsController@store')->name('storeDrug');
Route::get('/drugs/delete{id}', 'DrugsController@delete')->name('deleteDrug');

Route::get('/prescriptions', 'PrescriptionsController@index')->name('prescriptions');
Route::get('/prescriptions/form', 'PrescriptionsController@create')->name('prForm');
Route::get('/prescriptions/form/{name}', 'PrescriptionsController@editByName')->name('byName');
// Route::get('/prescriptions/form/{id}', 'PrescriptionsController@editByCode')->name('byCode');
Route::post('/prescriptions/store', 'PrescriptionsController@store')->name('storePrescription');
Route::get('/prescriptions/edit{id}', 'PrescriptionsController@edit')->name('editPrescription');
Route::post('/prescriptions/update{id}', 'PrescriptionsController@update')->name('updatePrescription');

Route::get('/cautions', 'CautionController@index')->name('cautions');
