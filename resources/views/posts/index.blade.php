@extends('user.layout')

@section('title-page', 'Post Page')

@section('content')
    <main class="container mx-auto px-4 py-8">

       <h2 class="text-2xl font-semibold mb-4">پست های من</h2>

                    @if(session()->has('status'))
                    <p> {{session('status') }} </p>

                    @php
                     session()->forget('status')
                    @endphp

                    @endif

        <div class="space-y-4">
            {{-- Replace with @foreach in real app --}}
            @foreach ($posts as $post)
                <div class="bg-white p-4 shadow rounded">
                        {{-- نمایش پیغام برای ساخته شدن پست --}}

                    <a href="/posts/{{ $post->id }}">
                        <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                    </a>

                    <p class="text-gray-700">{{ $post->description }}</p>

                    <a href="{{ route('posts.edit' , $post->id) }}"
                        class="hover:text-blue-700 active:text-red-700 visited:text-green-700">Edit Post ✏</a>

                    <br>
                    <form method="POST" action="{{ route('posts.destroy' , $post->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="text-red-700 hover:bg-red-200 rounded active:bg-red-700 active:text-red-200">
                            Delete 🗑</button>
                    </form>
                </div>
            @endforeach
        </div>
    </main>


@endsection
