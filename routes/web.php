<?php

use App\Http\Controllers\ContactController;
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

Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
