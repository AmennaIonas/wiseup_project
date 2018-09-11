<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BikeShop</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!--JQuery-->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>

</head>
<body>

@include('partials.navbar')
@yield('content')
@include('partials.footer')


<!--JS files-->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/wiseup_project.js') }}"></script>

</body>
</html>




