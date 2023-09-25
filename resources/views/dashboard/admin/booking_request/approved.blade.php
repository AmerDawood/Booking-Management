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
                                            <th scope="col">User Name</th>
                                            <th scope="col">Space Name</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($bookings as  $booking)

                                        <tr>
                                            <td class="fw-medium">{{ $booking->id }}</td>
                                            <td>{{ $booking->user->name }}</td>
                                            <td>{{ $booking->space->name }}</td>

                                            <td>{{ $booking->created_at->diffForHumans()}}</td>
                                            <td>{{ $booking->status }}</td>



                                            <td>
                                                {{-- <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a> --}}

                                                <form method="POST" action="{{ route('spaces.updateStatus', $booking->space->id) }}" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="1">
                                                    <button type="submit" class="btn btn-success btn-sm btn-delete">Submit</button>
                                                </form>




                                                {{-- <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE') --}}
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button> --}}
                                                {{-- </form> --}}
                                            </td>

                                        </tr>

                                        @endforeach

                                    </tbody>

                                </table>
                                <div style="padding: 20px">
                                    {{ $bookings->links() }}

                                    </div>
                            </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>


        </div>
    </div>

@endsection
