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
                            <h4 class="card-title mb-0">A day in the of a professional fashion designer</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-muted"> Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text mb-0">
                               <a href="{{ route('spaces.show',$space->id) }}">
                                <button>Show</button>
                               </a>
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
                                  <div style="padding: 20px">
                                    {{ $spaces->links() }}

                                    </div>






            </div>

@endsection
