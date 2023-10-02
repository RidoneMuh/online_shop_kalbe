<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('products.store') }}" method="post" id="createForm">
                @csrf
                <div class="mb-3">
                    <label for="product_code" class="form-label">Product Code</label>
                    <input type="text" name="product_code" class="form-control" id="product_code" placeholder="P0001,dst">
                </div>
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Prenagen Mommy">
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Stock</label>
                    <input type="text" name="qty" class="form-control" id="qty" placeholder="5">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="10000">
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
