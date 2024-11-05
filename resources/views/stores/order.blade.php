<!DOCTYPE html>
<html>

<head>
    <title> Order</title>
    <style>
        body {
            background-color: black;
            color: maroon;
        }

        table,
        td,
        th {
            border: groove;
            border-color: maroon;
            /* border-top-color: mintcream;
            border-bottom-color: thistle;
            border-left-color: lemonchiffon;
            border-right-color: papayawhip; */
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border-color: maroon;
        }

        td {
            text-align: center;
            width: 300px;
            color: peachpuff;
        }

        th {
            text-align: center;
            width: 300px;
            color: peachpuff;
        }

        p.ex1 {
            margin-left: 1000px;
            color: peachpuff;
        }

        a.ex2 {
            font-family: sans-serif;
            border-style: groove;
            border-color: maroon;
            text-decoration: none;
            color: moccasin;
            border-radius: 10px;
            font-size: 25px;
            background-color: maroon;
        }

        p.ex3 {
            color: moccasin;
        }

        p.ex6 {
            background-color: peachpuff;
            text-align: center;
            color: maroon;
            font-family: sans-serif;
            font-style: italic;
            font-size: large;
        }
    </style>

<body>
    <p class="ex3"><b>Note</b>: please <b>kindly</b>confirm your order before making a payment,
        <br> and for any transaction error, kindly visit your nearest bank for refund or mail us
        <br> <a href="mailto:customerservice@gmail.com"> customerservice @gmail.com</a>
    </p>
    <hr>

    <table>
        <tr>
            <th>Username</th>
            <th>User_Email</th>
            <th>Product image</th>
            <th>Product name</th>
            <th>quantity</th>
            <th> Price</th>
        </tr>
    </table>
    @foreach ($items as $item)
        <table>
            <td>
                {{ $item->user->name }}
            </td>
            <td>
                {{ $item->user->email }}
            </td>
            <td>
                <img src="{{ '/' . $item->product->cover_image }}" height="100%" width="50"
                    style="border-radius: 10px;" />
            </td>
            <td>
                {{ $item->product->name }}
            </td>
            <td>
                {{ $item->quantity }}
            </td>
            <td>
                &#8358;{{ number_format((float) $item->product->price, 2) }}
            </td>
            {{-- </tr> --}}
        </table>
        {{-- <a class="ex1" href="{{ route('deleteitems', ['id' => $item->product_id]) }}" style="text-decoration: none">Remove
                from cart</a> --}}
    @endforeach
    <p class="ex1"> Total price = &#8358;{{ $totalPrice }}</p>
    <br><br>
    <a href="{{ route('payment.initialize') }}">Pay Now</a>
    <hr>
    {{-- <a href="{{ route('payment.verify') }}">verify</a> --}}
    <p class="ex6">
        For any technical problem, you should <b> kindly </b> visit our customer service @ <br>
        <a href="mailto:customerservice@gmail.com"> customerservice @gmail.com </a> or contact us through:
        +
        234754233225. </a><br>
        For more inquiries, you can visits all our social media @ MaxriteSuperstore.ng <br>
        <br>
        <br>
        <br>
        Register by CAC <br>
        <br>
        copyright @2024
    </p>

    {{ $paymentResponse }}
</body>
<script>
    function makePayment() {
        fetch('/payment/initialize', {
                method: 'POST',
                credentials: 'include'
            })
            .then((response) => {
                console.log(response)
            })
            .catch((error) => {
                console.log(error)
            })
    }
</script>
</head>

</html>
