@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];

$polyfills = [
    'Promise',
    'Object.assign',
    'Object.values',
    'Array.prototype.find',
    'Array.prototype.findIndex',
    'Array.prototype.includes',
    'String.prototype.includes',
    'String.prototype.startsWith',
    'String.prototype.endsWith',
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<h1>Welcome to my contact keeper app</h1><br><br><br>
<h3>Here are all the contacts in your database:</h3>
<table border = '2'>
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Email address</th>
    <th>Phone number</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
<?php
foreach($contact as $info){
    echo "<tr>";
    echo "<td>" . $info->fname . "</td>";
    echo "<td>" . $info->lname . "</td>";
    echo "<td>" . $info->email . "</td>";
    echo "<td>" . $info->phonenum . "</td>";
    echo "<td><form action='contact/" . $info->id . "/edit'><button type='submit'>Edit</button></form></td>";
    echo "<td><form action='contact/" . $info->id . "' method='POST'><input type='hidden' name='_method' value='DELETE'><button type='submit'>Delete</button></form></td></tr>";

}

?></table>
<form action="contact/create"><button type="submit">Add contact</button></form>



  {{-- Global configuration object --}}
  <script>window.config = @json($config);</script>

  {{-- Polyfill JS features via polyfill.io --}}
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features={{ implode(',', $polyfills) }}"></script>

  {{-- Load the application scripts --}}
  @if (app()->isLocal())
    <script src="{{ mix('js/app.js') }}"></script>
  @else
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

  @endif
</body>
</html>
