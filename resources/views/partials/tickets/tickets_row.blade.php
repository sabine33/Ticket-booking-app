<tr>

    <td>{{$ticket->id}}</td>
    <td>{{$ticket->user->name}}</td>
    <td>{{$ticket->flight_name}}</td>
    <td>{{$ticket->ticket_count}}</td>
    <td>{{$ticket->status==1?'OK':'Cancelled'}}</td>

    <td>
        @include('partials.editor',['id' => $ticket->id])
    </td>
</tr>