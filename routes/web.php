<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/login',[AdminController::class, 'login'])->name('login');
Route::post('/login',[AdminController::class, 'logins']);
Route::get('/logout',[AdminController::class, 'logout']);

Route::middleware('auth')->group(function(){

    Route::get('/',[AdminController::class, 'index'])->name('home');

    Route::get('/add',[AdminController::class, 'add'])
        ->name('add');
    Route::post('/insert',[AdminController::class, 'create'])
        ->name('insert');

    Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}',[AdminController::class, 'update'])->name('update');

    Route::get('/del/{id}',[AdminController::class, 'del'])->name('del');
});
