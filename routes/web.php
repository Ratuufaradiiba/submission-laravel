<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Artikel
Route::resource('artikel', ArtikelController::class);
Route::get('/artikeldetail/{id}', [HomeController::class, 'artikeldetail'])->name('artikeldetail');
Route::get('/upload',[ArtikelController::class, 'create'])->name('upload');
Route::post('/upload',[ArtikelController::class, 'store'])->name('upload.artikel');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::patch('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update');

//Master Data
Route::get('/artikeldata', [ArtikelController::class, 'artikelData'])->name('artikeldata');
Route::resource('kategori', KategoriController::class);
Route::resource('tag', TagController::class);


//About
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::delete('artikel/{id}', 'ArtikelController@destroy')->name('artikel.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
