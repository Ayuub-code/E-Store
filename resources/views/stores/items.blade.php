<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: mintcream;
        }
    </style>
    <title> Update Store </title>
    <form action="{{ route('display_price') }}" method="POST" enctype="multipart/form-data"><br>
        @csrf
        <input type="hidden" name="store_id" value="{{ $store->id }}" />
        <input type="text" name="name" placeholder="Item">
        <br>
        <input type="file" name="cover_image" placeholder="cover_image">
        <br>
        <input type="text" name="price" placeholder="price">
        <br>
        <input type="submit" value="submit">
    </form>
</head>

</html>
