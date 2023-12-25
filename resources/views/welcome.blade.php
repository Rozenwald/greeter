<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  {{--<script src="{{ asset('js/manifest.js') }}" defer></script>
  <script src="{{ asset('js/vendor.js') }}" defer></script>--}}
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->

  <!-- Styles -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/myAdmin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <App />
</div>
</body>
</html>
