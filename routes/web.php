<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\bidController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;


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
    return view('auth.login');
});

Route::get('/dashboard', [userController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');;

// Route::get('/dashboard', function () {
//     return view('user.home');
// })


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/item', [itemController::class, 'index'])->name('item.index');
    Route::get('/item/{item_id}', [itemController::class, 'show'])->name('item.show');
    Route::post('/item', [itemController::class, 'store'])->name('item.store');
    Route::put('/item/{item_id}', [itemController::class, 'update'])->name('item.update');
    Route::put('/{item_id}', [itemController::class, 'update'])->name('item.update');
    Route::delete('/item/{item_id}', [itemController::class, 'destroy'])->name('item.destroy');

    Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
    Route::get('/admin/item', [adminController::class, 'item'])->name('admin.item');

    Route::get('/home_user', [userController::class, 'index'])->name('user.home');
    Route::get('/cek', [userController::class, 'cek'])->name('user.cek');
    Route::get('/history', [userController::class, 'history'])->name('user.history');

    Route::get('/item-detail/{item_id}', [bidController::class, 'show'])->name(('bid.show'));
    Route::post('/item-detail/{item_id}', [bidController::class, 'store'])->name(('bid.store'));

    Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori.index');

    Route::get('/petugas', function () {
        return view('petugas.home');
    });
});

require __DIR__.'/auth.php';
