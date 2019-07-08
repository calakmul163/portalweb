<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users', function () {
//     return factory('App\User', 5)->make();
// });

// Route::get('/users', function () {
//     if (rand(1, 10) < 3) {
//         abort(500, 'We could not retrieve the users');
//     }

//     return factory('App\User', 10)->make();
// });

Route::namespace('Api')->group(function () {
    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user}', 'UsersController@show');
    Route::put('/users/{user}', 'UsersController@update');
    Route::delete('/users/{user}', 'UsersController@destroy');

    Route::get('/galeriaportada', 'PageController@galeriaportada');
    Route::get('/notasportada', 'PageController@notasportada');
    Route::get('/infofooter', 'PageController@infofooter');
    Route::get('/noticias', 'PageController@noticias');
    Route::get('/convocatorias', 'PageController@galerias');

    Route::get('/noticias/{id}', 'PageController@noticiashow');
});
