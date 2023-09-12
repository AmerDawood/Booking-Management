<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('logo.png') }}" style="padding: 10px;" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo.png') }}"  style="padding: 10px;" alt="" height="40">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('logo.png') }}"  style="padding-top: 10px;" alt="" height="70">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo.png') }}"  style="padding-top: 10px;" alt="" height="70">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>



                @include('dashboard.layouts.sidebar-body.sidebar_body')





            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
