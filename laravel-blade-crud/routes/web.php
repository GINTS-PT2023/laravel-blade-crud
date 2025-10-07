<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


// SHOW/LIST
Route::get('/show/{$id}', [BookController::class, 'show']);
Route::get('/list', [BookController::class, 'list'])->name('books.list');

// CREATE/STORE
Route::get('/create', [BookController::class, 'create']);
Route::post('/create', [BookController::class, 'store'])->name('books.store');

// DELETE/DESTROY
Route::get('/delete', [BookController::class, 'delete']);
Route::delete('/books', [BookController::class, 'destroy'])->name('books.destroy');


// EDIT/UPDATE
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
