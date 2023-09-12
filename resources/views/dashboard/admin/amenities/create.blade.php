@extends('dashboard.master')




@section('content')
@section('styles')
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('admin/libs/dropzone/dropzone.css') }}" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ asset('admin/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet"
        href="{{ asset('admin/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
@endsection
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
                            @csrf <!-- CSRF protection token -->
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


                            <input type="file" name="image_url" id="">
                            {{-- <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Image (Optional*)</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">


                                        <div class="dropzone">
                                            <div class="fallback">
                                                <input name="image" type="file" multiple="multiple">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">
                                                <!-- This is used as the file preview template -->
                                                <div class="border rounded">
                                                    <div class="d-flex p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded">
                                                                <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                                    src="{{ asset('admin/images/new-document.png') }}"
                                                                    alt="Dropzone-Image" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                <strong class="error text-danger"
                                                                    data-dz-errormessage></strong>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <button data-dz-remove
                                                                class="btn btn-sm btn-primary">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- end dropzon-preview -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                                --}}
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


@section('scripts')
<!-- dropzone min -->
<script src="{{ asset('admin/libs/dropzone/dropzone-min.js') }}"></script>

<script src="{{ asset('admin/js/pages/form-file-upload.init.js') }}"></script>


@endsection
