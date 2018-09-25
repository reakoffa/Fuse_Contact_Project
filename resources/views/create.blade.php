<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>



<form action="/public/contact" method="post">
    @method('POST')
    Enter first name:<input name="fname" type="text"><br>
    Enter last name:<input name="lname" type="text"><br>
    Enter email:<input name="email" type="text"><br>
    Enter phone number:<input name="phonenum" type="text"><br>

    <button type="submit">Add to database</button></form>
</body>
</html>