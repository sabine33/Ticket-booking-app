<?php

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use App\Models\Ticket;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('checkdb', function () {
    $pdo = DB::connection()->getPdo();

    if ($pdo) {
        echo "Connected successfully to database " . DB::connection()->getDatabaseName();
    } else {
        echo "You are not connected to database";
    }
});

Route::get('download', function () {
    $ticket = Ticket::find(1);
    $pdf = App::make('dompdf.wrapper');
    $mode = 'email';
    $filepath = 'pdf/ticket_' . $ticket->id . '.pdf';
    $pdf->loadView('partials.mail.ticket', compact(['ticket', 'mode']))->save($filepath);
    // Storage::put('public/pdf/tickets.pdf', $pdf->output());
    return $pdf->download('ticket.pdf');
    // $pdf = PDF::loadV('partials.mail.tickets', $ticket);
    // return $pdf->download('ticket.pdf');
});
Route::get('info', function () {
    $ticket = Ticket::find(1);
    return view('partials.mail.ticket_info', compact('ticket'));
});

Route::get('/', 'FrontController@homepage');
Route::get('about', 'FrontController@about');
Route::get('search-flights', 'FrontController@search_flight');
Route::get('news', 'FrontController@news');
Route::get('ticket', 'TicketController@getTicket');
Route::get('contact', 'FrontController@contact_us');
Route::get('booking-front/{flight_id}', 'FrontController@booking');
Route::get('search', 'FlightController@search');
Route::post('search', 'FlightController@searchFlights');
Route::get('available_tickets', 'TicketController@getAvailableTickets');
Route::get('cancel_flight', 'TicketController@cancelTicket');
Route::post('cancel_flight', 'TicketController@cancelTicketPost');


Route::post('contact', function (Request $request) {
    $name = $request->name;
    $email = $request->email;
    $message = $request->message;
    $response = array("response" => 'Thanks for contacting us');
    return $response;
});


Route::prefix('admin')->group(function () {
    Route::resource('flights', 'FlightController')->middleware('auth');
    Route::resource('airlines', 'AirlinesController')->middleware('auth');
    Route::resource('locations', 'LocationController')->middleware('auth');
    Route::resource('users', 'UserController')->middleware('auth');
    Route::resource('tickets', 'TicketController')->middleware('auth');
    Route::get('search', 'FlightController@search')->middleware('auth');
    Route::get('book-ticket/{flight_id}', 'TicketController@bookTickets');
    Route::get('send_mail', 'TicketController@send_mail')->middleware('auth');
    Route::get('send_sms', 'TicketController@send_sms')->middleware('auth');
    Route::get('ticket', 'TicketController@getTicket')->middleware('auth');
    Route::get('/', 'DashboardController@index')->middleware('auth')->name('dashboard');
});


Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');
