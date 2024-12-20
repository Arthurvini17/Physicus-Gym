<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ $title ?? 'Teste' }}</title>
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>
