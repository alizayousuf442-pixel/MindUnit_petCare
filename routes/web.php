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



Route::prefix('/')->group(function() {

Route::get('/', fn() => view('user.index'));
Route::get('/about', fn() => view('user.about'));
Route::get('/vet', fn() => view('user.vet'));
Route::get('/services', fn() => view('user.services'));
Route::get('/gallery', fn() => view('user.gallery'));
Route::get('/shop', fn() => view('user.shop'));
Route::get('/blog', fn() => view('user.blog'));
Route::get('/contact', fn() => view('user.contact'));



});

