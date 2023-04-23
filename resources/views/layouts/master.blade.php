<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A Fast food resturent , Rosy ">
    <meta name="author" content="Devcrud">
    <title>@yield('title',env('APP_NAME'))</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Pigga main styles -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/css/pigga.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    @include('website.partials.header')
    <!-- Page Header -->
    
   @include('website.partials.banner')
    <!-- End Of Page Header --> 
    <main>
        @yield('content')
    </main>
    <!-- Page Footer -->
   @include('website.partials.footer')
    <!-- End of Page Footer -->

    <!-- core  -->
    <script src="{{ asset('/') }}assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="{{ asset('/') }}assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="{{ asset('/') }}assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Pigga js -->
    <script src="{{ asset('/') }}assets/js/pigga.js"></script>

</body>
</html>
