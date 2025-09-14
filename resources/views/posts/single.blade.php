@extends('posts.layout')

@section('title-page', 'Post Page')

@section('content')
    <main class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold mb-4">Recent Posts</h2>

        <div class="space-y-4">
            {{-- Replace with @foreach in real app --}}
            <div class="bg-white p-4 shadow rounded">
                <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                <p>user: {{$post->user()->first()->name}}</p>
                <p class="text-gray-700">{{ $post->description }}</p>
            </div>
        </div>
    </main>


@endsection
