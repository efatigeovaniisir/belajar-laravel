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
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'] , function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    Route::get('/user',[HomeController::class,'index'])->name('index');
    
    Route::get('/create',[HomeController::class,'create'])->name('create');
    
    Route::post('/store',[HomeController::class,'store'])->name('store');
    
    Route::get('/edit{id}',[HomeController::class,'edit'])->name('edit');
    
    Route::put('/update{id}',[HomeController::class,'update'])->name('update');
    
    Route::delete('/delete{id}',[HomeController::class,'delete'])->name('delete');
    
});

