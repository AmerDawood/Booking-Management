<!doctype html>


    <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable"
    @if (app()->currentLocale() == 'ar') dir="rtl"
      @else
      dir="" @endif>

@include('dashboard.layouts.head')

<body>
    <script>
        // Initialize Toastr
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right', // Adjust this based on your layout
        };
    </script>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('dashboard.layouts.header')

        <!-- ========== App Menu ========== -->
          @include('dashboard.layouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>




        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <div class="main-content">

        @yield('content')

        <!-- End Page-content -->

    </div>
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">{{ __('Search Customers') }}</h5>

                    <button type="button" class="btn btn-danger" onclick="closeModal();">
                        <i class="las la-times"></i>
                    </button>

                </div>
                <div class="modal-body">
                    <form id="searchForm">
                        <div class="form-group">
                            <label for="searchInput" style="padding-bottom:10px;">{{ __('Search ') }} :</label>
                            <input type="text" class="form-control" id="searchInput" name="q" placeholder="{{ __('Search....') }}">
                        </div>
                    </form>
                    <div id="searchResults">
                        @if (isset($customers) && count($customers) > 0)

                        <div style="height: 20px;"></div>

                        @else
                        <div class="text-center" style="padding-top:20px;">
                            {{-- <img src="{{ asset('assets/icon-fonts/search2.jpeg') }}" height="50px" width="50px" alt=""> --}}

                            <p>{{ __('No Data Found') }}</p>
                        </div>



                        @endif
                    </div>

                    {{-- <div id="searchResults">
                        <p class="text-center">No Data Found</p>
                    </div> --}}
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                function closeModal() {
                    $('#searchModal').modal('hide');

                    // Clear the input fields
                    $('#searchInput').val('');
                    $('#searchBy').val('car'); // Set the default search criteria if needed
                    // $('#searchResults').val('No Data Found');
                }

                // Attach a listener to the modal's hidden event
                // $('#searchModal').on('hidden.bs.modal', function () {
                //     // Clear the input fields when the modal is hidden
                //     $('#searchInput').val('');
                //     $('#searchBy').val('car'); // Set the default search criteria if needed
                // });
            </script>



        </div>
    </div>


    <script>
        $(document).ready(function () {
            var $searchInput = $('#searchInput');
            var $searchResults = $('#searchResults');
            var $searchModal = $('#searchModal');

            // Function to reset the search results to "No Data Found" message
            function resetSearchResults() {
                $searchResults.html('<div class="text-center"> <p>{{ __("No Data Found") }}</p></div>');
            }

            $searchInput.on('input', function () {
                var query = $searchInput.val().trim(); // Trim leading and trailing whitespace

                // Check if the query is not empty after trimming
                if (query !== '') {
                    var formData = $('#searchForm').serialize();

                    console.log('Sending AJAX request with formData:', formData);

                    $.ajax({
                        url: '/search',
                        type: 'GET',
                        data: formData,
                        success: function (data) {
                            console.log('Received data from the server:', data);
                            var customers = data.customers; // Parse the customers data from JSON

                            // Clear any previous data in the searchResults container
                            $searchResults.empty();

                            // Check if customers is not empty
                            if (customers.length > 0) {
                                // Iterate through the customers and create alert items for each customer
                                customers.forEach(function (customer) {
                                    // Generate the URL for the customer's profile based on their id
                                    var profileUrl = ''.replace(':id', customer.id);

                                    // Create an anchor element with the customer's name as the link text
                                    var link = $('<a>').attr('href', '').text(customer.name);

                                    // Create an image element for the customer's image, or use a default image URL if no image_url is provided
                                    var image = $('<img>')
                                        .attr('src', customer.image_url)
                                        .attr('alt', 'Image')
                                        .attr('height', '70')
                                        .attr('width', '70');

                                    // Create a paragraph element for the customer's phone number
                                    var phone = $('<p style="padding:5px;">').text(customer.mobile);

                                    // Create the alert item and append the elements
                                    var alertItem = $('<div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert" style="padding-top:10px;">');
                                    alertItem.append(image);
                                    var infoContainer = $('<div class="ml-2">'); // Container for name and phone
                                    infoContainer.append(link);
                                    infoContainer.append(phone);
                                    alertItem.append(infoContainer);

                                    $searchResults.append(alertItem);
                                });
                            } else {
                                // If no data is found, display a message
                                resetSearchResults(); // Reset search results to "No Data Found" message
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                } else {
                    // Clear the search results if the query is empty
                    resetSearchResults(); // Reset search results to "No Data Found" message
                }
            });

            // Add an event listener for the modal's hidden.bs.modal event
            $searchModal.on('hidden.bs.modal', function () {
                // Clear the input field and reset search results to "No Data Found"
                $searchInput.val('');
                resetSearchResults();
            });

            // Add an event listener for the modal's shown.bs.modal event
            $searchModal.on('shown.bs.modal', function () {
                // Reset search results to "No Data Found" message when the modal is shown
                $searchInput.val('');
                resetSearchResults();
            });
        });
    </script>

    <!-- JAVASCRIPT -->
     @include('dashboard.layouts.scripts')
</body>

</html>
