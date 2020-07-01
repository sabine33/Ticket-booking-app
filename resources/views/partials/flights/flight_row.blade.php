<tr>
    <td>{{$flight->id}}</td>
    <td>{{$flight->airlines->name}}</td>
    <td>{{$flight->departure_date}}</td>
    <td>{{$flight->from_location->name}}</td>
    <td>{{$flight->to_location->name}}</td>
    <td>{{$flight->departure_time}}</td>
    <td>{{$flight->flight_duration}}</td>
    <td>{{$flight->available_tickets}}</td>

    <td>{{$flight->flight_price_economy}}-{{$flight->flight_price_business}}</td>
    <td>{{$flight->is_international?'YES':'NO'}}</td>

    <td>
        @include('partials.editor',['id' => $flight->id,'model'=>'flights'])
    </td>
</tr>