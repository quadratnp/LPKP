<?php

use Illuminate\Support\Facades\Route;
use App\Models\Program;

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
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT"
    ]);
});

Route::get('/program', function () {
    return view('program',[
        "title" => "PROGRAM",
        "posts" => Program::all()
    ]);
});
