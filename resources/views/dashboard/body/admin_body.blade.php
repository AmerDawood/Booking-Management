<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Good Morning, {{ auth()->guard('admin')->user()->name }}</h4>
                                    <p class="text-muted mb-0">Here's what's happening with GSG spaces today</p>
                                </div>

                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Spaces</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $spacesCount }}">0</span> </h4>
                                            <a href="{{ route('spaces.index') }}" class="text-decoration-underline">View all spaces</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-success rounded fs-3">
                                                <i class="bx bx-dollar-circle"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Users</p>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $usersCount }}">0</span></h4>
                                            <a href="{{ route('users.all') }}" class="text-decoration-underline">View all users</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded fs-3">
                                                <i class="bx bx-shopping-bag"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Admins</p>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $adminsCount }}">0</span></h4>
                                            <a href="{{ route('admins.all') }}" class="text-decoration-underline">View all admins</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded fs-3">
                                                <i class="bx bx-shopping-bag"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Aminty</p>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{ $amenityCount }}">0</span></h4>
                                            <a href="{{ route('amenities.index') }}" class="text-decoration-underline">View all aminty</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded fs-3">
                                                <i class="bx bx-shopping-bag"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bookings Status</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="bar" class="chartjs-chart" width="400" height="200"></canvas>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Bar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="bar" class="chartjs-chart" data-colors="[&quot;--vz-primary-rgb, 0.8&quot;, &quot;--vz-primary-rgb, 0.9&quot;]" width="1054" height="526" style="display: block; box-sizing: border-box; height: 263px; width: 527px;"></canvas>

                                </div>
                            </div> --}}
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Users Status</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="donutChart" class="chartjs-chart" width="400" height="200"></canvas>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Donut Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="doughnut" class="chartjs-chart" data-colors="[&quot;--vz-primary&quot;, &quot;--vz-light&quot;]" width="1054" height="640" style="display: block; box-sizing: border-box; height: 320px; width: 527px;"></canvas>
                                </div>
                            </div> --}}
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xl-">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Latest Booking Request</h4>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-soft-info btn-sm">
                                            <i class="ri-file-list-3-line align-middle"></i><a href="">View all </a>
                                        </button>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table
                                            class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Space Name</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">Created At</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($bookings as $booking )

                                                <tr>
                                                    <td>
                                                        <a href="apps-ecommerce-order-details.html"
                                                            class="fw-medium link-primary">{{ $booking->id }}</a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <div class="flex-grow-1">{{ $booking->space->name }}</div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">{{ $booking->user->name }}</div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center">

                                                            <div class="flex-grow-1">{{ $booking->created_at->diffForHumans() }}</div>
                                                        </div>
                                                    </td>

                                                </tr><!-- end tr -->

                                                @endforeach

                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div>
                            </div> <!-- .card-->
                        </div> <!-- .col-->
                    </div> <!-- end row-->
        </div>

    </div>
    <!-- container-fluid -->
</div>
