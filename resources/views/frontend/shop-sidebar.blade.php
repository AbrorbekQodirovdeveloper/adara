<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adara - Modern & Multipurpose eCommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-three">
        <div class="header-top-wrap">
            <div class="container custom-container-two">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul>
                                <li><a href="{{ route('about.page') }}">About US</a></li>
                                <li><a href="#"> id:{{ $client != null ? $client->id : '0' }}</a></li>
                                <li><a
                                        href="tel:123456789">email:{{ $client != null ? $client->email : 'not loginedd' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-right">
                            <div class="lang">
                                <select name="select">
                                    <option value="">English</option>
                                    <option value="">Spanish</option>
                                    <option value="">Turkish</option>
                                    <option value="">Russian</option>
                                    <option value="">Chinese</option>
                                </select>
                            </div>
                            <div class="currency">
                                <form action="#">
                                    <select name="select">
                                        <option value="">USD</option>
                                        <option value="">AUE</option>
                                        <option value="">SAR</option>
                                        <option value="">INR</option>
                                        <option value="">BDT</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header menu-area">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                            width="120px" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children has--mega--menu"><a href="/">Home</a>
                                        </li>
                                        <li class="active has--mega--menu"><a href="/shop">Shop</a>
                                        </li>
                                        <li><a href="/about">About Us</a></li>
                                        <li class="menu-item-has-children"><a href="/blog">blog</a>
                                        </li>
                                        <li ><a href="/contact">Contact Us</a></li>
                                        <li ><a href="/order">MY ORDERS</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                        @if (!isset($client))
                                            <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a></li>
                                        @else
                                            <li class="sign-in"><a href="{{ route('client.logout') }}"><i
                                                        style="color: red" class="fas fa-sign-out-alt"></i></a></li>
                                        @endif
                                        <li class="header-wishlist"><a href="#"><i
                                                    class="flaticon-heart-shape-outline"></i></a></li>
                                        <li class="header-shop-cart"><a href="#"><i
                                                    class="flaticon-shopping-bag"></i><span>{{ count($carts) }}</span></a>
                                            <ul class="minicart">
                                                @foreach ($carts as $cart)
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="{{ asset($cart->image) }}"
                                                                    alt=""></a>

                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="#"> {{ $cart->id }},
                                                                    {{ $cart->name }}</a></h4>
                                                            <div class="cart-price">
                                                                <span class="new"> Price:
                                                                    {{ $cart->price - $cart->price * ($cart->discount / 100) }}
                                                                    $</span>
                                                                <span><del>{{ $cart->price * $cart->count }}
                                                                        $</del></span>
                                                            </div>
                                                            <div class="cart-price">
                                                                <span class="new">Count {{ $cart->count }}
                                                                </span>
                                                                <span class="new">
                                                                    <br>With Count :
                                                                    {{ ($cart->price - $cart->price * ($cart->discount / 100)) * $cart->count }}
                                                                </span>$

                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="{{ route('delete.cart', $cart->id) }}"><i
                                                                    class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>
                                                @endforeach

                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">
                                                            @php
                                                                $totalDiscount = 0;
                                                            @endphp
                                                            @foreach ($carts as $cart)
                                                                @php
                                                                    $discountAmount =
                                                                        ($cart->price -
                                                                            $cart->price * ($cart->discount / 100)) *
                                                                        $cart->count;
                                                                    $totalDiscount += $discountAmount;
                                                                @endphp
                                                            @endforeach
                                                            @php
                                                                echo $totalDiscount;
                                                            @endphp $


                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="{{ route('cart.page') }}">Shopping Cart</a>
                                                        <a class="black-color" href="/checkout">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i
                                                    class="flaticon-menu-button-of-three-horizontal-lines"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                            <nav class="menu-box">
                                <div class="nav-logo"><a href="/"><img src="img/logo/logo.png" alt=""
                                            title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a href="#">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                                <li><a href="index-6.html">Home Six</a></li>
                                                <li><a href="index-7.html">Home Seven</a></li>
                                                <li><a href="index-8.html">Home Eight</a></li>
                                                <li><a href="index-9.html">Home Nine</a></li>
                                            </ul>
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Shop</a>
                                        </li>
                                        <li><a href="/about">About Us</a></li>
                                        <li class="menu-item-has-children"><a href="/blog">blog</a>
                                        </li>
                                        <li ><a href="/contact">Contact Us</a></li>
                                        <li ><a href="/order">MY ORDERS</a></li>
                                    </ul>
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Search-end -->

        <!-- off-canvas-start -->
        <div class="sidebar-off-canvas info-group">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-widget scroll">
                <div class="sidebar-widget-container">
                    <div class="off-canvas-heading">
                        <a href="#" class="close-side-widget">
                            <span class="flaticon-targeting-cross"></span>
                        </a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">

                                <div class="logo mb-30">
                                    <a href="{{ route('main.page') }}"><img
                                            src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="content-box">
                                    <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                    </p>
                                </div>
                                <div class="contact-info">
                                    <h4 class="title">CONTACT US</h4>
                                    <ul>
                                        <li><span class="flaticon-phone-call"></span><a
                                                href="+998972320018">{{ $settings->phone }}</a></li>
                                        <li><span class="flaticon-email"></span><a
                                                href="muqimovdeveloper@gmail.com">{{ $settings->email }}</a></li>
                                        <li><span class="flaticon-place"></span>{{ $settings->address }}</li>
                                    </ul>
                                </div>
                                @if ($client)
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="{{ route('regster.news') }}" method="POST">
                                            @csrf


                                            <button class="btn" type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                @elseif(!$client)
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="{{ route('regster.news') }}" method="POST">
                                            @csrf

                                            <input type="email" name="email" placeholder="Email..." required>

                                            <button class="btn" type="submit">Subscribe</button>
                                        </form>
                                    </div>
                                @endif


                                <div class="oc-social">
                                    <ul>
                                        <li><a href="https://t.me/dasturchi_07"><i
                                                    class="fab fa-telegram"></i></a></li>

                                    </ul>
                                </div>
                                {{-- <div class="oc-bottom">
                                            <div class="currency">
                                                <form action="#">
                                                    <label>Currency</label>
                                                    <select name="select">
                                                        <option value="">USD</option>
                                                        <option value="">AUE</option>
                                                        <option value="">SAR</option>
                                                        <option value="">INR</option>
                                                        <option value="">BDT</option>
                                                    </select>
                                                </form>
                                            </div>
                                            <div class="language">
                                                <form action="#">
                                                    <label>Language</label>
                                                    <select name="select">
                                                        <option value="">English</option>
                                                        <option value="">Spanish</option>
                                                        <option value="">Turkish</option>
                                                        <option value="">Russian</option>
                                                        <option value="">Chinese</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div> --}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- off-canvas-end -->

    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg"
            data-background="{{ asset('frontend/assets/img/bg/breadcrumb_bg01.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>Shop Sidebar</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-top-meta mb-35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="shop-top-left">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                            <li>Showing 1–9 of 80 results</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="shop-top-right">
                                        <form action="#">
                                            <select name="select">
                                                <option value="">Sort by newness</option>
                                                <option>Free Shipping</option>
                                                <option>Best Match</option>
                                                <option>Newest Item</option>
                                                <option>Size A - Z</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="new-arrival-item text-center mb-50">
                                        <div class="thumb mb-25">
                                            <div class="discount-tag">{{ $product->discount }}%</div>
                                            <a href="{{ route('main.show', $product->id) }}"><img
                                                    src="{{ $product->image }}" width="250" height="350"
                                                    alt=""></a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="{{ route('main.show', $product->id) }}"><i
                                                                class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5><a
                                                    href="{{ route('main.show', $product->id) }}">{{ $product->name }}</a>
                                            </h5>
                                            <span class="price">{{ $product->price }} $</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-wrap">
                            <ul>
                                <li class="prev"><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li class="next"><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <aside class="shop-sidebar">
                            <div class="widget side-search-bar">
                                <form action="#">
                                    <input type="text">
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Product Categories</h4>
                                <div class="shop-cat-list">
                                    @foreach ($categorys as $category )
 <ul>
                                        <li><a href="#">{{$category->name}}</a><span>(0)</span></li>
                                    </ul>
                                    @endforeach

                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Price Filter</h4>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <span>Price :</span>
                                        <input type="text" id="amount" name="price"
                                            placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Product Brand</h4>
                                <div class="sidebar-brand-list">
                                    @foreach ($products as $product)
                                        <ul>
                                            <li><a href="#">{{ $product->type }} <i
                                                        class="fas fa-angle-double-right"></i></a></li>
                                        </ul>
                                    @endforeach

                                </div>
                            </div>
                            <div class="widget has-border">
                                <div class="sidebar-product-size mb-30">
                                    <h4 class="widget-title">Product Size</h4>
                                    <div class="shop-size-list">
                                        @foreach ($productsize as $size )
   <ul>
                                            <li><a href="#">{{$size->name}}</a></li>
                                        </ul>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="sidebar-product-color">
                                    <h4 class="widget-title">Color</h4>
                                    <div class="shop-color-list">
                                        @foreach ($productcolor as $color )
                                         <ul>
                                            <li class="mb-1"
                                            style="height:20px; width:20px; border-radius:50%; background-color:{{ $color->color }};">
                                        </li>
                                        </ul>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Top Items</h4>
                                <div class="sidebar-product-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-product-thumb">
                                                <a href="#"><img src="img/product/sidebar_product01.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="sidebar-product-content">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h5><a href="#">Woman T-shirt</a></h5>
                                                <span>$ 39.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            @foreach ($products->partner as $product )

                                            @endforeach
                                            <div class="sidebar-product-thumb">
                                                <a href="#"><img src=""
                                                        alt=""></a>
                                            </div>
                                            <div class="sidebar-product-content">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h5><a href="#">{{$product->partner->name}}</a></h5>
                                                <span>$ 39.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-product-thumb">
                                                <a href="#"><img src="img/product/sidebar_product03.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="sidebar-product-content">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h5><a href="#">Fashion T-shirt</a></h5>
                                                <span>$ 39.00</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer class="gray-bg footer-style-two footer-style-three pt-75">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo">
                            <a href="{{ route('main.page') }}"><img
                                    src="{{ asset('frontend/assets/img/logo/logo.png') }}" width="150px"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-wrap pt-45 pb-20">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">COMPANY</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About us</a></li>
                                    <li><a href="/shop">Shop</a></li>
                                    <li><a href="/contact">Contact us</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">STORE</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">Category</h4>
                            <div class="fw-link">
                                <ul>
                                    {{-- <li><a href="#">{{$categorys->name}}</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">FOLLOW US</h4>
                            <div class="footer-text">
                                <p>Get Free Shipping on all your orders!</p>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="https://t.me/backend_frontend_uz" target="_blank"><i
                                                    class="fab fa-telegram"></i></a></li>
                                        <li><a href=""><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>&copy; 2024 <a href="{{ route('main.page') }}">{{ $settings->site_title }}</a>. Phone
                                | +998{{ $settings->phone }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pay-method-img">
                            <img src="img/images/payment_method_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-3.5.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
