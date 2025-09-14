@extends('posts.layout')

@section('title-page', 'Post Page')

@section('content')


    <main class="container mx-auto px-4 py-8 max-w-xl">
        {{-- <x-alert type="success" />
        <x-alert type="error" /> --}}

        <h2 class="text-2xl font-semibold mb-6">Edit post :{{$post->title}}</h2>
        {{--
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form method="POST" action="{{ route('posts.update' , ['post' => $post->id]) }}" class="bg-white p-6 rounded shadow space-y-4">
            @csrf
            @method('PUT')

            {{-- @if ($errors->has('title'))
                 @foreach ($errors->get('title') as $error)
                    <span class="text-red-600 font-bold">{{$error}}</span>
                 @endforeach
            @endif
             --}}
            {{-- title validaion --}}
            @error('title')
                <span class="text-red-600 font-bold">{{ $message }}</span>
            @enderror

            <x-form.input lable="title" name="title" LayoutClass="mb-4" value="{{ old('category' , $post->title) }}" />
            {{-- @dump($errors->all()) --}}

            {{-- category validaion --}}
            @error('category')
                <span class="text-red-600 font-bold">{{ $message }}</span>
            @enderror

            <x-form.input lable="category" name="category" LayoutClass="mb-4" value="{{ old('category' , $post->category) }}" />

            {{-- description validaion --}}
            @error('description')
                <span class="text-red-600 font-bold">{{ $message }}</span>
            @enderror

            <div>
                <label class="block font-semibold text-gray-700">Description</label>
                <textarea name="description" rows="5" class="w-full mt-1 px-4 py-2 border rounded focus:ring"
                    placeholder="write post description">{{ old('description' , $post->description) }}</textarea>
            </div>



            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
            </div>
        </form>
    </main>

@endsection
