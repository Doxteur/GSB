<?php

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
    return view('welcome');
});



Route::get('/login',function(){
    return view('login');
});

// Dashboard Route
Route::get('/dashboard', [NoteController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [NoteController::class, 'getByPraticien'])->name('getByPraticien');


// Praticien Route
Route::get('/praticien', [PraticienController::class, 'index'])->name('praticien');
Route::post('/praticien', [PraticienController::class, 'getByPraticienName'])->name('getByPraticienName');


Route::get('test',function(){
    return view('test');
});