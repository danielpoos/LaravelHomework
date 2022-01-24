<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel homework project</title>
        <style>
            body{
                background-color: #abcdef;
                font-family: 'Comic Sans MS';
            }
            #smth{
                font-size: 20pt;
                font-style: italic;
                color: darkblue;
            }
            p{
                margin: 30px 30px;
            }
            a{
                margin: 40px 50px;
                text-decoration: none;
                font-weight: bolder;
                color: purple;
            }
        </style>
    </head>
    <body>
        <p id="smth">Welcome to the Internet</p>
        <p>Have a look around<br>
        Anything that brain of yours can think of can be found<br>
        We've got mountains of content<br>
        Some better, some worse<br>
        If none of it's of interest to you, you'd be the first</p>
        <a href="{{ route('homework.index') }}">To the homeworks</a>
    </body>
</html>
