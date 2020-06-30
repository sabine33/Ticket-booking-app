@extends ('front.layout')

@section('content')
<div style="background-image:url('/img/blur.jpg')">

    <div class="container" style="padding:40px 0px;">
        <div class="row">
            <div class="card shadow mb-4 mx-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/search">
                                {{csrf_field()}}
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="departure_type">Departure Type</label>
                                        <select id="departure_type" class="form-control" name="departure_type">
                                            <option>Choose...</option>
                                            <option value="one_way" selected> One Way</option>
                                            <option value="two_way"> Two Way</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="from_location_id">From Location</label>
                                        <select id="from_location_id" class="form-control" name="from_location_id">
                                            <option>Choose...</option>
                                            @foreach ($locations as $location)
                                            <option value="{{$location->id}}"> {{ $location->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="to_location_id">To Location</label>
                                        <select id="to_location_id" class="form-control" name="to_location_id">
                                            <option>Choose...</option>
                                            @foreach ($locations as $location)
                                            <option value="{{$location->id}}"> {{ $location->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="ticket_count">(Numbers)#</label>
                                        <input type="number" class="form-control" id="ticket_count" min="1" value="1" name="ticket_count">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="from_date">From Date</label>
                                        <input type="date" class="form-control" id="from_date" value="{{date('Y-m-d')}}" name="from_date">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="to_date">To Date</label>
                                        <input type="date" class="form-control" id="to_date" value="{{ date('Y-m-d', strtotime('+30 days')) }}" name="to_date">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <input type="submit" class="btn btn-primary btn-block" value="Search Flights" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mx-auto">
            <div class="card shadow mx-auto">
                <div class="card-title">
                    <h4 class="p-2 text-center bg-info text-white">Search Results : {{count($flights)}} tickets found</h4>

                </div>

                <div class="card-body">

                    <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead title="Search Results">
                            <tr>
                                <th>Airlines Name</th>
                                <th>Flight Date</th>
                                <th>From Location</th>
                                <th>To Location</th>
                                <th>Departure Time</th>
                                <th>Flight Duration</th>
                                <th>Tickets Available</th>
                                <th>Price</th>
                                <th>Book</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($flights)>0)
                            @each('front.flight_row', $flights, 'flight')
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<!-- Custom styles for this template-->
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@push('scripts')
<script src="/js/axios.min.js"></script>
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>

<script>
    function onSearchFlights() {
        let data = {
            ticket_count: 10,
            departure_type: "one_way",
            ticket_type: "economy",
            from_date: "2020-01-01",
            to_date: "2020-12-12"
        }

        // axios.post("http://127.0.0.1:8000/search", data).then(response => {
        //     let flights = response.data;

        // }).catch(err => {
        //     alert(JSON.stringify(err))
        // })


    }
</script>

@endpush