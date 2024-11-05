<!DOCTYPE html>
<html>

<head>
    <title>admin records</title>
    <style>
        /* a.3 {
            text-decoration: none;
            font-family: sans-serif;
            background-color: honeydew;
            color: maroon;
        } */
        a.ex3 {
            color: mistyrose;
            /* margin-left: 1130px; */
            border-style: groove;
            background-color: honeydew;
            color: crimson;
            border-color: rgb(120, 57, 11);
            opacity: 0.9;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 20px;
        }
    </style>

<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <a class="ex3" href="{{ route('users') }}"> Users record </a>
        <br><br>
        <a class="ex3" href="{{ route('show_record') }}"> payment record</a>
        <br><br>
        <a class="ex3" href="{{ route('users_cart') }}"> cart record</a>
        <br><br>
        <a class="ex3" href="{{ route('users_order') }}"> order record</a>
        <br><br>
        <a class="ex3" href="{{ route('users_cartitems') }}"> cartitem record</a>
        <br><br>
        <a class="ex3" href="{{ route('adminStores') }}">Stores record</a>
        <br><br>
        <a class="ex3" href="{{ route('admin_products') }}"> Product record</a>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>
</head>

</html>
