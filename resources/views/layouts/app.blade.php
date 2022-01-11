<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Model/Controller @yield('page-title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="@yield('custom-style')">
</head>

<body>
    @yield('content')
</body>

</html>
