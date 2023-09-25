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
                        <h4 class="card-title mb-0 flex-grow-1">Add Privacy And Policy</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <form action="{{ route('privacy.update') }}" class="row g-3" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <label for="fullnameInput" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="fullnameInput" placeholder="Enter privacy title" value="{{ $privacy->title }}">
                                </div>

                                <div class="mb-3" style="direction: rtl;">
                                    <label> Content</label>
                                    <textarea name="description" placeholder="Privacy Description" id="description" class="myeditor">{{ $privacy->description }}</textarea>
                                </div>



                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Create Admin</button>
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
