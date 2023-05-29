<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
       
            <img src="{{ asset('/images/logo.png')}}" alt="" height="50" >ADMIN TKRO
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="/galery" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image-add"></i>
                <div data-i18n="checkin">Gallery</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/servis" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="laporan">Service</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/contak" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone-incoming"></i>
                <div data-i18n="laporan">Contact</div>
            </a>
        </li>
      
        <!-- Components -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Components">CRUD ADMIN</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/category" class="menu-link">
                        <div data-i18n="kategori">Category</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/subcategory" class="menu-link">
                        <div data-i18n="subkategori">SubCategory</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/product" class="menu-link">
                        <div data-i18n="produk">Produk</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/cart" class="menu-link">
                        <div data-i18n="cart">Cart</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/user" class="menu-link">
                        <div data-i18n="keranjang">Data User</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/transaction" class="menu-link">
                        <div data-i18n="transaction">Transaction</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/riwayat" class="menu-link">
                        <div data-i18n="history">Supply</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/payment" class="menu-link">
                        <div data-i18n="history">payment</div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>