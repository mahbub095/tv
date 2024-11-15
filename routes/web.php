<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Installer\InstallerController;
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


Route::get('/', [FrontendController::class, 'index'])->name('home2');
Route::get('404', function () {
    return abort(404);
})->name('404');

Route::get('/install/check/{param}', [InstallerController::class, 'check'])->name('install.check');
Route::get('pre/install', [InstallerController::class, 'preinstall'])->name('preinstall');
Route::get('/install', [InstallerController::class, 'install'])->name('install')->middleware('installer');
Route::get('/install/info', [InstallerController::class, 'info'])->name('install.info');
Route::post('/install/store', [InstallerController::class, 'send']);

require __DIR__ . '/auth.php';


/** Profile Routes */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

