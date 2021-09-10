<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Undefined') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div id="app">
            <p>Colocar os componentes aqui....</p>
            <galery-component></galery-component>
        </div>
    </body>


</html>
