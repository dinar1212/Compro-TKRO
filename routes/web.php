<?php
// use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TampilangalleryController;
use App\Http\Controllers\TampilanserviceController;
use App\Http\Controllers\TampilancontactController;
use App\Http\Controllers\TampilanhomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// USER
Route::get('/', [App\Http\Controllers\TampilanhomeController::class, 'home'])->name('user.home');
Route::get('/gallery', [App\Http\Controllers\TampilangalleryController::class, 'gallery'])->name('user.gallery');
Route::get('/service', [App\Http\Controllers\TampilanserviceController::class, 'service'])->name('user.service');
Route::resource('/contact', TampilancontactController::class);

Auth::routes();



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route galery
Route::resource('/home', \App\Http\Controllers\HomeController::class);
Route::resource('/galery', \App\Http\Controllers\GalleryController::class);
Route::resource('/servis', \App\Http\Controllers\ServiceController::class);
Route::resource('/contak', \App\Http\Controllers\ContactController::class);