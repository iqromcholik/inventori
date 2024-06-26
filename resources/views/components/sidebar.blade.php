<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <h3 class="navbar-brand mx-4 mb-3 text-primary text-center">INVENTORI - APP</h3>
        <div class="navbar-nav w-100">
            <span class="nav-item mx-4">Dashboard</span>
            <a href="/home" class="nav-item nav-link {{ Request::is('home*') ? 'active' : '' }}"><i
                    class="fa-solid fa-home"></i>Dashboard</a>

            <span class="nav-item mx-4 mt-3">Menu Pengguna</span>
            <a href="/menu/list-user" class="nav-item nav-link {{ Request::is('menu/list-user*') ? 'active' : '' }}"><i
                    class="fa-solid fa-users"></i>List User</a>
            <a href="/menu/list-supplier"
                class="nav-item nav-link {{ Request::is('menu/list-supplier*') ? 'active' : '' }}"><i
                    class="fa-solid fa-truck-fast"></i>List
                Supplier</a>

            <span class="nav-item mx-4 mt-3">Menu Barang</span>
            <a href="/menu/list-barang"
                class="nav-item nav-link {{ Request::is('menu/list-barang*') ? 'active' : '' }}"><i
                    class="fa-solid fa-box"></i>List Barang</a>
            <a href="/menu/order-barang"
                class="nav-item nav-link {{ Request::is('menu/order-barang*') ? 'active' : '' }}"><i
                    class="fa-solid fa-cart-arrow-down"></i>Order
                Barang</a>
            <a href="/menu/order-detail"
                class="nav-item nav-link {{ Request::is('menu/order-detail*') ? 'active' : '' }}"><i
                    class="fa-solid fa-clipboard-list"></i>Order
                Detail</a>
            <a href="/menu/penerimaan-barang"
                class="nav-item nav-link {{ Request::is('menu/penerimaan-barang*') ? 'active' : '' }}"><i
                    class="fa-solid fa-truck-ramp-box"></i>Penerimaan</a>
            <a href="/menu/pengeluaran-barang"
                class="nav-item nav-link {{ Request::is('menu/pengeluaran-barang*') ? 'active' : '' }}"><i
                    class="fa-solid fa-boxes-packing"></i>Pengeluaran</a>
        </div>
    </nav>
</div>
