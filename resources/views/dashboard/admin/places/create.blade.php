@extends('dashboard.master')


@section('styles')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>

@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Create Place</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        {{-- <p class="text-muted">Example of vertical form using <code>form-control</code> class. No need to specify row and col class to create vertical form.</p> --}}
                        <div class="live-preview">
                            <form action="{{ route('places.store') }}" method="POST">
                                @csrf <!-- CSRF protection token -->

                                <div class="mb-3">
                                    <label for="name" class="form-label">Place Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" placeholder="Enter place name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                        name="address" placeholder="Enter address" value="{{ old('address') }}">
                                    @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                        name="city" placeholder="Enter city" value="{{ old('city') }}">
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control @error('state') is-invalid @enderror" id="state"
                                        name="state" placeholder="Enter state" value="{{ old('state') }}">
                                    @error('state')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="zip_code" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code"
                                        name="zip_code" placeholder="Enter zip code" value="{{ old('zip_code') }}">
                                    @error('zip_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country"
                                        name="country" placeholder="Enter country" value="{{ old('country') }}">
                                    @error('country')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3">
                                    <label for="latitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude"
                                        name="latitude" placeholder="Enter latitude" value="{{ old('latitude') }}">
                                    @error('latitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude"
                                        name="longitude" placeholder="Enter longitude" value="{{ old('longitude') }}">
                                    @error('longitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}



                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                        name="description" placeholder="Enter description">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mapform" >
                                    <div class="row">
                                        <div class="col-5">
                                            <input type="text"  class="form-control @error('lat') is-invalid @enderror"  placeholder="latitude" name="latitude" id="latitude">
                                            @error('lat')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-5">
                                            <input type="text"  class="form-control @error('long') is-invalid @enderror"  placeholder="longitude" name="longitude" id="longitude">
                                            @error('long')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>


                                    <div id="map" style="height:400px; width: 800px; margin-top: 10px" ></div>

                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Place</button>
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

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script>
        var map = L.map('map').setView([31.4167, 34.3333], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18
        }).addTo(map);

        // var marker = L.marker([31.4167, 34.3333]).addTo(map);


        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            var marker = L.marker([lat,lng]).addTo(map);

            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;
        });


    </script>

@endsection
