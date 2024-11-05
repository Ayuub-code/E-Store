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
            width: 260px;
            color: peachpuff;
            height: 20px;
        }

        th {
            text-align: center;
            width: 310px;
            color: peachpuff;
        }

        a {
            color: mintcream;
            text-decoration: none;
        }
    </style>
    <title> User details </title>

<body>

    <table>
        <tr>
            <th>user_id</th>
            <th>user name</th>
            <th> user email</th>
            <th> user address </th>
            <th>user role</th>
            <th>Turn to Admin</th>
        </tr>
    </table>
    @foreach ($users as $user)
        <table>
            <td>
                {{ $user->id }}
            </td>
            <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->address }}
            </td>
            <td>
                {{ $user->role }}
            </td>
            <td>
                <a href="{{ route('update_user', ['id' => $user->id]) }}"
                    onclick="confirm('Are you sure you want to turn this user to admin ? ')">Turn to admin
                </a>
            </td>
        </table>
    @endforeach
</body>
</head>

</html>
