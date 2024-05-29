<?php

use App\Http\Controllers\ComicPageController;
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
    return view('welcome');
});

Route::get('/comics', [ComicPageController::class, 'index'])->name('comics.index');

// create (deve stare prima della show)
Route::get('/comics/create', [ComicPageController::class, 'create'])->name('comics.create');

// show
Route::get('/comics/{comic}', [ComicPageController::class, 'show'])->name('comics.show');


Route::post('/comics', [ComicPageController::class, 'store'])->name('comics.store');