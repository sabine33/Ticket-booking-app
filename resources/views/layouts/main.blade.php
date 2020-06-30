<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    {{-- CSS --}}
    @include('partials.styles')


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.side')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <header>
                    @include('partials.header')
                </header>

                <!-- Begin Page Content -->

                <!-- Page Heading -->
                @yield('content')
                @yield('dialog')

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            @include('partials.footer')
            @include('partials.logout')


            <script>
                const API_URL = "http://127.0.0.1:8000/api/";
            </script>
            {{-- JS --}}
            @include('partials.scripts')


        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>