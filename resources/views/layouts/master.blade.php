<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - @yield('title')</title>
</head>
<body>
    @section('head')
        @include('layouts.cabecera')
    @show
    <div>
        @yield('contenido')
    </div>
    @section('fin')
        FOOTER DE LA PLANTILLA MAESTRA
    @show
</body>
</html>