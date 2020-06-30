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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

// Route::resource('flights', 'FlightController');
// Route::get('flights/locations', 'FlightController@get_locations');
Route::resource('flights', 'FlightController');
Route::resource('locations', 'LocationController');
Route::resource('users', 'UserController');
Route::resource('tickets', 'TicketController');

Route::resource('airlines', 'AirlinesController');
Route::post('tickets', 'TicketController@store');


Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
    Route::resource('carts', 'CartController');
});
