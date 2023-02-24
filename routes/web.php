<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\bidController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;



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
    return view('welcome');
});
// Route::get('/', function () {
//     return view('login');
// });


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
    Route::post('/item/{id}/stop', [itemController::class, 'stop'])->name('item.stop');
    Route::post('/item/{id}/play', [itemController::class, 'start'])->name('item.play');
    Route::delete('/item/{item_id}', [itemController::class, 'destroy'])->name('item.destroy');

    Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori', [kategoriController::class, 'store'])->name('kategori.store');
    Route::put('/kategori/{kategori_id}', [kategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{kategori_id}', [kategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
    Route::get('/admin/item', [adminController::class, 'item'])->name('admin.item');
    Route::get('/admin/kategori', [adminController::class, 'kategori'])->name('admin.kategori');
    Route::get('/admin/role', [adminController::class, 'role'])->name('admin.role');


    Route::get('/petugas', [petugasController::class, 'index'])->name('petugas.index');
    Route::get('/petugas/item', [petugasController::class, 'item'])->name('petugas.item');
    Route::get('/petugas/kategori', [petugasController::class, 'kategori'])->name('petugas.kategori');

    Route::get('/home_user', [userController::class, 'index'])->name('user.home');
    Route::get('/cek', [userController::class, 'cek'])->name('user.cek');
    Route::get('/history', [userController::class, 'history'])->name('user.history');
    Route::get('/search', [userController::class, 'search'])->name('user.search');
    Route::get('/user/kategori', [userController::class, 'kategori'])->name('user.kategori');

    Route::get('/item-detail/{item_id}', [bidController::class, 'show'])->name(('bid.show'));
    Route::post('/item-detail/{item_id}', [bidController::class, 'store'])->name(('bid.store'));

    Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori.index');
    Route::get('/pdf', [adminController::class, 'pdf'])->name('admin.pdf');
    // Route::get('/search', [searchController::class, 'index'])->name('search.index');
    // Route::get('/search', function(Request $request) {
    //     $search = $request->input('search');
    //     $data = DB::table('item')
    //             ->where('nama', 'LIKE', '%'.$search.'%')
    //             ->get();

    //     return response()->json($data);
    //   });

    Route::get('/search',[searchController::class, 'index'] )->name('search.index');

});

require __DIR__.'/auth.php';
