<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: mintcream;
            opacity: 0.9;
        }

        a.ex1 {
            color: maroon;
            opacity: 0.9;
            border-style: groove;
            border-radius: 10px;
            border-color: maroon;
            background-color: mistyrose;
        }

        a.ex3 {
            margin-left: 550px;
            color: maroon;
            background-color: lavenderblush;
            opacity: 0.9;
            text-decoration: none;
            font-family: sans-serif;
            font-size: 20px;
            border-style: groove;
            border-color: maroon;
            border-radius: 10px;
        }

        p.ex5 {
            background-color: mintcream;
            height: 100px;
        }

        hr {
            color: peachpuff;
        }

        p.ex4 {
            text-align: center;
            background-color: mintcream;
            color: maroon;
            height: 100%;
            font-variant: small-caps;
            font-size: 120%;
        }
    </style>
    <title> Carts </title>

<body>
    <p class="ex4"> Enjoy your day by Shopping With Maxrite Superstore at avoidable price.
        <br> Grab this opportunity now!
    </p>
    @foreach ($items as $item)
        <table>
            <tr>
                <td>
                    <img src={{ '/' . $item->product?->cover_image }} height="100%" width="50"
                        style="border-radius: 10px;" />
                </td>
                <td>
                    <b>
                        {{ $item->product?->name }} x {{ $item->quantity }}
                    </b><br />
                    &#8358;{{ number_format((float) $item->product?->price, 2) }}
                </td>
            </tr>
        </table>
        <a class="ex1" href="{{ route('deleteitems', ['id' => $item->product_id]) }}"
            style="text-decoration: none">Remove from cart</a>
        <br><br><br><br>
    @endforeach
    <br><br><br><br><br><br><br><br><br><br><br>
    <hr>
    <p class="ex5">
        <br><br>
        <a class="ex3" href="{{ route('OrderProduct', ['id' => $item->product_id]) }}"> Place Order Here </a>
    </p>
</body>
</head>

</html>
