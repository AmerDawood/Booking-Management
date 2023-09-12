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
                                            <div class="col">Image</div>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($amenities as  $amenity)

                                        <tr>
                                            <td class="fw-medium">{{ $amenity->id }}</td>
                                            <td>{{ $amenity->name }}</td>

                                            <td>
                                                @if($amenity->image_url)
                                                    <img height="50" width="50" src="{{ asset('uploads/amenities/' . $amenity->image_url) }}" alt="">
                                                @else

                                                <img height="50" width="50" src="https://placehold.co/400" alt="">

                                                @endif
                                            </td>


                                            <td>{{ $amenity->created_at }}</td>

                                            <td>
                                                <a href="{{ route('amenities.edit', $amenity->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <form action="{{ route('amenities.destroy', $amenity->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
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


