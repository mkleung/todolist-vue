<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List</title>

        <!-- Fonts -->

    </head>
    <body>
          <div id="app">
            <topbar></topbar>
            <home></home>
            <footer></footer>
          </div>

          <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
