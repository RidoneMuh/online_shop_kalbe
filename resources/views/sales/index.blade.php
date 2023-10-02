@extends('layout.app')
@section('title', 'Product')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Sales</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Create
        </button>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Customer</th>
            <th scope="col">Product</th>
            <th scope="col">Order Date</th>
            <th scope="col">Order</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sales as $row)
                @php
                    $cust_name = $row->customer->txtCustomerName;
                    $prod_name = $row->product->txtProductName;
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cust_name }}</td>
                    <td>{{ $prod_name }}</td>
                    <td>{{ $row->dtSalesOrder }}</td>
                    <td>{{ $row->intQty }} pc(s)</td>
                    <td>
                        <div class="d-flex d-inline">
                            <a href="" class="btn btn-sm btn-info">Detail</a>
                            <form action="{{ route('sales.destroy', $row->intSalesOrderID) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</main>
@include('sales.create')
@endsection

