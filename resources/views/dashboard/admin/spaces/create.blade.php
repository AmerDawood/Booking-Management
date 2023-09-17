@extends('dashboard.master')


@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

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
                        <h4 class="card-title mb-0 flex-grow-1">Create Space</h4>
                    </div><!-- end card header -->
                    <div class="card-body">

                        <form action="{{ route('spaces.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="live-preview">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="employeeName" class="form-label">Space Name</label>
                                        <input type="text" class="form-control" id="employeeName"
                                            placeholder="Enter emploree name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeeUrl" class="form-label">Space Description</label>
                                        <input type="text" class="form-control" id="description"
                                            placeholder="Enter space description" name="description">
                                    </div>

                                    <div class="mb-3">
                                        <label for="StartleaveDate" class="form-label">Capacity</label>
                                        <input type="number" class="form-control" data-provider="flatpickr"
                                            id="StartleaveDate" name="capacity" placeholder="Enter capacity for the space" step="1">
                                    </div>

                                    <div class="mb-3">
                                        <label for="image_url" class="form-label">Select Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="image_url" name="image_url">
                                            <label class="input-group-text" for="image_url">Upload</label>
                                        </div>
                                    </div>

                                    <div class="form-check form-switch form-switch-lg" dir="ltr">
                                        <input type="hidden" name="is_available" value="0"> <!-- Hidden input for unchecked value -->
                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" name="is_available" value="1">
                                        <label class="form-check-label" for="customSwitchsizelg">Is Available</label>
                                    </div>




                                    {{-- @foreach ($amenities as $item)
                                    <input class="form-check-input" name="amenities[]" type="checkbox" value="{{ $item->id }}" id="amenity{{ $item->id }}">
                                    <label class="form-check-label" for="amenity{{ $item->id }}">
                                        {{ $item->name }}
                                    </label>
                                    @endforeach --}}

                                    <div>
                                        <label>Select Amenities:</label>
                                        @foreach ($amenities as $item)
                                            <div>
                                                <input type="checkbox" name="amenities[]" value="{{ $item->id }}">
                                                {{ $item->name }}
                                            </div>
                                        @endforeach
                                    </div>




                                      <select class="form-select" name="place_id" aria-label="Default select example">

                                        @foreach ($places  as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                      </select>




                                      <div class="mb-3">
                                        <label>Album</label>
                                        <input type="file" name="album[]" multiple class="form-control" />
                                        <div class="album">
                                            {{-- @foreach ($product->album as $img)
                                                <div class="album-item">
                                                    <a href="{{ route('admin.products.delete_image', $img->id) }}"><i class="fas fa-times"></i></a>
                                                    <img width="60" src="{{ asset('uploads/products/'.$img->path) }}" alt="">
                                                </div>
                                            @endforeach --}}
                                        </div>
                                    </div>



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Add Space</button>
                                    </div>
                                </form>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('admin/js/pages/select2.init.js') }}"></script>
@endsection


