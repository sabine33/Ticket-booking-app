<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //id,user_id,flight_id,adults_count,kids_count,passenger_name,passenger_email,passenger_address,passenger_phone,total_cost,departure_type,ticket_type,is_confirmed,status
    protected $fillable = ['flight_id', 'user_id', 'adults_count', 'kids_count', 'passenger_name', 'passenger_email', 'passenger_address', 'passenger_phone', 'total_cost', 'departure_type', 'ticket_type', 'is_confirmed', 'status'];


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function flight()
    {
        return $this->hasOne('App\Models\Flight', 'id', 'flight_id');
    }
    public function getflightNameAttribute()
    {
        $flights = Flight::with(['airlines'])->get();
        $flight = $flights->find($this->flight_id);
        return $flight["airlines"]["name"];
        // return  $flights->find($this->flight_id)->airlines->name;
    }
}
