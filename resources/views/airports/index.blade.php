<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/flights">flights</a>
    <table border="1">
        <tr>
            <th>unique_identifier</th>
            <th>name</th>
            <th>country</th>
            <th>city</th>
            <th>timezone</th>
            <th>edit</th>
            <th>delete</th>

        </tr>
        @foreach($airports as $key => $value)
        <tr>
            <td>{{ $value->unique_identifier }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->country }}</td>
            <td>{{ $value->city }}</td>
            <td>{{ $value->timezone }}</td>

            <td><a href="/airportsEdit/{{ $value->id }}">edit</a></td>
            <td><a href="/airportsDelete/{{ $value->id }}">delete</a></td>
        </tr>
        @endforeach


    </table>

    <a href="/airportsInsert">airports insert</a>


</body>

</html>