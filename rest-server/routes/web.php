<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('/jabatan', 'JabatanController@create');
$router->get('/jabatan', 'JabatanController@index');
$router->get('/jabatan/{id}', 'JabatanController@show');
$router->put('/jabatan/{id}', 'JabatanController@update');
$router->delete('/jabatan/{id}', 'JabatanController@destroy');

$router->post('/divisi', 'DivisiController@create');
$router->get('/divisi', 'DivisiController@index');
$router->get('/divisi/{id}', 'DivisiController@show');
$router->put('/divisi/{id}', 'DivisiController@update');
$router->delete('/divisi/{id}', 'DivisiController@destroy');

$router->post('/kecamatan', 'KecamatanController@create');
$router->get('/kecamatan', 'KecamatanController@index');
$router->get('/kecamatan/{id}', 'KecamatanController@show');
$router->put('/kecamatan/{id}', 'KecamatanController@update');
$router->delete('/kecamatan/{id}', 'KecamatanController@destroy');

$router->post('/kota', 'KotaController@create');
$router->get('/kota', 'KotaController@index');
$router->get('/kota/{id}', 'KotaController@show');
$router->put('/kota/{id}', 'KotaController@update');
$router->delete('/kota/{id}', 'KotaController@destroy');

$router->post('/provinsi', 'ProvinsiController@create');
$router->get('/provinsi', 'ProvinsiController@index');
$router->get('/provinsi/{id}', 'ProvinsiController@show');
$router->put('/provinsi/{id}', 'ProvinsiController@update');
$router->delete('/provinsi/{id}', 'ProvinsiController@destroy');

$router->post('/gaji', 'GajiController@create');
$router->get('/gaji', 'GajiController@index');
$router->get('/gaji/{id}', 'GajiController@show');
$router->put('/gaji/{id}', 'GajiController@update');
$router->delete('/gaji/{id}', 'GajiController@destroy');

$router->post('/karyawan', 'KaryawanController@create');
$router->get('/karyawan', 'KaryawanController@index');
$router->get('/karyawan/{id}', 'KaryawanController@show');
$router->put('/karyawan/{id}', 'KaryawanController@update');
$router->delete('/karyawan/{id}', 'KaryawanController@destroy');