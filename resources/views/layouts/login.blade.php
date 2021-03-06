<!DOCTYPE html>
<html class=''>
  <head>
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link href="{{ asset('css/login_page.css') }}" rel="stylesheet">
    <title>{{ config('fiercephish.APP_NAME') }} &raquo; {{ $title }}</title>
  </head>
  <body>
    @yield('content')
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js') }}"></script>
    @yield('footer')
    <script type="text/javascript">
      /* global $ */
      $(":input").inputmask();
    </script>
  </body>
</html>