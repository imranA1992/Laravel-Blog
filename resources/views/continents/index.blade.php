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
  <body class="bg-info text-light">
    <div class="container">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/countries">Home</a></li>
    <li class="breadcrumb-item"><a href="/countries/create">Create</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>
      <h1>LIST OF CONTINENTS</h1>
      <a href="{{ route('continents.create') }}" class="btn btn-primary">Create</a>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Continents as $continent)
          <tr>
            <td scope="row">{{$continent->id}}</td>
            <td>{{$continent->name}}</td>
            <td>{{$continent->created_at}}</td>
            <td>{{$continent->updated_at}}</td>
            <td>
              <a href="{{ route('continents.show', $continent) }}" class="btn btn-info">Show</a>
              <a href="{{ route('continents.edit', $continent) }}" class="btn btn-warning">Edit</a>
              <span class="float-left mr-1">
                <form class="" action="{{ route('continents.destroy', $continent) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>
                </form>
              </span>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
