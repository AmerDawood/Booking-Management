{{-- <!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is your admin dashboard content.</p>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        var userId = '{{ Auth::id() }}'
    </script>
    @vite(['resources/js/app.js'])
    @yield('scripts')


</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is your admin dashboard content.</p>
<p>{{ Auth::guard('admin')->id() }}</p>

    <script>
        var userId = '{{ Auth::guard('admin')->id() }}'
    </script>

     <!-- Include jQuery -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <!-- Include Toastr.js -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @vite(['resources/js/app.js'])
</body>
</html>
