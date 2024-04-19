<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     echo "Hello Word";
// });

Route::get('/login',[LoginController::class,'login'])->name('login');

Route::get('/',[HomeController::class,'dashboard'])->name('dashboard');

Route::get('/user',[HomeController::class,'index'])->name('index');

Route::get('/create',[HomeController::class,'create'])->name('create');

Route::post('/store',[HomeController::class,'store'])->name('store');

Route::get('/edit{id}',[HomeController::class,'edit'])->name('edit');

Route::put('/update{id}',[HomeController::class,'update'])->name('update');

Route::delete('/delete{id}',[HomeController::class,'delete'])->name('delete');
