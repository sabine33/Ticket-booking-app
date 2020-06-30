  <ul class="list-inline my-1 d-flex">
      <li class="list-inline-item">
          <button class="btn btn-info btn-sm rounded-0" type="button" data-id="{{$id}}" data-toggle="modal" data-target="#editModal" data-type='view' data-placement="top" title="View"><i class="fa fa-table"></i></button>
      </li>
      <li class="list-inline-item">
          <button class="btn btn-success btn-sm rounded-0" type="button" data-id="{{$id}}" data-toggle="modal" data-target="#editModal" data-type='edit' data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
      </li>
      <li class="list-inline-item">
          <button class="btn btn-danger btn-sm rounded-0 btn-delete" id="delete_button_{{$id}}" data-id="{{$id}}" type="button" data-toggle="modal" data-target="#deleteModal" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
      </li>
  </ul>