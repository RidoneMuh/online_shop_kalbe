<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/products');
        $result = json_decode($response->getBody()->getContents());
        $products = $result->data->data;
        return view('products.index', compact('products'));
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
        $response = Http::post('http://localhost:8000/api/products', [
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'qty' => $request->qty,
            'price' => $request->price,
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
        $response = Http::delete("http://localhost:8000/api/products/$id");

        $result = json_decode($response->getBody()->getContents());

        if ($result->success === true) {
            return redirect()->back();
        }
    }
}
