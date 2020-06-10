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

Auth::routes();//['verify'=>'true']place this inside the routes method

Route::get('/home', 'HomeController@index')->name('home');

/*
Routes for all actions by the players start with  /PlayingUnit/Profile/{player}
*/
Route::get('/PlayingUnit/Profile/{player}','PlayerController@index'); 
Route::get('/Player/self/EditPlayerProfile/{user}', 'PlayerController@edit')->middleware('auth');
Route::patch('/Player/PlayerProfile/self/saveUpdate/{user}','PlayerController@update')->middleware('auth');
Route::get('/Player/self/ChangePassword/{user}','PlayerController@passwordChange')->middleware('auth');
Route::post('/Player/PlayerProfile/self/ChangePassword/{user}','PlayerController@updatePassword')->middleware('auth');

/*
Routes for all actions by the caoches start with /Coach
*/
Route::get('/TechnicalStaff/Profile/{user}','coachesController@index');
Route::get('/TechnicalStaff/Players/listAll','coachesController@list');
Route::get('/TechnicalStaff/ProfileInfo/{coach}','coachesController@profile');
