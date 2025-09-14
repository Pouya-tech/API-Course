<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-gray-100 py-8">
    <div class="container mx-auto max-w-md bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">User List</h1>

        @foreach ($users as $index => $user)
           @if ($index == 1)
           <p>{{$user['color']}}</p>
           @endif
        @endforeach

        {{-- @forelse ($users as $user)
            <p>this is user {{ $user['id'] }} , {{ $user['name'] }} , {{ $user['email'] }}</p>
        @empty
             <p>no users</p>
        @endforelse --}}

    </div>
</body>

</html>
