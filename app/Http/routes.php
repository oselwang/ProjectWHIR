<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'IndexController@login');

Route::get('home', 'HomeController@index');

Route::get('form', 'FormController@index');

Route::get('formhistory','FormController@history');

Route::get('formhistory/{id}/view','FormController@editForm');

Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('doctortable','TableController@doctor');

    Route::get('exportdoctorexcel','TableController@exportDoctorExcel');

    Route::get('admin/{id}/deletedoctor','TableController@deleteDoctor');

Route::get('formtable','TableController@form');

Route::get('formhistory/{id}/delete','FormController@delete');

Route::get('admin/{id}/delete','TableController@delete');

Route::post('formhistory/{id}/editvariable','FormController@updateForm');

Route::post('login','AjaxController@postLogin');

Route::post('variable', 'FormController@postVariable');

Route::post('register', 'AjaxController@postRegister');

Route::get('exportexcel','TableController@exportExcel');
