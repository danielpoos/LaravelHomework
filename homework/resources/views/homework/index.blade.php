<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of homeworks</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Url</th>
            <th>Operations</th>
        </tr>
    @foreach ($homework as $hw)
        <tr>
            <td>
                <a href="{{ route('homework.show', $homework->id) }}">{{ $hw->name }}</a>
            </td>
            <td>{{ $hw->class }}</td>
            <td>{{ $hw->url }}</td>
            <td><form action="{{ route('homework.destroy', $homework->id) }}" method="POST">
                @csrf @method('DELETE')<button type="submit">Delete</button></form></td>
        </tr>
    @endforeach
    </table>
</body>
</html>
