<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\SocialiteController;

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AmbassadorController;
use App\Http\Controllers\FormateurController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/ambassador',[AmbassadorController::class,'index'])->name('ambassador');
Route::post('/ambassador/subscription', [AmbassadorController::class, 'store']);
Route::post('/formateur/subscription', [FormateurController::class, 'store']);


// formations

Route::get('/formations',[FormationController::class,'index'])->name('formation.index');
Route::get('/formation/{slug}',[FormationController::class,'show'])->name('formation.show');
Route::get('/all-formations',[FormationController::class,'getAll'])->name('formation.all');

// Posts

Route::get('/posts',[PostController::class,'index'])->name('post.index');
Route::get('/post/{slug}',[PostController::class,'show'])->name('post.show');

// comments 

Route::post('/comment',[CommentsController::class,'store'])->name('comment.store');
Route::get('/comment/{postId}',[CommentsController::class,'show'])->name('comment.show');

// Instructor 

Route::get('/instructors',[InstructorController::class,'index'])->name('instructor.index');
Route::get('/instructor/{id}',[InstructorController::class,'show'])->name('instructor.show');
Route::get('/instructor-form',[InstructorController::class,'create'])->name('instructor.create');
Route::post('/instructor/store',[InstructorController::class,'store'])->name('instructor.store');

// Conference 

Route::get('/conferences',[ConferenceController::class,'index'])->name('conference.index');
Route::get('/conference/{slug}',[ConferenceController::class,'show'])->name('conference.show');

// services

Route::get('/services',[ServiceController::class,'index'])->name('service.index');

// Realisations 

Route::get('/realisations',[HomeController::class,'realisations'])->name('realisations');

// about 

Route::get('/about',[AboutController::class,'index'])->name('about');


// Team
Route::get('/equipe',[HomeController::class,'team'])->name('team');

// Contact 

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.create');


// newsletters

Route::post('/newsletter',[NewsletterController::class,'store'])->name('newsletter.store');


// jetstream|sanctum 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class, 'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class, 'callback'])->name('socialite.callback');