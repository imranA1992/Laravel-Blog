<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="">Create</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>
      <h1>City Details</h1>
      <h4>{{$CityData->name}}</h4>
      <h4>{{$CityData->status}}</h4>
      <p>{{$CityData->created_at}}</p>
      <p>{{$CityData->updated_at}}</p>
    </div>
  </body>
</html>
