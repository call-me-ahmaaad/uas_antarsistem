<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WOY</title>
    <link rel="stylesheet" href={{URL::asset("/css/main.css")}}>
    {{-- <link rel="shortcut icon" href="/img/{{$favicon}}" type="image/x-icon"> --}}
</head>
<body>
    <div class="title">
        <h1>WOY</h1>
    </div>
    <div class="navbar">
        @yield('navbar')
    </div>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>
