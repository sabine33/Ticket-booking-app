<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //name,airlines_name,date,from_location,to_location,departure_time,flight_duration,ticket_count,flight_price,status
    protected $fillable = ['airlines_id', 'date', 'from_location_id', 'to_location_id', 'departure_time', 'flight_duration', 'flight_price', 'ticket_count', 'status'];

    protected $appends = ['flight_name', 'available_tickets'];


    public function airlines()
    {
        return $this->hasOne('App\Models\Airlines', 'id', 'airlines_id');
    }
    public function from_location()
    {
        return $this->hasOne('App\Models\Location', 'id', 'from_location_id');
    }
    public function to_location()
    {
        return $this->hasOne('App\Models\Location', 'id', 'to_location_id');
    }
    public function getFlightNameAttribute()
    {
        return $this->airlines->name . "-" . $this->from_location->name . " Flight";
    }
    public function getAvailableTicketsAttribute()
    {
        return 100;
    }
}
