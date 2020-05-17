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

Route::get('/','TeamController@getAllTeam' );
Route::get('/match-fixtures', 'MatchController@getAllMatches')->name('matches');
Route::get('/teams', 'TeamController@getAllTeam')->name('team');
Route::get('/points-tables', 'PointController@getTeamPoints')->name('points');
Route::get('/players/{id?}', 'PlayerController@getPlayers')->name('players');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
