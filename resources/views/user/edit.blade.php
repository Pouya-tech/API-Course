@extends('user.layout')

@section('title', 'فرم ایجاد کاربر')

@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">فرم ویرایش کاربر</h1>

        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="m b-4">
                <x-form.input lable="نام" name="name" LayoutClass="m-4" value="{{ old('name', $user->name) }}" />
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <x-form.input lable="ایمیل" name="email" LayoutClass="m-4" value="{{ old('email', $user->email) }}" />
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <hr>

            <div class="mb-6">
                <x-form.input lable="پسورد فعلی" name="current_password" LayoutClass="m-4"
                    value="{{ old('current_password') }}" />
                @error('current_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <x-form.input lable="پسورد جدید" name="new_password" LayoutClass="m-4" value="{{ old('new_password') }}" />
                @error('new_password')
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

            <button href="{{ route('user.index') }}" type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                ویرایش کاربر
            </button>
        </form>
    </div>
@endsection
