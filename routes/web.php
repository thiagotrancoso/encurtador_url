<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RedirectController;
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

Route::redirect('/', '/admin', 301);

Route::get('login', [LoginController::class, 'form'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login'])->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'allLinks'])->name('admin.all-links');
});

Route::get('/{codeUrl}', [RedirectController::class, 'redirect']);
