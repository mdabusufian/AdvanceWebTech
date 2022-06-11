<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\login;
use App\Http\Controllers\loginController;

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



 Route::get('/home',[pagecontroller::class, 'index'])->name('Home');
Route::get('/about',[pagecontroller::class, 'about'])->name('about');
Route::get('/ourteams',[pagecontroller::class, 'our'])->name('our');
Route::get('/contact',[pagecontroller::class, 'contact'])->name('contact');
Route::get('/service',[pagecontroller::class, 'service'])->name('service');
Route::get('/login',[pagecontroller::class, 'login'])->name('login');


Route::get('/login',[pageController::class, 'login'])->name('login');
Route::post('/login',[pageController::class, 'loginSubmitted'])->name('login');

Route::get('/Registration',[pageController::class, 'Registration'])->name('Registration');
Route::post('/Registration',[pageController::class, 'RegistrationSubmitted'])->name('Registration');