<?php

use App\Http\Controllers\fornt\HomeContoller;
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


Route::get('/',[HomeContoller::class, 'index'])->name('home');
Route::get('/pricing',[HomeContoller::class, 'pricing'])->name('home.pricing');
Route::get('/contact',[HomeContoller::class, 'contact'])->name('home.contact');
