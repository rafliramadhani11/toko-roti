<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50">

    @if (isset($guestNav))
        {{ $guestNav }}
    @endif


    <main class="px-3 py-5">
        {{ $slot }}
    </main>

    @if (isset($guestFooter))
        {{ $guestFooter }}
    @endif


    @livewireScripts
</body>

</html>
