<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/counter', App\Livewire\Counter::class)->name('counter');
});

Route::get('/', App\Livewire\Login::class)->name('login');
Route::get('/register', App\Livewire\Register::class)->name('register');
