<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        div{
            border: 0px solid black;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        @include('layouts.header')

        @include('layouts.menu')

        @yield('content')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>