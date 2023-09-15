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
                                            <th scope="col">Positions</th>
                                            <th scope="col">Joind At</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($admins as $admin)
                                        <tr>
                                            <td class="fw-medium">{{ $admin->id }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>

                                            <td>{{ $admin->position_name }}</td>
                                            <td>{{ $admin->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="" class="btn btn-success btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                {{-- {{ route('places.edit', $place->id) }} --}}
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>



                                                {{-- <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE') --}}
                                                    <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                {{-- </form> --}}
                                            </td>                                        </tr>
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
