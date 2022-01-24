<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New homework</title>
</head>
<body>
    <h1>New homework</h1>
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
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
