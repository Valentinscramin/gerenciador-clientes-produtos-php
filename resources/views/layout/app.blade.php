<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/369681f4aa.js" crossorigin="anonymous"></script>
    <title>@yield("title")</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      .container{
          padding: 20px;
      }
    </style>
</head>
<body>
    @component('component_nav', ["current" => $current])
    @endcomponent
    <div class="container">
        <main role="main">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>