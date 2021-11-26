@props(['title' => null])

<?php
    $title = array_filter(is_array($title) ? $title : [$title]);
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(!empty($title)) {{ implode(' - ', $title) }} @endif | {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body {{ $attributes->class('antialiased bg-gray-100') }}>
{{ $slot }}

<script defer src="{{ asset('js/app.js') }}"></script>
</body>
</html>
