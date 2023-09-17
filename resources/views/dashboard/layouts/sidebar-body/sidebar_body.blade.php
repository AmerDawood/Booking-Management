@if(auth()->guard('web')->check())

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route('dashboard.index') }}" class="nav-link" data-key="t-crm"> Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('website') }}" class="nav-link" data-key="t-analytics"> Website </a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->




                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>





                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Booking</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">


                            <li class="nav-item">
                                <a href="{{ route('available.spaces') }}" class="nav-link" data-key="t-pricing"> Avaliable Spaces </a>
                            </li>


                            {{-- <li class="nav-item">
                                <a href="{{ route('make.book') }}" class="nav-link" data-key="t-gallery"> Make a Book </a>
                            </li> --}}



                            <li class="nav-item">
                                <a href="{{ route('booking.request') }}" class="nav-link" data-key="t-gallery"> My Booking Request </a>
                            </li>


                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLandingPlace" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLandingPlace">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Privacy</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLandingPlace">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('privacy') }}" class="nav-link" data-key="t-one-page"> Privacy & Policy </a>
                            </li>
                        </ul>
                    </div>
                </li>


@elseif(auth()->guard('admin')->check())

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboards">Dashboards</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarDashboards">
        <ul class="nav nav-sm flex-column">

            <li class="nav-item">
                <a href="" class="nav-link" data-key="t-crm"> Dashboard </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('website') }}" class="nav-link" data-key="t-analytics"> Website </a>
            </li>

        </ul>
    </div>
</li> <!-- end Dashboard Menu -->




<li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarLandingPlace" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLandingPlace">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Place</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarLandingPlace">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('places.index') }}" class="nav-link" data-key="t-one-page"> All Places </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('places.create') }}" class="nav-link" data-key="t-nft-landing"> Add Place </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarLandingAnnotation" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLandingAnnotation">
        <i class="ri-rocket-line"></i> <span data-key="t-landing">Amenities</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarLandingAnnotation">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="{{ route('amenities.index') }}" class="nav-link" data-key="t-one-page"> All Amenities </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('amenities.create') }}" class="nav-link" data-key="t-nft-landing"> Add Amenities </a>
            </li>

        </ul>
    </div>
</li>




<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
        <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Spaces</span>
    </a>
    <div class="collapse menu-dropdown" id="sidebarPages">
        <ul class="nav nav-sm flex-column">


            <li class="nav-item">
                <a href="{{ route('spaces.index') }}" class="nav-link" data-key="t-pricing"> All Spaces </a>
            </li>
            @if(auth()->guard('admin')->check())

            <li class="nav-item">
                <a href="{{ route('spaces.create') }}" class="nav-link" data-key="t-gallery"> Add Spaces </a>
            </li>
            @else


            @endif


        </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarBooking" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBooking">
        <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Booking Request</span>
    </a>
    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarBooking">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-key="t-alerts">All Booking Request</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-key="t-badges">Deleted Booking Request</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUsers">
        <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Users</span>
    </a>
    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUsers">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('users.all') }}" class="nav-link" data-key="t-alerts">All Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('create.user') }}" class="nav-link" data-key="t-badges">Add User</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link menu-link" href="#sidebarAdmins" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdmins">
        <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Admins</span>
    </a>
    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarAdmins">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="{{ route('admins.all') }}" class="nav-link" data-key="t-alerts">All Admins</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-key="t-badges">Add Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link menu-link" href="#settings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="settings">
        <i class="mdi mdi-cube-outline"></i> <span data-key="t-base-ui">Setting</span>
    </a>
    <div class="collapse menu-dropdown mega-dropdown-menu" id="settings">
        <div class="row">
            <div class="col-lg-4">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-key="t-alerts">Privacy & Policy</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-key="t-badges">FAQs</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</li>
@else
    <!-- Not authenticated content -->
    <p>Welcome, Guest!</p>
@endif
