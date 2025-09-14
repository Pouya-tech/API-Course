<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Document</title>
</head>

<body>

    {{-- header --}}
    @include('invoice.H&F.header')

    {{-- Main Content --}}
    @yield('content')

    {{-- footer --}}
    @include('invoice.H&F.footer')

    @livewireScripts
</body>

</html>
