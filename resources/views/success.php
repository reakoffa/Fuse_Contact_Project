<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<h1>Congratulations! Your contact has been updated</h1><br><br><br>
<form action="/public/contact/"><button type="submit">Return to list</button></form>

</body>
</html>