<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-4">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                    <i data-feather="briefcase" class="text-primary"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Booking Request</p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ $myBookingRequest }}">0</span></h4>
                                    <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i></span>
                                </div>
                                {{-- <p class="text-muted text-truncate mb-0">Show My Booking</p> --}}
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                    <i data-feather="award" class="text-warning"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="text-uppercase fw-medium text-muted mb-3">My Accecpted Booking</p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                        data-target="{{ $myAcceptedBookingRequest }}">0</span></h4>
                                    <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i></span>
                                </div>
                                {{-- <p class="text-muted mb-0">Leads this month</p> --}}
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                    <i data-feather="clock" class="text-info"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-3">
                                <p class="text-uppercase fw-medium text-muted text-truncate mb-3">My Pending Booking</p>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ $myPendingBookingRequest }}">0</span></h4>
                                    <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i></span>
                                </div>
                                {{-- <p class="text-muted text-truncate mb-0">Work this month</p> --}}
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div>
            </div><!-- end col -->
        </div><!-- end row -->



        <div class="row">


        @foreach ($lastThreeSpaces as $item)

            <div class="col-sm-6 col-xl-4" >
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('uploads/spaces/'.$item->image_url) }}" alt="Card image cap" style="height: 250px;">
                    <div class="card-header">
                        <h4 class="card-title mb-0">A day in the of a professional fashion designer</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-muted"> Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text mb-0">
                            <a href="{{ route('user.space.details', $item->id) }}" class="btn btn-primary">Show</a>
                        </p>

                    </div>
                </div>
            </div>


        @endforeach
    </div>


        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Default Table</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="default-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="default-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>table</code> class to show bootstrap-based default table.</p>
                    <div class="live-preview">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Space Name</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Created At</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach ($myBookings as $item)
                                    <tr>
                                        <th scope="row"><a href="#" class="fw-medium">#{{ $item->id }}</a></th>
                                        <td>{{ $item->space->name }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->created_at->diffForHumans() }}</td>
                                        {{-- <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td> --}}
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>


            </div><!-- end card -->
        </div>

    </div>
    <!-- container-fluid -->
</div>
