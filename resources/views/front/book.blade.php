@extends('front.layout')

@push('scripts')
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/js/sb-admin-2.min.js"></script>
<script src="/js/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numbered/1.1.0/index.min.js"></script>
<script src="/js/swal.min.js"></script>


@endpush
@section('content')
<div style="background-image:url('/img/blur.jpg')">

    <div class="container py-3" style="">
        <h1 class="h4 mb-2 text-white">Book Tickets </h1>
        <p class="mb-4"> Please use this section to book tickets.</p>
        <div class="card shadow mb-4 bg-info">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form id="form">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="id">ID</label>
                                    <input type="number" class="form-control" id="id" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="departure_type">Departure Type</label>
                                    <select id="departure_type" class="form-control" required>
                                        <option>Choose...</option>
                                        <option value="one_way" selected> One Way</option>
                                        <option value="two_way"> Two Way</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ticket_type">Ticket Class</label>
                                    <select id="ticket_type" class="form-control" required>
                                        <option>Choose...</option>
                                        <option value="economy" selected>Economy</option>
                                        <option value="business">Business</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="adults_count">(Adults)#</label>
                                    <input type="number" class="form-control" id="adults_count" min="1" value="1" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="kids_count">(Kids)#</label>
                                    <input type="number" class="form-control" id="kids_count" min="0" value="0" required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="flight_id">Flight Name</label>
                                    <select id="flight_id" class="form-control" required>
                                        <option>Choose...</option>
                                        @foreach ($flights as $flight)
                                        <option value="{{$flight->id}}"> {{ $flight->flight_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="available_tickets">Available Tickets</label>
                                    <input type="number" class="form-control" id="available_tickets" min="0" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="departure_date">Departure Date</label>
                                    <input type="date" class="form-control" id="departure_date" value="{{date('y-M-d')}}" disabled>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="departure_time">Departure time</label>
                                    <input type="text" class="form-control" id="departure_time" readonly>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="from_location_id">From Location</label>
                                    <select id="from_location_id" class="form-control" disabled>
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="to_location_id">To Location</label>
                                    <select id="to_location_id" class="form-control" disabled>
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-3">
                                    <label for="flight_duration">Flight Duration</label>
                                    <input type="number" class="form-control" id="flight_duration" readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="total_cost">Flight Cost</label>
                                    <input type="number" class="form-control" id="total_cost" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="total_cost_text">Cost(Words)</label>
                                    <input type="string" class="form-control" id="total_cost_text" readonly>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="passenger_name">Passenger Name(Owner)</label>
                                    <input type="text" class="form-control" id="passenger_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="passenger_address">Address</label>
                                    <input type="text" class="form-control" id="passenger_address" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="passenger_phone">Contact No</label>
                                    <input type="text" class="form-control" id="passenger_phone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="passenger_email">Email</label>
                                    <input type="email" class="form-control" id="passenger_email" required>
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

@endsection

@push('scripts')
<script>
    var _flight = {};

    function onBookTicket() {

        if (!document.getElementById("form").checkValidity()) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill form carefully!'
            })
            return false;
        }

        let data = {
            "user_id": 1,
            "flight_id": $("#flight_id").val(),
            "adults_count": $("#adults_count").val(),
            "kids_count": $("#kids_count").val(),
            "passenger_name": $("#passenger_name").val(),
            "passenger_email": $("#passenger_email").val(),
            "passenger_address": $("#passenger_address").val(),
            "passenger_phone": $("#passenger_phone").val(),
            "total_cost": calculateTotal(),
            "departure_type": $("#departure_type").val(),
            "ticket_type": $("#ticket_type").val(),
            "is_confirmed": true,
            "status": true
        }

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.value) {
                $("#btnBookTicket").text("Booking...");
                $("#btnBookTicket").prop('disabled', true);
                axios.post(API_URL + "tickets", data).then(response => {
                        Swal.fire({
                            title: "Success",
                            text: `TICKET BOOKED SUCCESSFULLY ! Your Ticket is mailed to your email ! \nYour ticket is is ${response.data.id} and token is ${response.data.token}`,
                            icon: "success"

                        }).then(() => {
                            setTimeout(() => {
                                document.location.href = "/";
                            }, 2000)
                        });


                    })
                    .catch(err => {
                        Swal.fire({
                            title: "Error occured while saving ticket",
                            icon: "warning"
                        });
                        console.log(err)

                    })
            } else {

            }
        })











    }
    $(document).ready(() => {
        $("#flight_id").val(2).trigger('change')

    })

    $("#flight_id").on('change', function(e) {
        fetchFlightDetails(e.target.value);
    });
    $("#departure_type").on('change', function(e) {
        calculateCostForDisplay();
    });

    $("#ticket_type").on('change', function(e) {
        calculateCostForDisplay();
    });

    function calculateCostForDisplay() {
        if (_flight) {
            let total_cost = calculateTotal();
            $("#total_cost").val(total_cost);
            $("#total_cost_text").val(numbered.stringify(total_cost)) + " only.";
        }
    }

    function calculateTotal() {
        let flight_cost = 0;
        try {
            let adults_count = Number.parseInt($("#adults_count").val()) || 0;
            let kids_count = Number.parseInt($("#kids_count").val()) || 0;
            let total_passengers = (adults_count + kids_count);
            let departure_type = $("#departure_type").val();
            let ticket_type = $("#ticket_type").val();

            flight_cost = total_passengers * (ticket_type === 'economy' ? _flight.flight_price_economy : _flight.flight_price_business);
            flight_cost = flight_cost * (departure_type === 'two_way' ? _flight.flight_price_both_way_ratio : 1);
            return flight_cost;
        } catch (ex) {
            Swal.fire({
                title: "Error on calculation..",
                icon: "error"
            });
            return 0;
        }
    }

    function fetchFlightDetails(id) {
        let url = API_URL + "flights/" + id;

        axios.get(url).then((response) => {
            let flight = response.data;
            _flight = flight;

            $("#from_location_id").val(flight.from_location_id).trigger('change')
            $("#to_location_id").val(flight.to_location_id).trigger('change')
            $("#departure_date").val(flight.departure_date);
            $("#departure_time").val(flight.departure_time);
            $("#flight_duration").val(flight.flight_duration);
            $("#available_tickets").val(flight.available_tickets);

            calculateCostForDisplay();

        }).catch(err => {
            // Swal.fire({
            //     title: "Error on loading..",
            //     icon: "error"
            // });
            alert(JSON.stringify(err))
        })
    }
</script>
@endpush