<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    <td>
        @include('partials.editor',['id' => $user->id,'model'=>'users'])
    </td>
</tr>