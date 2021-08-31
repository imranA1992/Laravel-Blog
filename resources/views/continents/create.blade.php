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
  <body class="bg-info text-light font-family-sans-serif">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item"><a href="">Create</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
      </nav>
      <h1>CREATE CONTINENT</h1>
      <form class="" action="{{ route('continents.store') }}" method="post">
        @csrf
        <div class="col-12">
          <div class="col-4">
            <div class="form-group">
              <label  for="">Continent Name</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
              @error('name')
                <div class="alert alert-danger" alert="role">{{$message}}</div>

              @enderror
            </div>
          </div>
          <div class="col-8">
            <button type="submit" name="button" class="btn btn-primary">Create</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
