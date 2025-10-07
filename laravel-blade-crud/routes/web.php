<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


// TODO
/* 

 + delete button both in list and show
 + edit button both in list and show

 + delete by id input
 + edit by id input 

 + ENUM for genre
 + calendar date input for year

 + add borrow/return book feature, user can take only max 3 books.

 + improve UI

*/

// RENAME THE FUCKING METHODS AND THE FUCKING ROUTE AND FUCKING FILES,
// SO THAT I CAN FUCKING UNDERSTAND FUCKING EVERYTHING!


// SHOW/LIST
Route::get('/show/{id}', [BookController::class, 'show']);
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

// WHY AND WHEN USE GET, POST, PUT, DELETE.
// WHY USE DELETE AND NOT GET WHEN DELETE, ETC.
