@extends('user.layout')

@section('title', 'فرم ایجاد کاربر')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">فرم ساخت اکانت</h1>

        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="m b-4">
                <x-form.input lable="نام" name="name" LayoutClass="m-4" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <x-form.input lable="ایمیل" name="email" LayoutClass="m-4" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <x-form.input lable="پسورد" name="password" LayoutClass="m-4" value="{{ old('password') }}" />
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <x-form.input lable="تکرار پسورد جدید" name="password_confirmation" LayoutClass="m-4"
                    value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button href="{{ route('user.login') }}" type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition cursor-pointer">
                ایجاد کاربر
            </button>
            <br>
            <br>
            <p class="text-red-700 cursor-default">اگر عضو هستید وارد شوید</p>
            <br>
            <a href="{{ route('user.login') }}"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition cursor-pointer block text-center">
                ورود
            </a>
        </form>
    </div>
@endsection
