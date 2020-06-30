@extends('layouts.main')


@include('partials.delete_dialog')
@include('partials.locations.locations_form',['locations'=>$locations])

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Locations </h1>
    <p class="mb-4"> Please use this section to manage different locations.</p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <button class="btn btn-info btn-sm rounded-0 float-right my-1" type="button" data-toggle="modal" data-target="#editModal" data-type='create' data-placement="top" title="View"><i class="fa fa-plus"></i>Add Locations</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Location Name</th>
                            <th>Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        @each('partials.locations.locations_row', $locations, 'location')
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection