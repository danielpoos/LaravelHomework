<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homework->name }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <h1>The homework of {{ $homework->name }}</h1>
    <p>{{ $homework->class }}</p>
    <a href="{{ $homework->url }}" target="_blank">{{$homework->url}}</a>
    @if($homework->points != 0)
        <p>{{$homework->points}}</p>
        <p>{{$homework->message}}</p>
    @endif
    <p><a href="{{ route('homework.edit', $homework->id) }}">Edit this</a></p>
    <p><a href="{{ route('homework.index') }}" class="link">Back to the list of homeworks</a></p>
</body>
</html>
