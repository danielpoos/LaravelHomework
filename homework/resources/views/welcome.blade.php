<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Welcome to the Internet</h1>
        <p>Take a look around...</p>
        <br><a href="{{ route('homework.index') }}">To the homeworks</a>
    </body>
</html>
