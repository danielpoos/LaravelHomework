<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit homework</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <h1>Edit homework</h1>
    <form method='POST' action="{{ route('homework.update', $homework->id ) }}">
        @csrf
        @method('PATCH')
        <!--<input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
        <div>
            Name:<br><p>{{$homework->name}}</p>
        </div>
        <div>
            Class:<br><p>{{$homework->class}}</p>
        </div>
        <div>
            Url:<br><a href="{{ $homework->url }}">{{$homework->url}}</a>
        </div>
        <div>
            Points:<br>
            <input type="number" name="points" value="{{ $homework->points }}" min="0" max="5">
        </div>
        <div>
            Message:<br>
            <input type="text" name="message" value="{{ $homework->message }}">
        </div>
        <div>
            <input type="submit" value="Give feedback">
        </div>
    </form>
</body>
</html>
