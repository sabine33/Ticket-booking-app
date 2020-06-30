<tr>
    <td>{{$flight->id}}</td>
    <td>{{$flight->airlines->name}}</td>
    <td>{{$flight->date}}</td>
    <td>{{$flight->from_location->name}}</td>
    <td>{{$flight->to_location->name}}</td>
    <td>{{$flight->departure_time}}</td>
    <td>{{$flight->flight_duration}}</td>
    <td>{{$flight->ticket_count}}</td>
    <td>{{$flight->flight_price}}</td>
    <td>
        @include('partials.editor',['id' => $flight->id])
    </td>
</tr>