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
        <th>order user_id</th>
    </table>
    @foreach ($orders as $order)
        <table>
            <td>
                {{ $order->user_id }}
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
