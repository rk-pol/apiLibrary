<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('books/{id}', [BookController::class, 'show']);
Route::get('books/all', [BookController::class, 'all']);
Route::get('books/{id}/books', [BookController::class, 'books']);

Route::get('authors/{id}', [AuthorController::class, 'show']);
Route::get('authors/all', [AuthorController::class, 'all']);
Route::get('authors/{id}/books', [AuthorController::class, 'books']);


Route::get('genres/{id}', [GenreController::class, 'show']);
Route::get('genres/all', [GenreController::class, 'all']);
Route::get('genres/{id}/books', [GenreController::class, 'books']);

Route::get('languages/{id}', [LanguageController::class, 'show']);
Route::get('languages/all', [LanguageController::class, 'all']);
Route::get('languages/{id}/books', [LanguageController::class, 'books']);

Route::get('search/{context}', [SearchController::class, 'search']);
