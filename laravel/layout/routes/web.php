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

route::get('/mahasiswa', function() {
    $nama = [
        "Abdurrachman",
        "Yasir",
        "Malik",
        "Mail",
        "Ali"
    ];

    return view('/mahasiswa', compact('nama'));
});

route::get('/dosen', function() {
    return view('/dosen');
});

route::get('/gallery', function() {
    return view('/gallery');
});