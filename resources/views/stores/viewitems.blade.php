<!DOCTYPE html>
<html>

<head>
    <style>
        p {
            background: mintcream;
            color: maroon;
            font-family: sans-serif;
            height: 100;
        }
    </style>

<body>
    <p>Shopping With Maxrite Superstore at avoidable price.</p>
    @foreach ($cartitem as $cartitem)
        <a href="{{ route('ViewCart', ['id' => $cart->id]) }}"></a>
        <br>
        <br>
        {{ $cartitem->product }}
        <br>
        {{ $cartitem->price }}
        <br>
        {{ $cartitem->quatity }}
    @endforeach
</body>
</head>

</html>
