<?php

use App\User;
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

Route::get('/', function () {
    return  ['message' => 'API Successfully Loaded'];
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('login', 'Auth\LoginController@login');
// Route::post('register', 'Auth\RegisterController@register');
// Route::post('register', 'UserController@register');
// Route::post('login', 'UserController@authenticate');
// Route::get('open', 'DataController@open');

Route::get('locations', 'LocationController@getAll');
Route::get('airlines', 'AirlinesController@getAll');
Route::get('flights', 'FlightController@getAll');
Route::resource('flights', 'FlightController');
Route::resource('airlines', 'AirlinesController');
Route::resource('locations', 'LocationController');
Route::resource('users', 'UserController');





Route::group(['middleware' => ['auth']], function () {
    Route::post('locations', 'LocationController@apiStore');
    Route::post('airlines', 'AirlinesController@apiStore');
    Route::post('flights', 'FlightController@apiStore');
    Route::post('users', 'UserController@apiStore');
    Route::get('tickets', 'TicketController@getAll');
    Route::resource('tickets', 'TicketController');
    Route::get('users', 'UserController@getAll');
});
Route::post('tickets', 'TicketController@store');
Route::post('users', 'UserController@register');


Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');

    Route::resource('carts', 'CartController');
});
