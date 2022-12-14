<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimManajemenController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware('role:relawan')->group(function(){
//     Route::get('dashboard', [HomeController::class, 'index'])->name('home');
//     });
    
//     Route::middleware('role:tim_manajemen')->group(function(){
//     Route::get('admin', [TimManajemenController::class, 'index'])->name('admin.index');
//     });
    
require __DIR__.'/auth.php';

