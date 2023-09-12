@extends('dashboard.master')




@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Create Space</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        {{-- <p class="text-muted">Example of vertical form using <code>form-control</code> class. No need to specify row and col class to create vertical form.</p> --}}
                        <div class="live-preview">
                            <form action="">
                                <div class="mb-3">
                                    <label for="employeeName" class="form-label">Employee Name</label>
                                    <input type="text" class="form-control" id="employeeName"
                                        placeholder="Enter emploree name">
                                </div>
                                <div class="mb-3">
                                    <label for="employeeUrl" class="form-label">Employee Department URL</label>
                                    <input type="url" class="form-control" id="employeeUrl"
                                        placeholder="Enter emploree url">
                                </div>
                                <div class="mb-3">
                                    <label for="StartleaveDate" class="form-label">Start Leave Date</label>
                                    <input type="date" class="form-control" data-provider="flatpickr"
                                        id="StartleaveDate">
                                </div>
                                <div class="mb-3">
                                    <label for="EndleaveDate" class="form-label">End Leave Date</label>
                                    <input type="date" class="form-control" data-provider="flatpickr" id="EndleaveDate">
                                </div>
                                <div class="mb-3">
                                    <label for="VertimeassageInput" class="form-label">Message</label>
                                    <textarea class="form-control" id="VertimeassageInput" rows="3" placeholder="Enter your message"></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Add Leave</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
