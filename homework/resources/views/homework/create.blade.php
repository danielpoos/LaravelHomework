<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New homework</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
<p id="smth">New homework</p>
    <!--
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    -->
    <form method='POST' action="{{ route('homework.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Name:<br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Class:<br>
            <input type="number" name="class" value="{{ old('class') }}">
            @error('class')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            URL:<br>
            <input type="url" name="url" value="{{ old('url') }}">
            @error('url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="link">
        </div>
    </form>
</body>
</html>
