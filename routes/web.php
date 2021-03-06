<?php

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('words', 'WordsController@index')->name('word.index');
    Route::post('words', 'WordsController@store')->name('word.store');

    Route::get('words_cards', 'WordsController@words_list')->name('words.cards');
});
