<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
        color: mintcream;
    }

    table,
    td,
    th {
        border: groove;
        border-color: maroon;
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
        height: 20px;
    }

    th {
        text-align: center;
        width: 300px;
        color: peachpuff;
    }
</style>

<head>

<body>
    <table>
        <th>cart_id</th>
        <th>cart user_id</th>
    </table>
    @foreach ($carts as $cart)
        <table>
            <td>
                {{ $cart->id }}
            </td>
            <td>
                {{ $cart->user_id }}
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
