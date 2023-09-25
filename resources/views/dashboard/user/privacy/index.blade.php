@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">



                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Privacy Policy</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Privacy Policy</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="bg-soft-warning position-relative">
                                <div class="card-body p-5">
                                    <div class="text-center">
                                        <h3 class="fw-semibold">Privacy Policy</h3>
                                        <p class="mb-0 text-muted">Last update: {{ $privacy->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <div class="shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1440" height="60" preserveAspectRatio="none" viewBox="0 0 1440 60">
                                        <g mask="url(&quot;#SvgjsMask1001&quot;)" fill="none">
                                            <path d="M 0,4 C 144,13 432,48 720,49 C 1008,50 1296,17 1440,9L1440 60L0 60z" style="fill: var(--vz-card-bg-custom);"></path>
                                        </g>
                                        <defs>
                                            <mask id="SvgjsMask1001">
                                                <rect width="1440" height="60" fill="#ffffff"></rect>
                                            </mask>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <i data-feather="check-circle" class="text-success icon-dual-success icon-xs"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fw-semibold">{{ $privacy->title }}</h5>
                                        {!! $privacy->description !!}
                                    </div>
                                </div>




                                <div class="text-end">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-danger">I'm Understand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>


        </div>


    </div>

@endsection
