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
Route::get('tes1', function () {
	return "Halo, Crotlah!";
});
Route::get('tes2', function () {
	return view('demo/tes2');
});

// tes3 controller
Route::get('tes3', 'DemoController@index');
Route::get('tes3_params', 'DemoController@tes3');
Route::get('tes4/{str}', 'DemoController@tes4');
Route::get('tes5_input', 'DemoController@tes5_input');
Route::post('tes5_input/proses', 'DemoController@tes5_result');

// demo dinamis menu
// ? di gunakan jika parameter boleh null atau kosong
// Route::get('home/{str?}', 'DemoController@home'); 

// DEMO CRUD
Route::get('karyawan/{str?}/{w?}', 'DemoController@karyawan'); 
Route::post('karyawan/proccess', 'DemoController@karyawan_proccess'); 


// portofolio
Route::get('home/{str?}', 'PortoController@index'); 


