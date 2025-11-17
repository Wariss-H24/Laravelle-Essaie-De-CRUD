<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
Route::get('/', [PagesController::class, 'index']);
    
Route::get('/contact-us', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/articles',[ArticlesController::class, 'index']);

Route::get('/article-detail/{article}',[ArticlesController::class, 'show']);

Route::get('/articles/create', [ArticlesController::class, 'create'])->middleware('admin');
Route::post('/articles/create', [ArticlesController::class, 'store'])->middleware('admin');

Route::get('/article/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update'])->middleware('auth');
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete'])->middleware('auth');


//Auth Routes
Route::get('/register',[RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/save',[RegisterController::class, 'store'])->name('save')->middleware('guest');
Route::get('/login',[SessionsController::class, 'index'])->name('login');
Route::post('/login',[SessionsController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout',[SessionsController::class, 'logout'])->name('logout')->middleware('auth');

//Profile Route
Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');