<?php


use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BlockIpController;
use App\Http\Controllers\Backend\ChannelController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
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

/** Category Route */
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('category', CategoryController::class);


Route::put('channel/change-status', [ChannelController::class, 'changeStatus'])->name('channel.change-status');
Route::resource('channel', ChannelController::class);
Route::resource('blockip', BlockIpController::class);
Route::resource('user', UserController::class);

/** settings routes */
Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('logo-setting-update', [SettingController::class, 'logoSettingUpdate'])->name('logo-setting-update');
