<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowControllers;
use App\Http\Controllers\AuthorController;

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
    return view('welcome');
});
Route::get('backend/type/create',[TypeController::class,'create']);
Route::get('backend/book/create',[BookController::class,'create']);
Route::get('backend/student/create',[StudentController::class,'create']);

Route::get('backend/borrows/create',[BorrowControllers::class,'create']);

Route:: get('backend/authors/create',[AuthorController::class,'create']);




//book
Route::get('backend/book/create',[BookController::class,'create'])->name('backend.book.create');
Route::post('backend/book',[BookController::class,'store'])->name('backend.book.store');
Route::get('backend/book',[BookController::class,'index'])->name('backend.book.index');
Route::get('backend/book/{id}',[BookController::class,'show'])->name('backend.book.show');
Route::delete('backend/book/{id}',[BookController::class,'destroy'])->name('backend.book.destroy');
Route::get('backend/book/{id}/edit',[BookController::class,'edit'])->name('backend.book.edit');
Route::put('backend/book/{id}',[BookController::class,'update'])->name('backend.book.update');








Route::get('backend/student/create',[StudentController::class,'create'])->name('backend.student.create');
Route::post('backend/student',[StudentController::class,'store'])->name('backend.student.store');
Route::get('backend/student',[StudentController::class,'index'])->name('backend.student.index');
Route::get('backend/student/{studentId}',[StudentController::class,'show'])->name('backend.student.show');
Route::delete('backend/student/{studentId}',[StudentController::class,'destroy'])->name('backend.student.destroy');
Route::get('backend/student/{studentId}/edit',[StudentController::class,'edit'])->name('backend.student.edit');
Route::put('backend/student/{studentId}',[StudentController::class,'update'])->name('backend.student.update');





Route::get('backend/borrows/create',[BorrowControllers::class,'create'])->name('backend.borrows.create');
Route::post('backend/borrows',[BorrowControllers::class,'store'])->name('backend.borrows.store');
