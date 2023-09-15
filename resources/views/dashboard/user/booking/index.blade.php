@extends('dashboard.master')




@section('content')


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">


                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Customers</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Customers</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">Booking Request List</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body border-bottom-dashed border-bottom">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xl-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for customer, email, phone, status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-xl-6">
                                            <div class="row g-3">
                                                <!--end col-->
                                                <div class="col-sm-8">
                                                    <div>
                                                        <select class="form-control" data-plugin="choices" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                            <option value="">Status</option>
                                                            <option value="all" selected>All</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Block">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-sm-4">
                                                    <div>
                                                        <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>

                                                    <th class="sort" data-sort="customer_name">Space Name</th>
                                                    <th class="sort" data-sort="email">gest Count</th>
                                                    <th class="sort" data-sort="phone">My Phone</th>
                                                    <th class="sort" data-sort="date">Cateted At</th>
                                                    <th class="sort" data-sort="status">Status</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($bookings as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                        </div>
                                                    </th>
                                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                    <td class="customer_name">{{ $item->space_id }}</td>
                                                    <td class="email">{{ $item->guest_count }}</td>
                                                    <td class="phone">{{ $item->contact_phone }}</td>
                                                    <td class="date">{{ $item->created_at->diffForHumans() }}</td>
                                                    <td class="status"><span class="badge badge-soft-success text-uppercase">{{ $item->status }}</span>
                                                    </td>
                                                    <td>
                                                            <button type="submit" class="btn btn-success btn-sm btn-success">
                                                                <i class="fas fa-envelope"></i>
                                                            </button>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm btn-delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->






            </div>

@endsection
