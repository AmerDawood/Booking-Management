<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

@include('dashboard.layouts.head')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('dashboard.layouts.header')

        <!-- ========== App Menu ========== -->
          @include('dashboard.layouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>




        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <div class="main-content">

        @yield('content')

        <!-- End Page-content -->

    </div>


    <!-- JAVASCRIPT -->
     @include('dashboard.layouts.scripts')
</body>

</html>
