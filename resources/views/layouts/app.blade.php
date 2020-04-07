<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <title>Todo List</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ (Request::is('/')) ? 'active':''}}" href="http://localhost/laravel/to_do/public/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Request::is('todo/create')) ? 'active':''}}" href="{{route('todo.create')}}">Create</a>
            </li>

          </ul>
        </div>
      </nav>

      @include('inc.messages')

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center"><h5>Copyright 2020</h5></footer>
</body>
</html>
