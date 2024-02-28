<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
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
Route::get('/', function(){
    return view('welcome');
});


Route::match(['get', 'delete'],'/dashboard', [EventController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/event/create', [EventController::class,'create'])->name('event.create');
    Route::match(['get', 'post'], '/event', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/{event}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/{event}/update', [EventController::class, 'update'])->name('event.update');
    Route::delete('/event/{event}/destroy', [EventController::class, 'destroy'])->name('event.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
