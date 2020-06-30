@extends('layouts.main')
@section('content')


@include('partials.delete_dialog')
@include('partials.users.users_form',['users'=>$users])

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users </h1>
    <p class="mb-4"> Please use this section to manage different users.</p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> -->
        <div class="card-body">
            <button class="btn btn-info btn-sm rounded-0 float-right my-1" type="button" data-toggle="modal" data-target="#editModal" data-type='create' data-placement="top" title="View"><i class="fa fa-plus"></i>Add</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        @each('partials.users.users_row', $users, 'user')
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection