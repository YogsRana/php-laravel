<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- As a link -->
            <nav class="navbar navbar-extend-sm bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="/">product</a>
            </div>
            </nav>
     @if($message = Session::get('success'))
     <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
     </div>
     @endif

    @yield('main')

  </body>
</html>