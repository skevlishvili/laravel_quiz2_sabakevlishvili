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
        <input type="text" name="unique_identifier">
        <label for="">name</label>
        <input type="text" name="name">
        <label for="">country</label>
        <input type="text" name="country">
        <label for="">city</label>
        <input type="text" name="city" id="">
        <label for="">timezone</label>
        <input type="text" name="timezone" id="">
        <button type="submit">submit</button>
    </form>
</body>

</html>