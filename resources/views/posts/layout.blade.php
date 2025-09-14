
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title')</title>
    @vite('resources/css/app.css' , 'resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
 {{-- header --}}
 @include('user.H&F.header')

    {{-- Main Content --}}
@yield('content')

 {{-- footer --}}
 @include('user.H&F.footer')


</body>
</html>

