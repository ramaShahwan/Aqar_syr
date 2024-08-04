<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 't') }}</title> -->
    <title>المحترف لتطوير وتسويق العقار </title>
    <link rel="icon" href="{{asset('images/Artboard 1.png')}}" type="image/x-icon" />


    <!-- Scripts -->
    <script src="{{ asset('../js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('../js/popper.min.js') }}"></script>
    <script src="{{ asset('../js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../js/loginscrips.js') }}"></script>
<script>

    function previewImage(input, previewId) {
            const previewImage = document.getElementById(previewId);
            const file = input.files[0];
            const reader = new FileReader();
            previewImage.style.display = "inline";
            input.style.display = "none";
            reader.addEventListener('load', function() {
                previewImage.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
</script>
    <!-- Font Awesome -->
    <link href="../css/all.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ asset('//fonts.gstatic.com') }}">
    <link href="{{ asset('://fonts.googleapis.com/css?family=Nunito') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('style/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/loginstyle.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




</head>
<body class="citie">



                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>



            @yield('content')


</body>
</html>
