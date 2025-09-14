@extends('Products.layout')

@section('title', 'لیست محصولات')

@section('content')
<div class="container py-12">
    <h2 class="text-3xl font-bold mb-6">لیست محصولات</h2>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
            <div class="border rounded-lg p-5 shadow hover:shadow-lg bg-white transition">
                <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                <p>کد کالا: {{ $product->code }}</p>
                <p>موجودی: {{ $product->stock }}</p>
                <p class="font-bold mt-2">قیمت: {{ number_format($product->sell_price) }} تومان</p>

                <a href="{{ url('/invoice/'.$product->code) }}"
                   class="block mt-3 bg-blue-500 text-white text-center rounded-lg p-2 hover:bg-blue-600">
                   خرید محصول
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
