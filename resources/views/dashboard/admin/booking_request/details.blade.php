@extends('dashboard.master')


@section('styles')
  <link href="{{ asset('admin/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />


@endsection


@section('content')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">




    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Booking Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Booking</a></li>
                        <li class="breadcrumb-item active">Booking Details</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-4 col-md-8 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                    <div class="swiper-wrapper">
                                        {{-- <div class="swiper-slide"> --}}
                                            <img src="https://placehold.co/400" style="height: 300px;" alt="" />
                                        {{-- </div> --}}
                                        {{-- <div class="swiper-slide">
                                            <img src="{{ asset('admin/images/products/img-6.png') }}" alt="" class="img-fluid d-block" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('admin/images/products/img-1.png') }}" alt="" class="img-fluid d-block" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('admin/images/products/img-8.png') }}" alt="" class="img-fluid d-block" />
                                        </div> --}}
                                    </div>
                                    {{-- <div class="swiper-button-next bg-white shadow"></div> --}}
                                    {{-- <div class="swiper-button-prev bg-white shadow"></div> --}}
                                </div>
                                <!-- end swiper thumbnail slide -->
                                {{-- <div class="swiper product-nav-slider mt-2">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('admin/images/products/img-8.png') }}" alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('admin/images/products/img-6.png') }}" alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('admin/images/products/img-1.png') }}" alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item">
                                                <img src="{{ asset('admin/images/products/img-8.png') }}" alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-8">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h4> {{ $booking->user->name  }} <span style="color: red">For</span>  {{ $booking->space->name }} Space</h4>

                                      <!-- Accept and Reject buttons in the same form, horizontally aligned -->
                                  <!-- Single form with Accept and Reject buttons -->
                                  <form method="post" action="{{ route('bookings.updateStatus', ['id' => $booking->id, 'status' => 'approved']) }}" class="form-inline">
                                    @csrf
                                    @method('PUT')

                                    <!-- Accept button -->
                                    <button type="submit" class="btn btn-success mr-2">Accept</button>
                                </form>

                                <form method="post" action="{{ route('bookings.updateStatus', ['id' => $booking->id, 'status' => 'rejected']) }}" class="form-inline">
                                    @csrf
                                    @method('PUT')

                                    <!-- Reject button -->
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>



{{--
                                        <div class="live-preview">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                Launch Demo Modal
                                            </button>
                                            <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridLabel">Grid Modals</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('booking.store') }}" method="POST">
                                                                @csrf
                                                                @include('dashboard.user.booking._form')
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                    {{-- <div class="flex-shrink-0">
                                        <div>
                                            <a href="apps-ecommerce-add-product.html" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="ri-pencil-fill align-bottom"></i></a>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="product-content mt-5">
                                    <h5 class="fs-14 mb-3"></h5>
                                    <nav>
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="nav-speci-tab" data-bs-toggle="tab" href="#nav-speci" role="tab" aria-controls="nav-speci" aria-selected="true">Details</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Details</a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                    <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-speci" role="tabpanel" aria-labelledby="nav-speci-tab">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" style="width: 200px;">User Name</th>
                                                            <td>{{ $booking->user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Phone</th>
                                                            <td>{{ $booking->contact_phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Start Date</th>
                                                            <td>{{ \Carbon\Carbon::parse($booking->start_date)->format('F j, Y g:i A') }}

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">End Date</th>
                                                            <td>{{ \Carbon\Carbon::parse($booking->end_date)->format('F j, Y g:i A') }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gest Count</th>
                                                            <td>{{ $booking->guest_count }}</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Status</th>
                                                            <td>{{ $booking->status }}</td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Description</th>
                                                            <td>{{ $booking->special_requests }}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- product-content -->

                                <!-- end card body -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

            </div>



    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>






            </div>

@endsection


@section('scripts')

    <!--Swiper slider js-->
    <script src="{{ asset('admin/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- ecommerce product details init -->
    <script src="{{ asset('admin/js/pages/ecommerce-product-details.init.js') }}"></script>

    <script src="{{ asset('admin/js/app.js') }}"></script>

@endsection
