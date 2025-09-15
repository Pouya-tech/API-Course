@extends('invoice.layout')

@section('title', 'فاکتور')

@section('content')
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">فاکتور فروش</h1>

        <div class="mb-6 grid grid-cols-2 gap-4">
            <div>
                <p><span class="font-semibold">شماره فاکتور:</span> {{ $invoice['Number'] ?? '-' }}</p>
                <p><span class="font-semibold">تاریخ فاکتور:</span> {{ $invoice['Date'] ?? '-' }}</p>
            </div>
            <div>
                <p><span class="font-semibold">مشتری:</span> {{ $invoice['ContactTitle'] ?? '-' }}</p>
                <p><span class="font-semibold">تاریخ سر رسید فاکتور:</span> {{ $invoice['DueDate'] ?? '-' }}</p>
            </div>
        </div>

        <h3 class="text-xl font-semibold mb-2 border-b pb-1">لیست کالاها:</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="border border-gray-300 px-4 py-2 text-left">شرح کالا</th>
                        <th class="border border-gray-300 px-4 py-2 text-right">تعداد</th>
                        <th class="border border-gray-300 px-4 py-2 text-right">قیمت واحد</th>
                        <th class="border border-gray-300 px-4 py-2 text-right">تخفیف</th>
                        <th class="border border-gray-300 px-4 py-2 text-right">جمع</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice['InvoiceItems'] ?? [] as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $item['Description'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">{{ $item['Quantity'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($item['UnitPrice']) }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2 text-right">{{ $item['Discount'] }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">
                                {{ number_format($item['TotalAmount']) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-right">
            <p class="font-semibold text-lg"> مبلغ قابل پرداخت: {{ number_format($invoice['Payable'] ?? 0) }} تومان</p>
        </div>
    </div>
@endsection
