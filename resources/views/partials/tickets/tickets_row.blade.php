<tr>

    <td>{{$ticket->id}}</td>
    <td>{{$ticket->passenger_name}}<br>{{$ticket->passenger_address}}<br>{{$ticket->passenger_phone}}<br>{{$ticket->passenger_email}}</td>
    <td>{{$ticket->flight_name}}</td>
    <td>{{$ticket->ticket_type}}</td>
    <td>{{$ticket->total_cost}}</td>
    <td>{{$ticket->adults_count}}+{{$ticket->kids_count}}</td>
    <td>{{$ticket->status==1?'OK':'Cancelled'}}</td>

    <td>
        @include('partials.editor',['id' => $ticket->id,'model'=>'tickets'])
    </td>
</tr>