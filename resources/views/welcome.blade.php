<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>To Do List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <!-- https://favicon.io/emoji-favicons -->
        <link rel="shortcut icon" href="{{ asset('img/favicon1.ico') }}" type="image/x-icon">

    </head>
    <body>
      <div id="app">
        <appheader></appheader>
        
        <router-view></router-view>
        <appfooter></appfooter>
      </div>
      <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
