{{-- <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('admin/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('admin/libs/jsvectormap/maps/world-merc.js   ') }} "></script>

<!--Swiper slider js-->
<script src="{{ asset('admin/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('admin/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/js/app.js') }}"></script>

<script src="https://kit.fontawesome.com/d6355a45bc.js" crossorigin="anonymous"></script>




 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





 @if (session('msg'))
 <script>
     Swal.fire(
     'Good job!',
     '{{ session("msg") }}',
     'success'
     )
 </script>
 @endif

 <script>
    $('.btn-delete').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this).closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit the form when the user confirms
            }
        });
    });
</script>
@yield('scripts') --}}



@if ((app()->currentLocale() == 'ar'))
 <!-- JAVASCRIPT -->
 <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
 <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
 <script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
 <script src="{{ asset('admin/js/plugins.js') }}"></script>

 <!-- apexcharts -->
 <script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

 <!-- Vector map-->
 <script src="{{ asset('admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
 <script src="{{ asset('admin/libs/jsvectormap/maps/world-merc.js') }}"></script>

 <!--Swiper slider js-->
 <script src="{{ asset('admin/libs/swiper/swiper-bundle.min.js') }}"></script>

 <!-- Dashboard init -->
 <script src="{{ asset('admin/js/pages/dashboard-ecommerce.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('admin/js/app.js') }}"></script>



 <script src="https://kit.fontawesome.com/d6355a45bc.js" crossorigin="anonymous"></script>




 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





 @if (session('msg'))
 <script>
     Swal.fire(
     'Good job!',
     '{{ session("msg") }}',
     'success'
     )
 </script>
 @endif

 <script>
    $('.btn-delete').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this).closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit the form when the user confirms
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
     tinymce.init({
         selector: '.myeditor',

         directionality: 'ltr'
     })
 </script>
<script>
    const stars = document.querySelectorAll(".star-rating .fa-star");
    const ratingInput = document.getElementById("rating");

    stars.forEach((star) => {
        star.addEventListener("click", () => {
            const rating = parseInt(star.getAttribute("data-rating"));
            ratingInput.value = rating;

            // Update star styles based on selected rating
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add("fas");
                    s.classList.remove("far");
                } else {
                    s.classList.remove("fas");
                    s.classList.add("far");
                }
            });
        });
    });
</script>



    @yield('scripts')
@else


<script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('admin/js/plugins.js') }}"></script>
<!-- apexcharts -->
<script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('admin/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('admin/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('admin/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/d6355a45bc.js" crossorigin="anonymous"></script>




 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





 @if (session('msg'))
 <script>
     Swal.fire(
     'Good job!',
     '{{ session("msg") }}',
     'success'
     )
 </script>
 @endif

 <script>
    $('.btn-delete').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this).closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit the form when the user confirms
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
     tinymce.init({
         selector: '.myeditor',

         directionality: 'rtl'
     })
 </script>

<script>
    const stars = document.querySelectorAll(".star-rating .fa-star");
    const ratingInput = document.getElementById("rating");

    stars.forEach((star) => {
        star.addEventListener("click", () => {
            const rating = parseInt(star.getAttribute("data-rating"));
            ratingInput.value = rating;

            // Update star styles based on selected rating
            stars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add("fas");
                    s.classList.remove("far");
                } else {
                    s.classList.remove("fas");
                    s.classList.add("far");
                }
            });
        });
    });
</script>



@yield('scripts')

@endif












