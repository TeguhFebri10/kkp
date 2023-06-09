<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware('admin')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    Route::get('/create', [InputController::class, 'create'])->name('create');

    Route::get('/public/kategori/create1', [KategoriController::class, 'create1'])->name('create1');

});


