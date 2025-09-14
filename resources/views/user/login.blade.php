@extends('user.layout')

@section('title', 'فرم ثبت نام')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">ورود به پنل</h1>

        <form method="POST" action="{{ route('user.login') }}">
            @csrf
            <div class="mb-4">
                <x-form.input lable="نام یا ایمیل " name="login" LayoutClass="m-4" value="{{ old('login') }}" />
                @error('login')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <x-form.input lable="پسورد " name="password" LayoutClass="m-4" value="{{ old('password') }}" />
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button href = "{{ route('user.index') }}" type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                ورود
            </button>
        </form>
    </div>
@endsection
