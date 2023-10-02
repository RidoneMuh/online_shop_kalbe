<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/sales');
        $result = json_decode($response->getBody()->getContents());
        $sales = $result->data;

        // Get Customer
        $getCustomers = Http::get('http://localhost:8000/api/customers');
        $resCustomers = json_decode($getCustomers->getBody()->getContents());
        $customers = $resCustomers->data->data;

        //Get Products
        $getProducts = Http::get('http://localhost:8000/api/products');
        $resProducts = json_decode($getProducts->getBody()->getContents());
        $products = $resProducts->data->data;
        return view('sales.index', compact(['sales', 'customers', 'products']));
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
        // dd($request);
        $response = Http::post('http://localhost:8000/api/sales', [
            'customer_id' => $request->customer_id,
            'product_id' => $request->product_id,
            'buyed_at' => $request->buyed_at,
            'qty' => $request->qty,
        ]);

        $result = json_decode($response->getBody()->getContents());

        if ($result->success === true) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $response = Http::delete("http://localhost:8000/api/sales/$id");

        $result = json_decode($response->getBody()->getContents());

        if ($result->success === true) {
            return redirect()->back();
        }
    }
}
