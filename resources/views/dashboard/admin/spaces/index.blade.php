@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                @foreach ($spaces as $space)


                <div class="col-sm-6 col-xl-4" >
                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ asset('uploads/spaces/'.$space->image_url) }}" alt="Card image cap" style="height: 250px;">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{ $space->name }}</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted">{{ $space->description }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('spaces.show', $space->id) }}" class="btn btn-primary">Show</a>
                                {{-- <form method="POST" action="{{ route('spaces.destroy', $space->id) }}">
                                    @csrf
                                    @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                {{-- </form> --}}
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach
                                  <div style="padding: 20px">
                                    {{ $spaces->links() }}

                                    </div>






            </div>

@endsection
