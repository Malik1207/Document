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

route::get('/hello', function () {
    $hello = 'Hello world';
    dd($hello);     // dd = dump and die
    // $hello = ['Hello world', 2=> ["hello Jakata", 'Hello Medan']];
    // echo "<pre>";
    // print_r ($hello);
    // echo "</pre>";

    return $hello;
});

