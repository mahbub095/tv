<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ChannelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\BlockedIpsController;

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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::resource('channel', ChannelController::class);

/** Profile Routes */
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashbaord');

Route::get('blocked_ips', [BlockedIpsController::class,'getAll'])->name('dashboard.blocked_ips');
//Route::get('blocked_ips', 'BlockedIpsController@create')->name('dashboard.create_blocked_ip');;
//Route::post('blocked_ips', 'BlockedIpsController@store')->name('dashboard.store_blocked_ip');;
//Route::delete('blocked_ips/{id}', 'BlockedIpsController@delete')->name('dashboard.delete_blocked_ip');;
