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
        <th>store Id</th>
        <th>store name</th>
        <th>store logo</th>
    </table>
    @foreach ($stores as $store)
        <table>
            <td>
                {{ $store->id }}
            </td>
            <td>
                {{ $store->name }}
            </td>
            <td>
                <img src="/{{ $store->logo }}" width="40" height="40" alt="" />
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
