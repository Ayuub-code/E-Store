<!DOCTYPE html>
<html>

<head>
    <title> Maxrite Products</title>
    <style>
        body {
            background-color: black;
            color: mintcream;
            opacity: 0.9;
        }

        h1 {
            text-align: center;
            font-variant: small-caps;
            text-align: center;
            font-variant: small-caps;
            background-color: lemonchiffon;
            border: groove;
            opacity: 0.9;
            /* text-decoration: underline; */
            font-weight: 500;
            border-radius: 15px;
            padding: 5px;
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            color: maroon;
        }

        a.ex1 {
            background-color: peachpuff;
            text-decoration: none;
            border: groove;
            border-radius: 5px;
            color: crimson;
            border-color: maroon;
            margin-left: 10px;
        }

        a.ex3 {
            margin-left: 1150px;
            border-style: groove;
            background-color: peachpuff;
            color: crimson;
            border-color: rgb(120, 57, 11);
            opacity: 0.9;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 20px;
        }

        p {
            text-align: center;
            font-family: sans-serif;
            color: purple;
            font-variant: small-caps;
            height: 50px;
        }

        p .ex5 {
            background-color: peachpuff;
        }

        a.ex7 {
            color: mistyrose;
            margin-left: 1140px;
            border-style: groove;
            background-color: peachpuff;
            color: crimson;
            border-color: rgb(120, 57, 11);
            opacity: 0.9;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 20px;
        }

        p {
            color: maroon;
        }
    </style>

<body>
    <h1> Welcome to Max<sub> rite </sub><br>Su<sub>perstore </sub></h1><br>
    <p> You can buy goods and items in our store at avoidable price and win 10X bonus!
        <br> Grab your opportunity today and be a lucky winner
        <br><br>
    </p>
    <br>
    {{-- <br> <a class="ex7" href="{{ route('show_record') }}"> Sales Record</a>
    <br><br>
    <a class="ex7" href="{{ route('users') }}">Maxrite Users</a>
    <br><br> --}}
    <form action="{{ route('searchProduct') }}" method="POST">
        <input type="search" name="query" placeholder="search here " value="" />
        <br>
        <button type="submit"> Search</button><br>
    </form>
    <br> <a class="ex3" href="{{ route('ViewCart') }}"> View Cart</a>
    {{-- <br> <a class="ex3" href="{{ route('view_the_wish') }}">View wishlist</a> --}}
    <br><br>
    @foreach ($products as $product)
        @csrf
        <a href="{{ route('display_store', ['id' => $product->id]) }}"></a>
        {{ $product->name }}
        <br>
        <img src="/{{ $product->cover_image }}" width="200" height="200" alt="" />
        <br>
        {{ $product->price }} <a class="ex1" href="{{ route('carts', ['id' => $product->id]) }}">Add to
            cart</a>
        <br><br><br>
        {{-- <a class="ex1" href="{{ route('User_wish', ['id' => $product->id]) }}"> Add to wishlist</a> --}}
        <br><br>
    @endforeach
    <p class="ex5"> {{ $products->links() }} </p>
</body>
</head>

</html>
