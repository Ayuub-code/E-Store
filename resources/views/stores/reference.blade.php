<!DOCTYPE html>
<html>

<head>
    <title>Verifying Payment</title>
</head>
@if ($reference)
    <p>Verifying Transaction...</p>
@else
    <p>Invalid Transaction reference</p>
@endif

{{-- <body>
    @foreach ($cart as $cart)
        {{ $cart->product_id }}
        <br>
        {{ $cart->cart_id }}<br>
        {{ $cart->totalPrice }}
    @endforeach
</body> --}}

</html>
