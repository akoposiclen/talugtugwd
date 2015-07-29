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

Route::get('/', function () {
    return view('index');
});



Route::get('/mission', ['uses' => 'about\MissionController@index', 'as' => 'mission']);
Route::get('/vision', ['uses' => 'about\VisionController@index', 'as' => 'mission']);
Route::get('/performance', ['uses' => 'about\PerformanceController@index', 'as' => 'performance']);

Route::get('/payment', ['uses' => 'frontline\PaymentController@index', 'as' => 'payment']);
Route::get('/sca', ['uses' => 'frontline\SCAController@index', 'as' => 'sca']);
Route::get('/rtsd', ['uses' => 'frontline\RTSDController@index', 'as' => 'rtsd']);
Route::get('/rsr', ['uses' => 'frontline\RSRController@index', 'as' => 'rsr']);
Route::get('/inquiry', ['uses' => 'frontline\InquiryController@index', 'as' => 'inquiry']);
Route::get('/other', ['uses' => 'frontline\OtherController@index', 'as' => 'other']);