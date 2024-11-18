<html class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full antialiased bg-slate-50">

    <livewire:admin-navigation />

    @if (isset($header))
        <div class="w-full bg-white rounded shadow">
            <div class="flex items-center px-3 py-3 mx-auto text-lg font-semibold md:px-8 lg:max-w-7xl ">
                {{ $header }}
            </div>
        </div>
    @endif

    <main class="px-3 py-5 mx-auto md:px-8 lg:max-w-7xl">
        {{ $slot }}
    </main>

    @livewireScripts
</body>

</html>
