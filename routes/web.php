<?php

use App\Http\Controllers\SellerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ProductsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[pageController::class,'Home'])->name('Home');

Route::get('/dashboard1',[pageController::class,'dashboard1'])->name('dashboard1')->middleware('login');

Route::get('/login',[loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
Route::post('/login',[loginController::class,'loginSubmitted'])->name('login');
Route::get('/registration',[loginController::class,'registration'])->name('registration');
Route::post('/registration',[loginController::class,'registrationSubmitted'])->name('registration');
Route::get('/profile',[sellerController::class,'profile'])->name('profile')->middleware('login');
Route::get('/editprofile',[sellerController::class,'editprofile'])->name('editprofile')->middleware('login');
Route::post('/editprofile',[sellerController::class,'editprofileSubmitted'])->name('editprofile')->middleware('login');


Route::get('/productdelete/{id}',[ProductsController::class, 'productDelete'])->name('productdelete')->middleware('login');
Route::get('/productedit/{id}',[ProductsController::class, 'productedit'])->name('productedit')->middleware('login');
Route::post('/productedit',[ProductsController::class, 'productedit'])->name('productedit')->middleware('login');


Route::get('/addProduct',[ProductsController::class,'addProduct'])->name('addProduct')->middleware('login');
Route::post('/addProduct',[ProductsController::class,'addProductSubmit'])->name('addProduct')->middleware('login');
Route::get('/editProduct',[ProductsController::class,'editProduct'])->name('editProduct')->middleware('login');
Route::post('/editProduct',[ProductsController::class,'editProductSubmit'])->name('editProduct')->middleware('login');

Route::get('/dashboard',[sellerController::class,'dashboard'])->name('dashboard')->middleware('login'); 

Route::get('/search',[pageController::class,'search'])->name('search');