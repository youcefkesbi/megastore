<aside class="sidebar">
    <div class="sidebar-title">Admin Panel</div>
    <a href="{{ route('dashboard.index') }}">Overview</a>
    <a href="{{ route('products.index') }}">Products</a>
    <a href="{{ route('brands.index') }}">Brands</a>
    <a href="{{ route('categories.index') }}">Categories</a>
    <a href="{{ route('orders.index') }}">Orders</a>
    <a href="{{ route('shop') }}">Storefront</a>

    <form method="POST" action="{{ route('logout') }}" class="mt-3">
        @csrf
        <button type="submit">Log out</button>
    </form>
</aside>