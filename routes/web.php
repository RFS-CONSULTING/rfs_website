<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\homeController;
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

Route::get('/apropos',[homeController::class,'aboutus'])->name('aboutus');
Route::get('/equipe',[homeController::class,'team'])->name('team');
Route::get('/realisations',[homeController::class,'realisations'])->name('realisations');
Route::get('/contacts',[homeController::class,'contacts'])->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
