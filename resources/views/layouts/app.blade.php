<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="@yield('html_class')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>
<body class="@yield('body_class')">

@yield('content')

</body>
</html>
