<?php


use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlockIpController;
use App\Http\Controllers\Backend\ChannelController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\FrontendController;
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


Route::get('/', [FrontendController::class, 'index'])->name('home');

require __DIR__ . '/auth.php';


/** Profile Routes */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('channel', ChannelController::class);
Route::resource('blockip', BlockIpController::class);
Route::resource('user', UserController::class);
