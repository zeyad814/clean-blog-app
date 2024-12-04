<?php

// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\admin\AdminCategoryController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\{PostController,AboutController,SiteController,ContactController};

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

Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/send-message',[ContactController::class,'sendMessage']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{post}',[PostController::class,'show']);


// authentication

Route::middleware(['middleware'=>'auth'])->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'storeUser'])->name('store.user');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginUser'])->name('login.user');

// admin routes


Route::get("admin-home",[AdminHomeController::class,"index"])->name('admin.home');


Route::get('admin-category',[AdminCategoryController::class,"index"])->name('category.index');
Route::get('admin-category-create',[AdminCategoryController::class,"create"])->name('category.create');
Route::post('admin-category-store',[AdminCategoryController::class,"store"])->name('category.store');
Route::delete('admin-category-destroy/{category}',[AdminCategoryController::class,"destroy"])->name('category.destroy');




// Route::get('/', [HomeController::class,'index']);

// Route::get('/about',[HomeController::class,'about']);

// Route::get('/contact',[HomeController::class,'contact']);
