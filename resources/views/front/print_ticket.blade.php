@extends('layouts.front_layout')

@push('scripts')
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/js/sb-admin-2.min.js"></script>
<script src="/js/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numbered/1.1.0/index.min.js"></script>
@endpush
@section('content')
<div style="background-image:url('/img/blur.jpg');background-size:cover;" class="row">
    <div class="col mx-2">


        <h1 class="h4 mb-2 text-white">Print Ticket </h1>
        <p class="mb-4"> Use this section to print tickets.</p>
        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="row">

                    <div class="col-lg-12">
                        <form method="post" action="/ticket_print">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="id">Ticket ID</label>
                                    <input type="number" class="form-control" id="id" name="id" value="57">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="token">Security Token</label>
                                    <input type="text" class="form-control" id="token" name="token" value="cZwK7nJiH8">
                                </div>


                            </div>
                            <div class="form-row">
                                <input type="submit" value="Print Ticket" class="btn btn-danger">
                            </div>



                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection