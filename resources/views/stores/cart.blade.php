<!DOCTYPE html>
<html>
<style>
    body {
        background-color: mintcream;
    }
</style>

<head>

<body>
    <form action="{{ route('user_order') }}" method="GET">
        @csrf
        {{-- <input type="number" name="quatity" placeholder="quatity">
        <br>
        <input type="button" name="ok" value="ok" style="color:maroon" style="background-color:beige"> --}}
    </form>

</body>
</head>

</html>
