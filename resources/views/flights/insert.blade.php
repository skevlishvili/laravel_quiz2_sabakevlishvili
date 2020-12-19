<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <label for="">identification_code</label>
        <input type="text" name="identification_code">
        <label for="">leave_airport_name</label>
        <input type="text" name="leave_airport_name">
        <label for="">cum_airport_name</label>
        <input type="text" name="cum_airport_name">
        <label for="">leave_time</label>
        <input type="date" name="leave_time" id="">
        <label for="">cum_time</label>
        <input type="date" name="cum_time" id="">
        <button type="submit">submit</button>
    </form>
</body>

</html>