<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DrivingSchoolController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/q1', function () {
    return view('q1');
})->name('q1');

Route::get('/q2', function () {
    return view('q2');
})->name('q2');

Route::get('/carlist', [CarController::class, 'index'])->name('carlist');

Route::get('/carDisplay', [CarController::class, 'searchByCarid1'])->name('carDisplay');

Route::get('/carReservation', [CarController::class, 'searchByCarid2'])->name('carReservation');

//Route::get('/carReservation/{car_id}', [CarController::class, 'show'])->name('carReservation');
Route::post('/carReservation/confirmation', [CarController::class, 'searchByCarid3'])->name('carReservationConfirmation');


Route::get('/lectureReservation', [DrivingSchoolController::class, 'show'])->name('lectureReservation');

//Route::get('/lectureReservation/{car_id}',[DrivingSchoolController::class, 'show'])->name('lectureReservation');
Route::post('/lectureReservation/confirmation', function () {
    return view('lectureReservationConfirmation');
})->name('lectureReservationConfirmation');

Route::get('/completion', function () {
    return view('completion');
})->name('completion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
});

require __DIR__.'/auth.php';

