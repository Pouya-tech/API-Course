@extends('invoice.layout')

@section('title-page', 'فرم فاکتور')

@section('content')
    <div class="w-full max-w-full">
        <form action="{{ route('invoice.store') }}" method="POST"
            class="bg-white shadow-md rounded px-10 pt-6 pb-8 mb-4 flex flex-wrap gap-2">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="invoice">
                    <span>(اختیاری)</span>شماره فاکتور
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-8 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="number" name="number" type="text" placeholder="xxxxxxxxxx">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="date">
                    تاریخ فاکتور
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" name="date" placeholder="MM/DD/YY" type="datetime-local" required>

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    تاریخ سر رسید فاکتور
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="dueDate" name="dueDate" type="datetime-local" placeholder="MM/DD/YY" required>

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    کد شخص
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="contactCode" name="contactCode" type="text" placeholder="xxxxxxxxxx" required>

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    نوع فاکتور
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="invoiceType" name="invoiceType" type="number" placeholder="Type" required>
            </div>

            <div class="w-full border-t pt-4 border-slate-600 my-4 mx-auto text-center">
                <span class="text-red-600 font-bold">اقلام فاکتور</span>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    توضیحات کالا یا خدمات
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" type="text" placeholder="description" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    کد کالا یا خدمات
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="itemCode" name="itemCode" type="text" placeholder="xxxxxxxxxx" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    تعداد یا مقدار
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="quantity" name="quantity" type="text" placeholder="xxxxxxxxxx" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    قیمت واحد
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="unitPrice" name="unitPrice" type="text" placeholder="unitPrice" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    تخفیف
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="discount" name="discount" type="text" placeholder="discount" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    مالیات
                </label>
                <input
                    class="shadow appearance-none border  rounded w-full py-2 px-8 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="tax" name="tax" type="text" placeholder="tax" required>
            </div>

                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold inline-block py-2 px-4 mr-86 mt-auto w-auto h-auto rounded focus:outline-none focus:shadow-outline self-start cursor-pointer"
                    type="submit">
                    Submit
                </button>

        </form>
    </div>
@endsection
