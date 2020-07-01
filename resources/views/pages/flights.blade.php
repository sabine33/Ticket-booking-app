@extends('layouts.main')

@include('partials.delete_dialog')
@include('partials.flights.flight_form',['locations'=>$locations,'airlines'=>$airlines])

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Flights </h1>
    <p class="mb-4"> Please use this section to manage different flights.</p>

    <div class="card shadow mb-4">

        <div class="card-body">
            <button class="btn btn-info btn-sm rounded-0 float-right my-1" type="button" data-toggle="modal" data-target="#editModal" data-type='create' data-placement="top" title="View"><i class="fa fa-plus"></i>Add</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Airlines Name</th>
                            <th>Flight Date</th>
                            <th>From Location</th>
                            <th>To Location</th>
                            <th>Departure Time</th>
                            <th>Flight Duration</th>
                            <th>Ticket Count</th>
                            <th>Price</th>
                            <th>Local/Intnl.</th>
                            <th>Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        @each('partials.flights.flight_row', $flights, 'flight')
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection