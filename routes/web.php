<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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




Route::prefix('/')->group(function () {

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
    Route::get('/regis', fn() => view('user.registation'))->name('regis');
    Route::get('/role', fn() => view('user.role'))->name('role');

  
    Route::get('/veterinarians', fn() => view('Veterinarians.vaccine.dashboard'))
         ->name('veterinarians.dashboard');

         Route::post('/register',[AuthController::class,'register']);
         Route::post('/loginUser',[AuthController::class,'loginUser']);
         Route::get('/petowner',[AuthController::class,'petowner']);
         Route::get('/animalshelter',[AuthController::class,'animalshelter']);
         Route::get('/veterinarian',[AuthController::class,'veterinarian']);
         Route::get('/logout',[AuthController::class,'logout']);
});


