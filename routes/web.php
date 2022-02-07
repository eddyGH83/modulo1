<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome2');
});

Route::get('/estudiante', function () {
    return view('persona/estudiante');
});

Route::get('/alumno', function () {
    return 'Alumno...';
});

/* Route::get('/alumno/{name}', function ($name) {
    return 'Alumno:'.$name;
}); */

Route::get('/alumno/{name?}', function ($name) {
    return 'Alumno:'.$name;
})->where('name','[a-zA-z0-9/*]+');