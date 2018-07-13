<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My blog.net</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/agency.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/mystyle.css') }}" rel="stylesheet">
    @yield('css')
  </head>

  <body id="page-top">
    @include('header')
    @yield('content')
    @include('footer')
    <script src="{{ URL::asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('js/contact_me.js') }}"></script>
    <script src="{{ URL::asset('js/agency.min.js') }}"></script>
    @yield('script')

  </body>

</html>
