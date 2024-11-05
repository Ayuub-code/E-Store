<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
        color: maroon;
    }
</style>

<head>
    <title> Login page </title>

<body>
    <form action="{{ route('Openstore') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email address" style="color: maroon"><br>
        <input type="password" name="password" placeholder="password" style="color: maroon"><br><br>
        <input type="submit" value="Login">
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
