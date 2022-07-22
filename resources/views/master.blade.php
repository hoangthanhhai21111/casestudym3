<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script> --}}
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <title>Socialbook</title>
    <script src="https://kit.fontawesome.com/ef7e2b893b.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- header********* -->
         @include('layout-index.header')
    <!-- content-area------------ -->
    <div class="container">
       <!-- sidebar1******* -->
       @include('layout-index.sidebar1')
<!-- content-area*****-->
        @yield('content')
        <!-- sidebar------------ -->
<!-- sidebar2************ -->
        @include('layout-index.sidebar2')
    </div>
    <footer id="footer">
        <p>&copy; Copyright 2021 - Socialbook All Rights Reserved</p>
    </footer>
    <script src="function.js"></script>
</body>
</html>