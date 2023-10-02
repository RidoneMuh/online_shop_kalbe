<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/customers');
        $result = json_decode($response->getBody()->getContents());
        $customers = $result->data->data;
        return view('customers.index', compact('customers'));
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
        $response = Http::post('http://localhost:8000/api/customers', [
            'customer_name' => $request->customer_name,
            'customer_address' => $request->customer_address,
            'customer_gender' => $request->customer_gender,
            'customer_birthdate' => $request->customer_birthdate,
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
        $response = Http::delete("http://localhost:8000/api/customers/$id");

        $result = json_decode($response->getBody()->getContents());

        if ($result->success === true) {
            return redirect()->back();
        }
    }
}
