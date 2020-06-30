<?php

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
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




Route::get('/', 'FrontController@homepage');
Route::get('about', 'FrontController@about');
Route::get('search-flights', 'FrontController@search_flight');
Route::get('news', 'FrontController@news');
Route::get('ticket', 'TicketController@getTicket');
Route::get('contact', 'FrontController@contact_us');
Route::get('booking-front/{id}', 'FrontController@booking');
Route::get('search', 'FrontController@search');
Route::post('search', 'FrontController@searchFlights');
Route::get('available_tickets', 'FrontController@getAvailableTickets');
Route::get('cancel_ticket', 'FrontController@cancelTicket');
Route::post('cancel_ticket', 'FrontController@cancelTicketPost');



Route::prefix('admin')->group(function () {
    Route::resource('flights', 'FlightController')->middleware('auth');
    Route::resource('airlines', 'AirlinesController')->middleware('auth');
    Route::resource('locations', 'LocationController')->middleware('auth');
    Route::resource('users', 'UserController')->middleware('auth');
    Route::resource('tickets', 'TicketController')->middleware('auth');
    Route::get('search', 'SearchController@search')->middleware('auth');
    Route::get('book-ticket', 'SearchController@bookTickets')->middleware('auth');
    Route::get('send_mail', 'TicketController@send_mail')->middleware('auth');
    Route::get('send_sms', 'TicketController@send_sms')->middleware('auth');
    Route::get('ticket', 'TicketController@getTicket')->middleware('auth');
    Route::get('/', 'DashboardController@index')->middleware('auth');
});




Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');
