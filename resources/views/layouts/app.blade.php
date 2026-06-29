<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') - {{ config('app.name', 'Youtube-clone') }}</title>
    <link rel="icon" href="/youtube_clone.ico" sizes="any">
    <link rel="icon" href="/youtube_clone.png" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="{ openSidebar: true, searchOpen: false }">

    {{-- youtube clone header --}}
    {{-- <div> --}}
    @include('pages.header')
    {{-- </div>/ --}}

    <main class="flex">
        @include('pages.sidebar')
        @yield('content')
    </main>
</body>

</html>
