<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Fortify</title>
</head>

<body>
    <h1>Area Riservata</h1>
    <hr>
    Benvenuto, {{ Auth::user()->name }}

    <hr>
    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit">Logout</button>
    </form>
    <hr>

</body>

</html>
