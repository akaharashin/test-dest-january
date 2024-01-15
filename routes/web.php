<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::middleware('auth')->group(function () {
    Route::get('/home', [DestinationController::class, 'index'])->name('home');
    Route::get('/addPage', [DestinationController::class, 'addPage'])->name('addPage');
    Route::post('/addPage', [DestinationController::class, 'add'])->name('add');
    Route::get('/add', [DestinationController::class, 'addPage'])->name('addPage');
    Route::post('/add', [DestinationController::class, 'add'])->name('add');
    Route::get('/edit/{destination}', [DestinationController::class, 'editPage'])->name('editPage');
    Route::post('/edit/{destination}', [DestinationController::class, 'update'])->name('update');
    Route::post('/delete/{destination}', [DestinationController::class, 'delete'])->name('delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

