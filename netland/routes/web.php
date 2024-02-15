<?php

use Illuminate\Support\Facades\Route;

// Route voor het tonen van alle films
Route::get('/films', 'MediaController@films');

// Route voor het tonen van alle series
Route::get('/series', 'MediaController@series');

// Route voor het tonen van alle acteurs
Route::get('/acteurs', 'ActorController@index');

// Route voor het tonen van details van een film of serie
Route::get('/media/{id}', 'MediaController@show');

// Route voor het tonen van films of series van een specifieke acteur
Route::get('/acteurs/{id}/media', 'ActorController@media');

// Eventuele andere routes die je nodig hebt
