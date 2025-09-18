<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoice.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->all();

    $apiKey = env('HESABFA_API_KEY');
    $loginToken = env('HESABFA_LOGIN_TOKEN');

    // تبدیل تاریخ به فرمت API
    $formattedDate = date('Y-m-d H:i:s', strtotime($data['date']));
    $formattedDue = date('Y-m-d H:i:s', strtotime($data['dueDate']));

    $items = [
        [
            'rowNumber' => 1,
            'description' => $data['description'] ?? '',
            'itemCode' => $data['itemCode'] ?? '',
            'unit' => 'عدد',
            'quantity' => (int) ($data['quantity'] ?? 1),
            'unitPrice' => (float) ($data['unitPrice'] ?? 0),
            'discount' => (float) ($data['discount'] ?? 0),
            'tax' => (float) ($data['tax'] ?? 0),
            'serialNumbers' => []
        ]
    ];

    $invoiceData = [
        'number' => $data['number'] ?? '',
        'date' => $formattedDate,
        'dueDate' => $formattedDue,
        'contactCode' => $data['contactCode'] ?? '',
        'contactTitle' => $data['customerName'] ?? '',
        'invoiceType' => (int) ($data['invoiceType'] ?? 0),
        'freight' => (float) ($data['freight'] ?? 0),
        'status' => 1, //
        'invoiceItems' => $items,
        'currency' => 'IRR',
        'currencyRate' => 1,
    ];

    $response = Http::post('https://api.hesabfa.com/v1/invoice/save', [
        'apiKey' => $apiKey,
        'loginToken' => $loginToken,
        'invoice' => $invoiceData
    ])->json();

    if (!empty($response['Success'])) {
        // گرفتن داده فاکتور ساخته شده
    $invoice = $response['Result'] ?? [];
    // ریدایرکت به صفحه نمایش فاکتور
    return redirect()->route('invoice.show',[
    'number' => $invoice['Number'],
    'type' => $invoice['InvoiceType']
    ])->with('Success', 'فاکتور با موفقیت ثبت شد');
    } else {
      return back()->withErrors(['msg' => $response['ErrorMessage']]);
    }
}

    /**
     * Display the specified resource.
     */
public function show($number , $type)
{
    $apiKey = env('HESABFA_API_KEY');
    $loginToken = env('HESABFA_LOGIN_TOKEN');
    // درخواست به API برای گرفتن اطلاعات فاکتور
    $response = Http::post('https://api.hesabfa.com/v1/invoice/get', [
             'apiKey' => env('HESABFA_API_KEY'),
             'loginToken' => env('HESABFA_LOGIN_TOKEN'),
             'number' => $number,
             'type' => $type,
    ])->json();

    if (!empty($response['Success'])) {
    $invoice = $response['Result'];

        return view('invoice.show', compact('invoice'));
    } else {
        abort(404, 'فاکتور پیدا نشد');
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
