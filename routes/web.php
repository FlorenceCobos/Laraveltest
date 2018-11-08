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

Route::get('/', 'View@home');
Route::get('/series', 'View@series');
Route::get('/addseries', 'View@addSeries');
Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/updateserie', 'View@updateForm');
Route::post('/updateserieaction', 'Serie@UpdateOne');
Route::get('/addauthor', 'View@addAuthor');
Route::post('/insertauthor', 'Serie@insertAuthor');
Route::get('/addgenre', 'View@addGenre');
Route::post('/insertgenre', 'Serie@insertGenre'); // /insertgenre ca correspond a l'action du formulaire


Route::get('/deleteauthor', 'View@deleteAuthor');

Route::post('/deleteauthor', 'Serie@deleteAuthor');

Route::get('/deletegenre', 'View@deleteGenre');
Route::post('/deletegenre', 'Serie@deleteGenre');


//on utilise view quand c'est de l'affichage, serie quand c'est une modif
