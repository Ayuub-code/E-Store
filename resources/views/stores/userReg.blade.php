<!DOCTYPE html>
<html>

<head>
    <title> User Register</title>
    <style>
        body {
            background-color: black;
            color: maroon;
        }
    </style>

<body>
    <form action="{{ route('registration') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Fullname" style="color: maroon"><br>
        <input type="text" name="email" placeholder="Email" style="color: maroon"><br>
        <input type="password" name="password" placeholder="password" style="color: maroon"><br>
        <input type="text" name="address" placeholder="address" style="color: maroon"><br>
        <input type="submit" value="submit details" style="color: maroon"<br>
    </form>
    @if ($errors->any())
        <div class="there is error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</head>

</html>
