<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('index');
Route::get('/index2', function () {return view('index2');})->name('index2');
Route::get('/index3', function () {return view('index3');})->name('index3');
Route::get('/master', function () {return view('layouts.master');})->name('master');
