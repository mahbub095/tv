<?php


use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlockIpController;
use App\Http\Controllers\Backend\ChannelController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::resource('channel', ChannelController::class);
Route::resource('blockip', BlockIpController::class);
Route::resource('user', UserController::class);
