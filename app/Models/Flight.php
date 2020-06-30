<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Flight extends Model
{
    protected $fillable = ['departure_date', 'departure_time', 'departure_type', 'max_ticket_count', 'max_luggage_size', 'flight_duration', 'flight_price_economy', 'flight_price_business', 'flight_price_both_way_ratio', 'from_location_id', 'to_location_id', 'airlines_id', 'status'];

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
        $id = $this->id;
        $bought = DB::table('tickets')
            ->selectRaw('sum(adults_count)+sum(kids_count) as bought')->where('flight_id', '=', $id)
            ->pluck('bought')[0];
        $max = DB::table('flights')
            ->selectRaw('max_ticket_count')->where('id', '=', $id)
            ->pluck('max_ticket_count')[0];
        //         $bought_tickets = DB::select(DB::raw("select sum(adults_count)+sum(kids_count) as bought_tickets from tickets where flight_id=:id
        // "), array(
        //             'id' => 1
        //         ));
        return $max - $bought;

        // return array('available_tickets' => $max - $bought);
        // return 100;
    }
}
