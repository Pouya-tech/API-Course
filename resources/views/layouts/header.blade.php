    {{-- Header --}}
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-lg font-bold">{{ $user->name }}s Blog</h1>
            <a href="{{ route('posts.create') }}" class="bg-white text-blue-600 px-4 py-2 rounded shadow hover:bg-gray-100 transition">Create Post</a>
        </div>
    </header>
