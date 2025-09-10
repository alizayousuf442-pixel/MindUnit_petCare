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

Route::get('/', fn() => view('user.index'))->name('index');
Route::get('/about', fn() => view('user.about'))->name('about');
Route::get('/vet', fn() => view('user.vet'))->name('vet');
Route::get('/services', fn() => view('user.services'))->name('services');
Route::get('/gallery', fn() => view('user.gallery'))->name('gallery');
Route::get('/shop', fn() => view('user.shop'))->name('shop');
Route::get('/blog', fn() => view('user.blog'))->name('blog');
Route::get('/contact', fn() => view('user.contact'))->name('contact');
Route::get('/adopt', fn() => view('user.adopt'))->name('adopt');
Route::get('/login', fn() => view('user.login'))->name('login');
Route::get('/regis', fn() => view('user.registation'))->name('/regis');
Route::get('/veterinerians', fn() => view('Veterinarians.vaccine.dashboard'))->name('/regis');





});

