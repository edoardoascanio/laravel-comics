<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $datiComics = config("comics");

    $datiView = [
        "comicsList" => $datiComics
    ];

    return view('comics', $datiView);
})->name('comics');

Route::get('/singleComic/{id}', function ($id) {
    $datiComics = config("comics");
 
    if(!is_numeric($id) || $id < 0 || $id > count($datiComics) - 1){
        abort(404);
    }

    $comicSelected = $datiComics[$id];

    return view('singleComic', [
        "chosenComic" => $comicSelected
    ]);
})->name('singleComic');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');