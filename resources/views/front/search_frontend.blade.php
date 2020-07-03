@extends ('layouts.front_layout')

@section('content')
<div style="background-image:url('/img/blur.jpg');background-size:cover;" class="row">
    <div class="col mx-1 my-1">
        <div class="card shadow mb-4 mx-auto">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="/search">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="from_location_id">From Location</label>
                                    <select id="from_location_id" class="form-control" name="from_location_id">
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="to_location_id">To Location</label>
                                    <select id="to_location_id" class="form-control" name="to_location_id">
                                        <option>Choose...</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}"> {{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="from_date">From Date</label>
                                    <input type="date" class="form-control" id="from_date" value="{{date('Y-m-d')}}" name="from_date">
                                </div>
                                <div class="form-group col-md-3">
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
</div>
<div class="row mt-3 mx-auto">
    <div class="card shadow mx-auto">
        <div class="card-title">
            <h4 class="p-2 text-center bg-info text-white">Search Results : {{count($flights)}} tickets found</h4>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover table-striped table-responsive" id="dataTable" width="100%" cellspacing="0">
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
    $('#from_location_id>option:eq(1)').prop('selected', true);
    $('#to_location_id>option:eq(2)').prop('selected', true);

    // $("#from_location_id").val().trigget('change');
    // $("#to_location_id").val(2).trigget('change');
</script>


@endpush