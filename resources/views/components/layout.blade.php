<!DOCTYPE html>
<html lang="en" class="custom-scroll-y">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="dark:bg-gray-950">
    <x-navbar></x-navbar>

    <main>
        <div class="mx-auto max-w-7xl px-4 lg:px-8 text-slate-300 mt-6">
            {{ $slot }}
        </div>
    </main>

    <a href="#" class="hidden"></a>

</body>
</html>