<?php

use App\Http\Controllers\ArtController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Auth::routes();

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/art', [ArtController::class, 'index'])->name('art.index');
Route::get('/art/{id}', [ArtController::class, 'show'])->name('art.show');
Route::get('/create/art', [ArtController::class, 'create'])->middleware('auth')->name('art.create');
Route::post('/store/art', [ArtController::class, 'store'])->middleware('auth')->name('art.store');
Route::get('/edit/art/{id}', [ArtController::class, 'edit'])->middleware('auth')->name('art.edit');
Route::put('/update/art/{id}', [ArtController::class, 'update'])->middleware('auth')->name('art.update');
Route::delete('/delete/art/{id}', [ArtController::class, 'delete'])->middleware('auth')->name('art.delete');

Route::get('/artists', [ArtistsController::class, 'index'])->name('artists.index');

Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->middleware('auth')->name('profile.edit');
Route::put('/profile/{id}/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');
Route::get('/profile/{id}/edit/social', [ProfileController::class, 'editSocial'])->middleware('auth')->name('profile.editSocial');
Route::put('/profile/{id}/update/social', [ProfileController::class, 'updateSocial'])->middleware('auth')->name('profile.updateSocial');