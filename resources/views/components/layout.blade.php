<!DOCTYPE html>
<html lang="en" class="h-full dark:bg-gray-900 dark:text-gray-400">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{ $header }}</title>
</head>

<body class="h-full font-inter">
    <div class="min-h-full" x-data="{ mobileOpen: false, profileOpen: false }">

        <!-- Navbar -->
        <x-navbar></x-navbar>

        <x-header>{{ $header }}</x-header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

    </div>
</body>

</html>
