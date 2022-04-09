<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PraticienController;
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
    return view('login');
});


// Login route
Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/login',[AuthController::class,'checklogin'])->name('checkLogin');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


// Dashboard Route
Route::get('/dashboard', [NoteController::class, 'index'])->name('dashboard')->middleware('checkAuth');;
Route::post('/dashboard', [NoteController::class, 'getByPraticien'])->name('getByPraticien')->middleware('checkAuth');;


// Praticien Route
Route::get('/praticien', [PraticienController::class, 'index'])->name('praticien')->middleware('checkAuth');;
Route::post('/praticien', [PraticienController::class, 'getByPraticienName'])->name('getByPraticienName')->middleware('checkAuth');;


Route::get('test',function(){
    return view('test');
});