@extends('dashboard.master')




@section('content')


<div class="page-content">
    <div class="container-fluid">

        <div class="col-xxl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Create Amenities</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    {{-- <p class="text-muted">Example of vertical form using <code>form-control</code> class. No need to specify row and col class to create vertical form.</p> --}}
                    <div class="live-preview">


                        <form action="{{ route('amenities.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter place name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    placeholder="Enter description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Dropzone area -->
                            <div class="mb-3">
                                <label for="image_url" class="form-label">Select Image</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image_url" name="image_url">
                                    <label class="input-group-text" for="image_url">Upload</label>
                                </div>
                            </div>


                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Add Amenity</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


