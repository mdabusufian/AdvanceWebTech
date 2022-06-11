<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;



Route::get('/home',[pagecontroller::class, 'index'])->name('Home');
Route::get('/about',[pagecontroller::class, 'about'])->name('about');
Route::get('/ourteams',[pagecontroller::class, 'our'])->name('our');
Route::get('/contact',[pagecontroller::class, 'contact'])->name('contact');
Route::get('/service',[pagecontroller::class, 'service'])->name('service');