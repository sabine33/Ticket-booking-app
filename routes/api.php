<?php

use App\Models\Flight;
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


Route::get('filter_flight/{from_id}/{to_id}', function ($from_id, $to_id) {
    $flights = Flight::all()->where('from_location_id', '=', $from_id)->where('to_location_id', '=', $to_id);
    return $flights->toArray();
});

Route::get('get_flight/{id}', function ($id) {
    $flight = Flight::findOrFail($id);
    return $flight;
});




Route::post('users', 'UserController@register');
Route::put('users/{id}', 'UserController@update');
Route::get('users/{id}', 'UserController@show');
Route::delete('users/{id}', 'UserController@destroy');

Route::post('locations', 'LocationController@store');
Route::put('locations/{id}', 'LocationController@update');
Route::get('locations/{id}', 'LocationController@show');
Route::delete('locations/{id}', 'LocationController@destroy');
Route::get('locations', 'LocationController@getAll');

Route::post('airlines', 'AirlinesController@store');
Route::put('airlines/{id}', 'AirlinesController@update');
Route::get('airlines/{id}', 'AirlinesController@show');
Route::delete('airlines/{id}', 'AirlinesController@destroy');
Route::get('airlines', 'AirlinesController@getAll');


Route::post('flights', 'FlightController@store');
Route::put('flights/{id}', 'FlightController@update');
Route::get('flights/{id}', 'FlightController@show');
Route::delete('flights/{id}', 'FlightController@destroy');
Route::get('flights', 'FlightController@getAll');



Route::post('tickets', 'TicketController@store');
Route::put('tickets/{id}', 'TicketController@update');
Route::get('tickets/{id}', 'TicketController@show');
Route::delete('tickets/{id}', 'TicketController@destroy');
Route::get('tickets', 'TicketController@getAll');





// Route::group(['middleware' => ['auth']], function () {
//     Route::post('locations', 'LocationController@apiStore');
//     Route::post('airlines', 'AirlinesController@apiStore');
//     Route::post('flights', 'FlightController@apiStore');
//     Route::get('tickets', 'TicketController@getAll');
//     Route::get('users', 'UserController@getAll');
// });

// Route::group(['middleware' => ['jwt.verify']], function () {
//     Route::get('user', 'UserController@getAuthenticatedUser');
//     Route::get('closed', 'DataController@closed');

//     Route::resource('carts', 'CartController');
// });
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('login', 'Auth\LoginController@login');
// Route::post('register', 'Auth\RegisterController@register');
// Route::post('register', 'UserController@register');
// Route::post('login', 'UserController@authenticate');
// Route::get('open', 'DataController@open');

// Route::get('locations', 'LocationController@getAll');
// Route::get('airlines', 'AirlinesController@getAll');
// Route::get('flights', 'FlightController@getAll');
// Route::resource('flights', 'FlightController');
// Route::resource('airlines', 'AirlinesController');
// Route::resource('locations', 'LocationController');
