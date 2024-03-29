@extends('layouts.main')


@include('partials.delete_dialog')
@include('partials.tickets.tickets_form',['tickets'=>$tickets])

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tickets </h1>
    <p class="mb-4"> Please use this section to manage different tickets.</p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="/admin/book-ticket/1" class="btn btn-info btn-sm rounded-0 float-right my-1"><i class="fa fa-plus"></i>Add</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Passenger</th>
                            <th>Flight</th>
                            <th>Ticket Type</th>
                            <th>Total Cost</th>
                            <th>Ticket Count</th>
                            <th>Status</th>
                            <th>Manage</th>
                        </tr>
                    </thead>

                    <tbody>
                        @each('partials.tickets.tickets_row', $tickets, 'ticket')
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection