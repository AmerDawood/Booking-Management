@extends('dashboard.master')

@section('content')


  @if(auth()->guard('web')->check())
    @include('dashboard.body.user_body')
@elseif(auth()->guard('admin')->check())
    @include('dashboard.body.admin_body')
@endif



    <!-- End Page-content -->

      @include('dashboard.layouts.footer')



      @section('scripts')
      <script src="{{ asset('admin/libs/chart.js/chart.min.js') }}"></script>
      <script src="{{ asset('admin/js/pages/chartjs.init.js') }}"></script>


      @endsection


@endsection




