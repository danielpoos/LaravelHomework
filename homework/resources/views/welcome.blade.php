<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel homework project</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <p id="smth">Welcome to the Internet</p>
        <p class="text">Have a look around<br>
        Anything that brain of yours can think of can be found<br>
        We've got mountains of content<br>
        Some better, some worse<br>
        If none of it's of interest to you, you'd be the first</p>
        <a href="{{ route('homework.index') }}" class="link">To the homeworks</a>
    </body>
</html>
