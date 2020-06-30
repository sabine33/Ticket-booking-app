@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
    $(function() {
        $('.user-box-container').slick();
    });
</script>
@endpush

@section('content')

<div class="container mx-2">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row mt-5 d-flex justify-content-flex-start">
        <div class="card col-lg-3 mx-1">
            <div class="card-body">
                <h4 class="card-title">Total Users</h4>
                <p class="card-text">{{$users_count}}</p>
            </div>
        </div>
        <div class="card col-lg-3 mx-1">
            <div class="card-body">
                <h4 class="card-title">Total Locations</h4>
                <p class="card-text">{{$locations_count}}</p>
            </div>
        </div>
        <div class="card col-lg-3 mx-1">
            <div class="card-body">
                <h4 class="card-title">Total Airlines</h4>
                <p class="card-text">{{$airlines_count}}</p>
            </div>
        </div>
    </div>

    <div class="row mt-2 d-flex justify-content-flex-start">
        <div class="card col-lg-3 mx-1">
            <div class="card-body">
                <h4 class="card-title">Total Flights</h4>
                <p class="card-text">{{$flights_count}}</p>
            </div>
        </div>
        <div class="card col-lg-3 mx-1">
            <div class="card-body">
                <h4 class="card-title">Total Tickets</h4>
                <p class="card-text">{{$tickets_count}}</p>
            </div>
        </div>

    </div>
</div>



@endsection