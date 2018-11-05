<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials.head')
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
</body>
</html>
