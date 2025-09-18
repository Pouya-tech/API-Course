<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>فرم فاکتور</title>
</head>

<body>

    {{-- header --}}
    @include('items.H&F.header')

    {{-- Main Content --}}
    @yield('content')

    {{-- footer --}}
    @include('items.H&F.footer')

    @livewireScripts
</body>

</html>
