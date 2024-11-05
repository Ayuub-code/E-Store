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
        <th>product store_id</th>
        <th>product_name</th>
        <th>product_price</th>
        <th>product cover_image</th>
    </table>
    @foreach ($products as $product)
        <table>
            <td>
                {{ $product->store_id }}
            </td>
            <td>
                {{ $product->name }}
            </td>
            <td>
                {{ $product->price }}
            </td>
            <td>
                <img src="/{{ $product->cover_image }}" width="40" height="40" alt="" />
            </td>
        </table>
    @endforeach
</body>
</head>
</head>

</html>
