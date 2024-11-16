<html class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full antialiased bg-slate-50">

    <livewire:admin-navigation />

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
