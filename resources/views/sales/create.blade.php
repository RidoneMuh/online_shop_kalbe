<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Sales</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('sales.store') }}" method="post" id="createForm">
                @csrf
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <select class="form-select" name="customer_id" id="customer_name">
                        <option selected>Select Customers</option>
                        @foreach ($customers as $opt)
                            <option value="{{ $opt->intCustomerID }}">{{ $opt->txtCustomerName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <select class="form-select" name="product_id" id="product_name">
                        <option selected>Select Customers</option>
                        @foreach ($products as $opt)
                            <option value="{{ $opt->intProductID }}">({{ $opt->txtProductCode }}) - {{ $opt->txtProductName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="buyed_at" class="form-label">Order Date</label>
                    <input type="datetime-local" name="buyed_at" class="form-control" id="buyed_at">
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Order</label>
                    <input type="number" name="qty" class="form-control" id="Qty...">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="createForm" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
</div>
