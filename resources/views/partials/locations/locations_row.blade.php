<tr>
    <td>{{$location->id}}</td>
    <td>{{$location->name}}</td>
    <td>
        @include('partials.editor',['id' => $location->id,'model'=>'locations'])
    </td>
</tr>