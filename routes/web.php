<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

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
    return view('home');
});

Route::get('/home', [ExerciceController::class, 'index']);
Route::get('/resume', [ExerciceController::class, 'resume']);
Route::get('/projects', [ExerciceController::class, 'projects']);

// Afficher le formulaire de contact
Route::get('/contact', [ExerciceController::class, 'contact']);

// Gérer le formulaire de contact(post)
Route::post('/contact', [ExerciceController::class, 'contactForm']);