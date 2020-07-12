<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function (Request $request) {
    return ['pong'=>true];
});


Route::get('/notes', 'NoteController@all');
Route::get('/note/{id}', 'NoteController@one');
Route::post('/note', 'NoteController@new');
Route::put('/note/{id}', 'NoteController@edit');
Route::delete('/note/{id}', 'NoteController@delete');
