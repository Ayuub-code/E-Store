<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
        }
    </style>
    <title> Maxrite Stores</title>

<body>
    <form action="{{ route('Stores') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="storename">
        <br><br>
        <input type="file" name="logo" placeholder="logo">
        <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</head>

</html>
