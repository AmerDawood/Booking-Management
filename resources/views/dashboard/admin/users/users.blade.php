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
                                            <th scope="col">Email</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Status</th>

                                            <th scope="col">Joined At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="fw-medium">{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>

                                            <td>{{ $user->course_name }}</td>
                                            <td>{{ $user->status }}</td>

                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="d-flex justify-content-between mb-0">
                                                    {{-- Edit Button --}}
                                                    <a href="" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    {{-- Change Status Button --}}
                                                    <form action="{{ route('user.change-status', $user) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm {{ $user->status === 'active' ? 'btn-success' : 'btn-danger' }}">
                                                            @if ($user->status === 'active')
                                                                <i class="fas fa-check"></i> <!-- Icon for active status -->
                                                            @else
                                                                <i class="fas fa-times"></i> <!-- Icon for inactive status -->
                                                            @endif
                                                        </button>
                                                    </form>

                                                    {{-- Delete Button --}}
                                                    {{-- <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;"> --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    {{-- </form> --}}
                                                </div>
                                            </td>

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
