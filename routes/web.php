<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WibookController;
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
Route::get('/',[WibookController::class, 'home'])->name('home'); 
Route::get('/login',[WibookController::class, 'login'])->name('login'); 
Route::post('/login',[WibookController::class, 'auth'])->name('login.auth');
Route::get('/register',[WibookController::class, 'register'])->name('register'); 
Route::post('/register/input',[WibookController::class, 'inputRegister'])->name('register.post');
Route::get('/category',[WibookController::class, 'category'])->name('category');
Route::get('/dashboard',[WibookController::class, 'dashboard'])->name('dashboard');
Route::get('/create',[WibookController::class, 'create'])->name('create');
Route::get('/admin',[WibookController::class, 'admin'])->name('admin');
