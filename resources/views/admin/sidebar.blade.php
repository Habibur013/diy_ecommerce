<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/redirect') }}"><b
                style="font-size:2vw; color:#c5d4c9;text-decoration:none;">D.I.Y RENTALS</b></a>
    </div>


    <ul class="nav">
        <li class="mb-3 px-5">
            <strong style="color:#c5d4c9;">Dashboard</strong>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_category') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Category</span>
            </a>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('view_product') }}">Add Product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('show_product') }}">Show Products</a></li>
                </ul>
            </div>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Event Gallary</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('view_gallary_photo') }}"> Add Photo </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('show_gallary') }}"> View Photo </a></li>
                </ul>
            </div>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('view_order') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Order Request</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="#">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Another Item</span>
            </a>
        </li>








    </ul>
</nav>
