<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[homeController::class,'index'])->name('home');

Route::get('/formations',[FormationController::class,'index'])->name('formation.index');
Route::get('/formation/{slug}',[FormationController::class,'show'])->name('formation.show');
Route::get('/all-formations',[FormationController::class,'getAll'])->name('formation.all');

Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::get('/post/{slug}',[PostController::class,'show'])->name('post.show');

Route::get('/services',[ServiceController::class,'index'])->name('service.index');

Route::get('/apropos',[homeController::class,'aboutus'])->name('aboutus');
Route::get('/equipe',[homeController::class,'team'])->name('team');
Route::get('/realisations',[homeController::class,'realisations'])->name('realisations');
Route::get('/contact', [homeController::class,'contacts'])->name('contact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class, 'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class, 'callback'])->name('socialite.callback');