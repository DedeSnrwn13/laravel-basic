<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container py-5">
    @yield('content')
  </div>
</body>
</html>