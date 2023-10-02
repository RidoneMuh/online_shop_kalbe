@extends('layout.app')
@section('title', 'Product')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Products</h1>
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
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->txtProductCode }}</td>
                    <td>{{ $row->txtProductName }}</td>
                    <td>{{ $row->intQty }}</td>
                    <td>{{ $row->decPrice }}</td>
                    <td>
                        <div class="d-flex d-inline">
                            <a href="" class="btn btn-sm btn-info">Detail</a>
                            <form action="{{ route('products.destroy', $row->intProductID) }}" method="post">
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
@include('products.create')
@endsection

