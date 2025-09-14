@extends('user.layout')

@section('title', 'فرم ثبت نام')

@section('content')
    <main class="container mx-auto px-4 py-8">

            <h2 class="text-2xl font-semibold mb-4">Welcome: {{ Auth::user()->name }}</h2>

            <livewire:counter/>

            <div class="space-y-4">
                {{-- Replace with @foreach in real app --}}

                    <div class="bg-white p-4 shadow rounded">
                        <h3 class="text-lg font-bold">{{ $user->name }}</h3>
                        <p class="text-gray-700">{{ $user->email }}</p>

                        <a href="{{ route('user.edit', $user->id) }}"
                            class="hover:text-blue-700 active:text-red-700 visited:text-green-700">Edit user ✏</a>
                        {{-- EDIT POST --}}
                        <br>
                        <a href="{{ route('posts.index', $user->id) }}"
                            class="hover:text-blue-700 active:text-red-700 visited:text-green-700">See Posts🗨</a>

                        <br>
                        {{-- MAKE POST --}}
                        <a href="{{ route('posts.create', $user->id) }}"
                            class="hover:text-blue-700 active:text-red-700 visited:text-green-700">Create Post🗨</a>

                        <br>
                        <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                class="text-red-700 hover:bg-red-200 rounded active:bg-red-700 active:text-red-200">
                                Delete 🗑</button>
                        </form>
                    </div>

            </div>
    </main>
@endsection
