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

Route::get('/coba', function () {
    return "halo bestiii";
});

// string
Route::get('/saya', function () {
    return "hallo";
});

// array
Route::get('/coba1', function () {
    return ['niki', 'niki', 'niki'];
});

// objek json
Route::get('/coba2', function () {
    return [
        'Nama' => 'Niki Sinta',
        'Kelas' => '12 RPL 5',
        'NIS' => 3103120164
    ];
});

// objek json
Route::get('/coba3', function () {
    return response()->json(
        [
            'Nama' => 'Niki Sinta',
            'Kelas' => '12 RPL 5',
            'NIS' => 3103120164
        ],201
    );
});

