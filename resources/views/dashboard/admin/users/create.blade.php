@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Create User</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('users.store') }}" class="row g-3" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label for="fullnameInput" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="fullnameInput" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Course Title</label>
                                    <input type="text" class="form-control" name="course_name" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Create User</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->


        </div>
    </div>

@endsection
