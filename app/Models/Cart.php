<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['flight_id', 'user_id', 'ticket_count', 'cart_status', 'status'];


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
    }
}
