<tr>
    <td>{{$air->id}}</td>
    <td>{{$air->name}}</td>
    <td>
        @include('partials.editor',['id' => $air->id])
    </td>
</tr>