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
Route::get('contact', 'FrontController@contact_us');
Route::get('booking', 'FrontController@booking');



Route::prefix('/admin')->group(function () {
    Route::resource('flights', 'FlightController');
    Route::resource('airlines', 'AirlinesController');
    Route::resource('locations', 'LocationController');
    Route::resource('users', 'UserController');
    Route::resource('tickets', 'TicketController');
    Route::resource('carts', 'CartController');
    Route::get('search', 'SearchController@search');
    Route::get('book-ticket', 'SearchController@bookTickets');
    Route::get('send_mail', 'TicketController@send_mail');
    Route::get('send_sms', 'TicketController@send_sms');
    Route::get('ticket', 'TicketController@getTicket');
    Route::get('/', function () {
        $users = factory(App\User::class, 5)->make();
        return view('pages.home', compact('users'));
    })->name('dashboard');
});


Route::group(['middleware' => 'auth'], function () {
    // Route::get('/', function () {
    //     $users = factory(App\User::class, 5)->make();
    //     return view('pages.home', compact('users'));
    // })->name('dashboard');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');
