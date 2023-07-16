<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('/user')->group(function(){
    Route::post('/login', 'App\Http\Controllers\LoginController@login');
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\UserController@all');
    Route::post('/publish', 'App\Http\Controllers\PhrasesController@createPhrase');
    Route::get('/filter_phrases_date/{date}', 'App\Http\Controllers\PhrasesController@getPhrasesDate');
    Route::post('/comment', 'App\Http\Controllers\CommentsController@createComment');
});

/* Route::group([
    'prefix' => 'auth'
], function (){
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'Authcontroller@user');
    });
});
 */