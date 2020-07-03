@extends((( $layout=='backend') ? 'layouts.main' : 'layouts.front_layout' ))

@if($layout=='frontend')
@push('styles')
<link rel="stylesheet" href="/css/style.css">
@endpush
@endif

@push('scripts')

<script src="/js/sb-admin-2.min.js"></script>
<script src="/js/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numbered/1.1.0/index.min.js"></script>
<script src="/js/swal.min.js"></script>

@endpush

@section('content')
<div style="background-image:url('/img/blur.jpg');background-size:cover;" class="row">
    <div class="col-lg-12 mx-1 my-1">


        <h1 class=" h4 mb-2 text-white">Book Tickets </h1>
        <p class="mb-4"> Please use this section to book tickets.</p>
        <div class="card shadow mb-4 bg-info">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form id="form">
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="from_location_id">From Location</label>
                                    <select id="from_location_id" class="form-control">
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="to_location_id">To Location</label>
                                    <select id="to_location_id" class="form-control">
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="flight_id">Flight Name {{$id}}</label>
                                    <select id="flight_id" class="form-control" required>
                                        @if(isset($id)){
                                        @foreach($flights as $flight){
                                        <option value="{{$flight->id}}">{{$flight->flight_name}}</option>
                                        }
                                        }
                                        @endforeach
                                        @endif
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label for="available_tickets">Available Tickets</label>
                                    <input type="number" class="form-control" id="available_tickets" min="0" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="departure_date">Departure Date</label>
                                    <input type="date" class="form-control" id="departure_date" value="{{date('y-M-d')}}" disabled>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="departure_time">Departure time</label>
                                    <input type="text" class="form-control" id="departure_time" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="flight_duration">Flight Duration</label>
                                    <input type="number" class="form-control" id="flight_duration" readonly>
                                </div>

                            </div>
                            <div class="form-row">


                                <div class="form-group col-md-4">
                                    <label for="total_cost">Flight Cost</label>
                                    <input type="number" class="form-control" id="total_cost" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="total_cost_text">Cost(Words)</label>
                                    <input type="string" class="form-control" id="total_cost_text" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ticket_type">Ticket Class</label>
                                    <select id="ticket_type" class="form-control" required>
                                        <option>Choose...</option>
                                        <option value="economy" selected>Economy</option>
                                        <option value="business">Business</option>
                                    </select>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="adults_count">(Adults)#</label>
                                    <input type="number" class="form-control" id="adults_count" min="1" value="1" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="kids_count">(Kids)#</label>
                                    <input type="number" class="form-control" id="kids_count" min="0" value="0" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="passenger_name">Passenger Name(Owner)</label>
                                    <input type="text" class="form-control" id="passenger_name" required value="Sunamika Karki">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="passenger_address">Address</label>
                                    <input type="text" class="form-control" id="passenger_address" required value="kathmandu">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="passenger_phone">Contact No</label>
                                    <input type="text" class="form-control" id="passenger_phone" required value="9841222222">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="passenger_email">Email</label>
                                    <input type="email" class="form-control" id="passenger_email" required value="karki.sunamika@gmail.com">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="remarks">Remarks</label>
                                    <input type="text" class="form-control" id="remarks" value="ill pay later">
                                </div>

                            </div>

                        </form>
                    </div>


                </div>
                <div class="form-row">
                    <button type="button" name="btnSearch" id="btnBookTicket" class="btn btn-danger" btn-lg btn-block" onclick="onBookTicket()">
                        Book Ticket
                    </button>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

@endsection

@push('scripts')
<script src="/js/flight.js"></script>
@endpush