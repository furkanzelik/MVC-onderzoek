<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello World</title>


</head>
<body>
<h1>Hello World ! </h1>
<p><a href="{{route('second-route')}}">To another route</a></p>
</body>
</html>
