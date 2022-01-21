<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit homework</title>
</head>
<body>
    <h1>Edit homework</h1>
    <form method='POST' action="{{ route('homework.update', $homework->id ) }}">
        @csrf
        @method('PUT')
        <!--<input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
        <div>
            Points:<br>
            <input type="number" name="points" value="{{ $homework->points }}">
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
