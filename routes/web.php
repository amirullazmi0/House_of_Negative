<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\ReleaseController;

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

// USERController
Route::get('/', [UserController::class, 'index']);
Route::get('/release', [UserController::class, 'release']);
Route::get('/release/{release:slug}', [UserController::class, 'detail_release']);

Route::get('/event', [UserController::class, 'event']);
Route::get('/event/{event:slug}', [UserController::class, 'detail_event']);

Route::get('/merch', [UserController::class, 'merch']);
Route::get('/merch/{merch:slug}', [UserController::class, 'detail_merch']);

Route::get('/news', [UserController::class, 'news']);
Route::get('/news/{news:slug}', [UserController::class, 'detail_news']);

Route::get('/about', [UserController::class, 'about']);

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Register
Route::get('/asdlkj', [LoginController::class, 'register'])->middleware('guest');
Route::post('/asdlkj', [LoginController::class, 'store']);

// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/profil', [AdminController::class, 'profil'])->middleware('auth');

// RELEASE
Route::resource('/admin/release', ReleaseController::class)->middleware('auth');
Route::get('/admin/release/{release:slug}', [ReleaseController::class, 'show'])->middleware('auth');
Route::get('/admin/release/{release:slug}/edit', [ReleaseController::class, 'edit'])->middleware('auth');
Route::post('/admin/release/{release:slug}/update', [ReleaseController::class, 'update'])->middleware('auth');
Route::get('/admin/release/delete/{release:slug}', [ReleaseController::class, 'destroy'])->middleware('auth');

// ADMIN CATEGORY
Route::get('/admin/category', [AdminController::class, 'category'])->middleware('auth');
Route::get('/admin/category/{category:slug}', [AdminController::class, 'category_one'])->middleware('auth');
Route::get('/admin/talent/{talent:slug}', [AdminController::class, 'talent_one'])->middleware('auth');

// EVENT
Route::resource('/admin/event', EventController::class)->middleware('auth');
Route::get('/admin/event/{event:slug}', [EventController::class, 'show'])->middleware('auth');
Route::get('/admin/event/{event:slug}/edit', [EventController::class, 'edit'])->middleware('auth');
Route::post('/admin/event/{event:slug}/update', [EventController::class, 'update'])->middleware('auth');
Route::get('/admin/event/delete/{event:slug}', [EventController::class, 'destroy'])->middleware('auth');

// MERCH
Route::resource('/admin/merch', MerchController::class)->middleware('auth');
Route::get('/admin/merch/{merch:slug}', [MerchController::class, 'show'])->middleware('auth');
Route::get('/admin/merch/{merch:slug}/edit', [MerchController::class, 'edit'])->middleware('auth');
Route::post('/admin/merch/{merch:slug}/update', [MerchController::class, 'update'])->middleware('auth');
Route::get('/admin/merch/delete/{merch:slug}', [MerchController::class, 'destroy'])->middleware('auth');

// NEWS
Route::resource('/admin/news', NewsController::class)->middleware('auth');
Route::get('/admin/news/{news:slug}', [NewsController::class, 'show'])->middleware('auth');
Route::get('/admin/news/{news:slug}/edit', [NewsController::class, 'edit'])->middleware('auth');
Route::post('/admin/news/{news:slug}/update', [NewsController::class, 'update'])->middleware('auth');
Route::get('/admin/news/delete/{news:slug}', [NewsController::class, 'destroy'])->middleware('auth');

Route::get('/admin/about', [AdminController::class, 'about'])->middleware('auth');
