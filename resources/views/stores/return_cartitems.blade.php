<!DOCTYPE html>
<html>

<head>
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

<body>
    <table>
        <th>cartitem user_id</th>
        <th>cartitem product_id</th>
        <th>cartitem cart_id</th>
        <th>quantity</th>
    </table>
    @foreach ($cartitems as $cartitem)
        <table>
            <td>
                {{ $cartitem->user_id }}
            </td>
            <td>
                {{ $cartitem->product_id }}
            </td>
            <td>
                {{ $cartitem->cart_id }}
            </td>
            <td>
                {{ $cartitem->quantity }}
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
