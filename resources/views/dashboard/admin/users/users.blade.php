@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">All Places</h4>
                        <div class="flex-shrink-0">
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <p class="text-muted">Use <code>table-striped</code> class to add zebra-striping to any table row within the &lt;tbody&gt;.</p>
                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Joined At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="fw-medium">{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>Course Title</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td><span class="badge badge-soft-success"></span></td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>


        </div>
    </div>

@endsection
