<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('products.index') }}">
                <span data-feather="shopping-cart"></span>
                Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">
                <span data-feather="users"></span>
                Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('sales.index') }}">
                <span data-feather="file"></span>
                Sales
                </a>
            </li>
        </ul>
    </div>
</nav>
