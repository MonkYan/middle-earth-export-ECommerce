 <header class="header">
        <div class="topcontain">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="index.html"><img src="{{URL::asset('images/logo.png')}}" alt="Logo" /></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-3 col-md-2 col-sm-12">
                    <div class="menubar">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home Style 1</a></li>
                                        <li><a href="index2.html">Home Style 2</a></li>
                                        <li><a href="index3.html">Home Style 3</a></li>
                                        <li><a href="index4.html">Home Style 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Products</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="shop.html">Furniture Category</a>
                                            <ul>
                                                <li><a href="shop.html">Small Storage</a></li>
                                                <li><a href="shop.html">Chaise beds</a></li>
                                                <li><a href="shop.html">Stools &amp; Benches</a></li>
                                                <li><a href="shop.html">Lounge Chairs</a></li>
                                                <li><a href="shop.html">Sofa armchairs</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Furniture Category</a>
                                            <ul>
                                                <li><a href="shop.html">Lounge Chairs</a></li>
                                                <li><a href="shop.html">Small Storage</a></li>
                                                <li><a href="shop.html">Chaise beds</a></li>
                                                <li><a href="shop.html">Stools &amp; Benches</a></li>
                                                <li><a href="shop.html">Small Storage</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Furniture Category</a>
                                            <ul>
                                                <li><a href="shop.html">Small Storage</a></li>
                                                <li><a href="shop.html">Chaise beds</a></li>
                                                <li><a href="shop.html">Stools &amp; Benches</a></li>
                                                <li><a href="shop.html">Lounge Chairs</a></li>
                                                <li><a href="shop.html">Sofa armchairs</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="shop.html">Shop View</a>
                                            <ul>
                                                <li><a href="shop.html">Shop Grid</a></li>
                                                <li><a href="list-view.html">Shop List</a></li>
                                                <li><a href="shop.html">Shop 3 Column</a></li>
                                                <li><a href="shop-full.html">Shop Full View</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop View</a>
                                            <ul>
                                                <li><a href="shop-sidebar-left.html">Sidebar Left</a></li>
                                                <li><a href="shop-sidebar-right.html">Sidebar Right</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Product Types</a>
                                            <ul>
                                                <li><a href="simple.html">Simple Product</a></li>
                                                <li><a href="configurable.html">Configurable Product</a></li>
                                                <li><a href="left-thumb.html">Thumb Left Product</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-2-col.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                        <li><a href="blog-2-col-mas.html">Blog 2 Col Masonry</a></li>
                                        <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                        <li><a href="blog-3-col-mas.html">Blog 3 Col Masonry</a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                        <li><a href="blog-detail-audio.html">Blog Audio</a></li>
                                        <li><a href="blog-detail-video.html">Blog Video</a></li>
                                        <li><a href="blog-detail-gallery.html">Blog Gallery</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 col-sm-12">
                    <div class="head_right">
                        <div class="login_bar">
                            <ul>
                                <!-- Login connection start -->
                                @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link mt-1" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('user_addresses.index') }}" class="dropdown-item">Shipping Address</a>
                                            <a href="{{ route('orders.index') }}" class="dropdown-item">My Orders</a>
                                            <a href="{{ route('products.favorites') }}" class="dropdown-item">Wish List</a>
                                            <a class="dropdown-item" id="logout" href="#"
                                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                <li class="search">
                                    <a href="#"><i class="fas fa-search"></i></a>
                                    <div class="search_bar">
                                        <form>
                                            <input type="text" name="search" placeholder="Search">
                                            <span class="search_icon"><i class="fas fa-search"></i></span>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-xl-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </header>

