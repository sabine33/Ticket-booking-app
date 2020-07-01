<tr>
    <td>{{$flight->airlines->name}}</td>
    <td>{{$flight->departure_date}}</td>
    <td>{{$flight->from_location->name}}</td>
    <td>{{$flight->to_location->name}}</td>
    <td>{{$flight->departure_time}}</td>
    <td>{{$flight->flight_duration}}</td>
    <td>{{$flight->available_tickets}}</td>

    <td class="font-weight-bold">{{$flight->flight_price_economy}}-{{$flight->flight_price_business}}</td>
    <td>{{$flight->is_international?'YES':'NO'}}</td>

    <td>
        <ul class="list-inline my-1 d-flex">
            <li class="list-inline-item">
                <a href="/booking-front/{{$flight->id}}" class="btn btn-danger">Book Now</a>
                <!-- <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-type='view' data-placement="top" title="View">Book Now</button> -->
            </li>
        </ul>
    </td>
</tr>