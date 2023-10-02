@extends('layout.app')
@section('title', 'Product')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Customers</h1>
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
            <th scope="col">Cust. Name</th>
            <th scope="col">Cust. Address</th>
            <th scope="col">Cust. Gender</th>
            <th scope="col">Cust. Birthdate</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $row)
                @php
                    $gender = "";
                    if ($row->bitGender === true) {
                        $gender = "Man";
                    } else {
                        $gender = "Woman";
                    }
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->txtCustomerName }}</td>
                    <td>{{ $row->txtCustomerAddress }}</td>
                    <td>{{ $gender }}</td>
                    <td>{{ $row->dtmBirthDate }}</td>
                    <td>
                        <div class="d-flex d-inline">
                            <a href="" class="btn btn-sm btn-info">Detail</a>
                            <form action="{{ route('customers.destroy', $row->intCustomerID) }}" method="post">
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
@include('customers.create')
@endsection

