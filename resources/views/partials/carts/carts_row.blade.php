<tr>

    <td>{{$cart->id}}</td>
    <td>{{$cart->user->name}}</td>
    <td>{{$cart->flight_name}}</td>
    <td>{{$cart->ticket_count}}</td>
    <td>{{$cart->cart_status==1?'OK':'Cancelled'}}</td>
    <td>
        @include('partials.editor',['id' => $cart->id])
    </td>
</tr>