<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('customers.store') }}" method="post" id="createForm">
                @csrf
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Your name">
                </div>
                <div class="mb-3">
                    <label for="customer_address" class="form-label">Customer Address</label>
                    <input type="text" name="customer_address" class="form-control" id="customer_address" placeholder="Your Address">
                </div>
                <div class="mb-3">
                    <label for="customer_gender" class="form-label">Customer Gender</label>
                    <input type="number" name="customer_gender" class="form-control" id="customer_gender" placeholder="1: Man, 0: Woman">
                </div>
                <div class="mb-3">
                    <label for="customer_birthdate" class="form-label">Customer Birthdate</label>
                    <input type="date" name="customer_birthdate" class="form-control" id="customer_birthdate">
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
