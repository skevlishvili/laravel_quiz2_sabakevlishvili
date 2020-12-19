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
        <label for="">unique_identifier</label>
        <input type="text" name="unique_identifier" value="{{ $airport->unique_identifier }}">
        <label for="">name</label>
        <input type="text" name="name" value="{{ $airport->name }}">
        <label for="">country</label>
        <input type="text" name="country" value="{{ $airport->country }}">
        <label for="">city</label>
        <input type="text" name="city" id="" value="{{ $airport->city }}">
        <label for="">timezone</label>
        <input type="text" name="timezone" id="" value="{{ $airport->timezone }}">
        <button type="submit">submit</button>
    </form>
</body>

</html>