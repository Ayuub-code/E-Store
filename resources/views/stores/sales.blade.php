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
        width: 100px;
        color: peachpuff;
    }

    th {
        text-align: center;
        width: 100px;
        color: peachpuff;
    }
</style>

<head>

<body>
    <table>
        <tr>
            <th>user_id</th>
            <th>order_id</th>
            <th>cart_id</th>
            <th>totalPrice</th>
            <th>status</th>
        </tr>
    </table>
    @foreach ($payments as $payment)
        <table>
            <td>
                {{ $payment->user_id }}
            </td>
            <td>
                {{ $payment->order_id }}
            </td>
            <td>
                {{ $payment->cart_id }}
            </td>
            <td>
                {{ $payment->totalPrice }}
            </td>
            <td>
                {{ $payment->status }}
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
