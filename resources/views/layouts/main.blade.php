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

                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            @include('partials.footer')
            @include('partials.logout')


            {{-- JS --}}
            @include('partials.scripts')


        </div>
        <!-- End of Content Wrapper -->

    </div>

</body>

</html>