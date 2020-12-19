<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="/airports">airports</a>
    <table border="1">
        <tr>
            <th>identification_code</th>
            <th>leave_airport_name</th>
            <th>cum_airport_name</th>
            <th>leave_time</th>
            <th>cum_time</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($flights as $key => $value)
        <tr>
            <td>{{ $value->identification_code }}</td>
            <td>{{ $value->leave_airport_name }}</td>
            <td>{{ $value->cum_airport_name }}</td>
            <td>{{ $value->leave_time }}</td>
            <td>{{ $value->cum_time }}</td>

            <td><a href="/flightsEdit/{{ $value->id }}">edit</a></td>
            <td><a href="/flightsDelete/{{ $value->id }}">delete</a></td>
        </tr>
        @endforeach


    </table>

    <a href="/flightsInsert">flights insert</a>

</body>

</html>