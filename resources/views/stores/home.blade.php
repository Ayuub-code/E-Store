<!DOCTYPE html>
<html>
<style>
    body {
        background-color: black;
        color: maroon;
        opacity: 0.9
    }

    h1 {
        text-align: center;
        font-variant: small-caps;
        background-color: lemonchiffon;
        border: groove;
        opacity: 0.9;
        /* text-decoration: underline; */
        font-weight: 500;
        border-radius: 20px;
        padding: 5px;
        font-size: 40px;
    }

    p {
        color: mintcream;
        opacity: 0.9;
        text-align: center;
    }

    a.ex1 {
        text-align: center;
        font-family: serif;
        font-size: 30px;
        margin-left: 500px;
        text-decoration: none;
        border-style: groove;
        border-color: maroon;
        opacity: 0.9;
        background-color: lightgoldenrodyellow;
        border-radius: 10px;
        color: crimson;
    }

    a.ex2 {
        background-color: honeydew;
        color: crimson;
        border-style: groove;
        border-radius: 10px;
        opacity: 0.9;
        margin-left: 500px;
        border-color: maroon;
        font-family: serif;
        font-size: 30px;
        text-decoration: none;
    }

    a.ex3 {
        text-decoration: none;
        font-family: sans-serif;
        background-color: honeydew;
        color: maroon;
    }
</style>

<head>

<body>
    <h1> Welcome to Max<sub>rite </sub><br>Su<sub>perstore </sub></h1><br>
    <p> We are here to supply you various items in our store <br>kindly <b>register </b> or <b>login </b>to our website
        to view and win our <sup>*</sup>promo<sup>*</sup>
    </p><br><br><br><br><br><br><br>
    {{-- <a class="ex3" href="{{ route('admin') }}">admin dashboard</a> --}}
    <br><br><br><br><br>
    <a class="ex2" href="{{ route('Openstore') }}">Login your Account</a>
    <br><br><br><br>
    <a class="ex1" href="{{ route('registration') }}"> Register your Account </a>
</body>
</head>

</html>
