<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Home;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\CourseController;

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
// route halaman utama
Route::get('/', [Home::class, 'index'])->name('home');

// set route autentikasi
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authorization'])->name('authorize')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store_data_register'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// set route learning path
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/jurusan/{jurusan}/course', [JurusanController::class, 'show'])->name('course');
Route::get('/jurusan/{jurusan}/course/{course}', [CourseController::class, 'show'])->name('course-class');

// set route langganan
Route::get('/langganan', [CourseController::class, 'index'])->name('langganan')->middleware('auth');