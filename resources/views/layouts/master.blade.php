<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{asset('images/Untitled-4.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>المحترف لتطوير وتسويق العقار </title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap4/bootstrap.min.css')}}">
        <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Changa:wght@200..800&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>

          @include('layouts.header')

          @yield('content')



          <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
          <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
          <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
          <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
          <script src="{{asset('plugins/easing/easing.js')}}"></script>
          <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
          <script src="{{asset('js/custom.js')}}"></script>
        </body>
        </html>

