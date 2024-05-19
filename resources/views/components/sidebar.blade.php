<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <h3 class="navbar-brand mx-4 mb-3 text-primary text-center">INVENTORI - APP</h3>
        <div class="navbar-nav w-100">
            <span class="nav-item mx-4">Dashboard</span>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-home"></i>Dashboard</a>

            <span class="nav-item mx-4 mt-3">Menu Pengguna</span>
            <a href="/menu/list-user" class="nav-item nav-link {{ Request::is('menu/list-user*') ? 'active' : '' }}"><i
                    class="fa-solid fa-users"></i>List User</a>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-truck-fast"></i>List Supplier</a>

            <span class="nav-item mx-4 mt-3">Menu Barang</span>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-box"></i>List Barang</a>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-truck-ramp-box"></i>Penerimaan</a>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-boxes-packing"></i>Pengeluaran</a>
            <a href="/menu/data-user" class="nav-item nav-link"><i class="fa-solid fa-cart-arrow-down"></i>List
                Order</a>
        </div>
    </nav>
</div>
