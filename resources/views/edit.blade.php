<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<?php
 echo "<form action='/public/contact/$contact->id' method='POST'>";
echo '<input type="hidden" name="_method" value="PATCH">';
  echo  "Enter first name:<input name='fname' type='text' value='$contact->fname' required><br>
    Enter last name:<input name='lname' type='text' value='$contact->lname' required><br>
    Enter email:<input name='email' type='text' value='$contact->email' required><br>
    Enter phone number:<input name='phonenum' type='text' value='$contact->phonenum' required><br>

    <button type='submit'>Edit contact</button></form>"
?>

</body>
</html>