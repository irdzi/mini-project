<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\BerandaController;
use App\Http\Controllers\User\BooksmarksController;
use App\Http\Controllers\User\SeePostController;
use App\Http\Controllers\User\ExplorePostController;
use App\Http\Controllers\User\NotifikasiController;
use App\Http\Controllers\User\PostingController;
use App\Http\Controllers\User\ProfileController;
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

Route::get('/', function () {
    return redirect('/login');
});


Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/explorepost', [ExplorePostController::class, 'index'])->name('explorepost');
Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');
Route::get('/seepost', [SeePostController::class, 'seepost'])->name('seepost');
Route::get('/posting', [PostingController::class, 'index'])->name('posting');
Route::get('/booksmarks', [BooksmarksController::class, 'index'])->name('bookmarks');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('editprofile');

Route::get('/login', [LoginController::class, 'loginpage'])->name('loginpage');
Route::get('/register', [RegisterController::class, 'registerpage'])->name('registerpage');




