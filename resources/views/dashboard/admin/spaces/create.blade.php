@extends('dashboard.master')


@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Create Space</h4>
                    </div><!-- end card header -->
                    <div class="card-body">

                        <div class="live-preview">
                            <form action="">
                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">Space Name</label>
                                    <input type="text" class="form-control" id="employeeName"
                                        placeholder="Enter emploree name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="employeeUrl" class="form-label">Space Description</label>
                                    <input type="url" class="form-control" id="description"
                                        placeholder="Enter space description" name="description">
                                </div>

                                <div class="mb-3">
                                    <label for="StartleaveDate" class="form-label">Capacity</label>
                                    <input type="date" class="form-control" data-provider="flatpickr"
                                        id="StartleaveDate" name="capacity"    placeholder="Enter capacity for the space">
                                </div>



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Select2 Control</h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-muted">Select2 will respond to the disabled attribute on <code>&lt;select&gt;</code> elements. You can also initialize Select2 with disabled: true to get the same effect.</p>
                                                <div class="vstack gap-3">

                                                    <select class="js-example-disabled-multi" name="states[]" multiple="multiple">
                                                        <optgroup label="UK">
                                                            <option value="London">London</option>
                                                            <option value="Manchester" selected>Manchester</option>
                                                            <option value="Liverpool">Liverpool</option>
                                                        </optgroup>
                                                      
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->



                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Space</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('admin/js/pages/select2.init.js') }}"></script>
@endsection


