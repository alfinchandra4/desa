<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

    <title>@yield('pagetitle')</title>
  </head>
  <body>

    @include('public.partials.navbar')

    <div>
        @yield('content')
    </div>

    @include('public.partials.footer')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
