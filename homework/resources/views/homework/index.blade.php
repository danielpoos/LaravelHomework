<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of homeworks</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <p id="smth">List of homeworks</p>
    <table>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Url</th>
            <th>Points</th>
            <th>Message</th>
            <th>Operations</th>
        </tr>
    @foreach ($homework as $hw)
        <tr>
            <td><a href="{{ route('homework.show', $hw->id) }}">{{ $hw->name }}</a></td>
            <td>{{ $hw->class }}</td>
            <td><a href="{{ $hw->url }}" target="_blank">{{ $hw->url }}</a></td>
            <td>{{ $hw->points }}</td>
            <td>{{ $hw->message }}</td>
            <td>
                <form action="{{ route('homework.destroy', $hw->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>    
        </tr>
    @endforeach
    </table><a href="{{ route('homework.create') }}" class="link">Add new</a>
    <a href="{{ route('welcome') }}" class="link">To the homepage</a>
</body>
</html>
