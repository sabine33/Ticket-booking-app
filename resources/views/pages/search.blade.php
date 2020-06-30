@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Search Flights Here </h1>
    <p class="mb-4"> Please use this section to search flights.</p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="id">ID</label>
                                <input type="number" class="form-control" id="id" readonly>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="airlinesName">Airlines Name</label>
                                <select id="airlinesName" class="form-control">
                                    <option>Choose...</option>
                                    @foreach ($airlines as $airline)
                                    <option value="{{$airline->id}}"> {{ $airline->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="flightDate">Flight Date</label>
                                <input type="date" class="form-control" id="flightDate" placeholder="2021-12-12">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fromLocation">From Location</label>
                                <select id="fromLocation" class="form-control">
                                    <option>Choose...</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->id}}"> {{ $location->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="toLocation">To Location</label>
                                <select id="toLocation" class="form-control">
                                    <option>Choose...</option>
                                    @foreach ($locations as $location)
                                    <option value="{{$location->id}}"> {{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="departureTime">Departure Time</label>
                                <input type="time" class="form-control" id="departureTime" placeholder="12:20" value="12:00">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="flightDuration">Duration(Hours)</label>
                                <input type="number" class="form-control" id="flightDuration" value="2">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ticketCount">#s</label>
                                <input type="number" class="form-control" id="ticketCount">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="flightPrice">Flight Price</label>
                                <input type="number" class="form-control" id="flightPrice">
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="status">
                                    <label class="form-check-label" for="status">
                                        Is Flight OK ?
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection