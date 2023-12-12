<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Logout;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    ['prefix' => 'auth'], function () {
    Route::get('/login', [Login::class, 'form']);
    Route::post('/login', [Login::class, 'login'])->name('login');
    Route::get('/logout', [Logout::class, 'logout'])->name('logout');
});

Route::resource('employees', \App\Http\Controllers\EmployeeController::class);
