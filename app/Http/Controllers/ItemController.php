<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    $apiKey = env('HESABFA_API_KEY');
    $loginToken = env('HESABFA_LOGIN_TOKEN');
    // برای گرفتن لیست کالا ها
    $response = Http::post('https://api.hesabfa.com/v1/item/getitems', [
    'apiKey' => env('HESABFA_API_KEY') ,
    'loginToken' => env('HESABFA_LOGIN_TOKEN'),
    'queryInfo:' => [

     'sortBy' => 'Code',
     'sortDesc' => 'true',
     'Take' => '20',
     'skip' => '0',
    ],
    ])->json();

    // dd($response);
        return view('items.list' , [
    'items' => $response['Result'] ?? []
           ]);
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
