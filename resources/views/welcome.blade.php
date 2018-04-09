<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <!-- https://favicon.io/emoji-favicons -->
        <link rel="shortcut icon" href="{{ asset('img/favicon1.ico') }}" type="image/x-icon">

    </head>
    <body>
      <div id="app">
        <appheader></appheader>
        <home></home>
        <appfooter></appfooter>
      </div>
      <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
