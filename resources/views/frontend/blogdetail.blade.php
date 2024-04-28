<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Adara online shop| blogdetail page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
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
                    <div class="row align-items-center justify-content-er">
                        <div class="col-sm-6">
                            <div class="header-top-link">
                                <ul>
                                    <li><a href="{{ route('about.page') }}">About US</a></li>
                                    <li><a href="#"> id:{{ $client != null ?  $client->id : '0' }}</a></li>
                                    <li><a href="tel:123456789">email:{{ $client != null ?  $client->email : 'not loginedd' }}</a></li>
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

                                        <a href="{{ route('main.page') }}"><img src="{{asset($settings->site_logo) }}" width="100px"
                                                alt=""></a>


                                           </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="menu-item-has-children has--mega--menu"><a href="{{ route('main.page') }}">Home</a>

                                            </li>
                                            <li class="active has--mega--menu"><a href="{{ route('shop.page') }}">Shop</a>
                                                <ul class="mega-menu">
                                                    <li class="mega-menu-wrap">
                                                        <ul class="mega-menu-col">
                                                            <li class="mega-title"><a href="{{ route('shop.page')  }}">SHOP PAGES</a></li>

                                                            <li><a href="{{ route('shop.page') }}">Our shop page</a></li>
                                                            <li><a href="#">Shop Details page </a></li>
                                                            <li class="active"><a href="{{ route('cart.page') }}">Cart Page</a></li>
                                                            <li ><a href="{{ route('checkout') }}">Checkout Page</a></li>
                                                        </ul>
                                                        <ul class="mega-menu-col sub-cat-post">
                                                            <li>
                                                                <a href="shop-sidebar.html">
                                                                    <img src="{{ asset('frontend/assets/img/product/sub_menu_img01.jpg') }}"
                                                                        alt="">
                                                                    <span class="btn">Man Shop</span>
                                                                </a>

                                                             </li>
                                                        </ul>
                                                        <ul class="mega-menu-col sub-cat-post">
                                                            <li>
                                                                <a href="shop-sidebar.html">
                                                                    <img src="{{ asset('frontend/assets/img/product/sub_menu_img02.jpg') }}"
                                                                        alt="">
                                                                    <span class="btn">Women’s Shop</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('about.page') }}">About </a></li>
                                            <li class=" active menu-item-has-children"><a href="{{ route('blog.page') }}">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('blog.page') }}">Our Blog</a></li>
                                                    <li class="active"><a href="/blogdetail">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                                    <li><a href="/order">MY Orders</a></li>

                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal"
                                                    data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                                    @if (!isset($client))
                                                    <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a></li>
                                                    @else


                                                   <li class="sign-in"><a href="{{ route('client.logout') }}"><i style="color: red" class="fas fa-sign-out-alt"></i></a></li>
                                                    @endif
                                                    <li class="header-wishlist"><a href="/wish"><i
                                                        class="flaticon-heart-shape-outline"></i></a></li>
                                            <li class="header-shop-cart"><a href="/cart"><i
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
                                                                        </span>
                                                                    <span><del>{{ $cart->price * $cart->count }}
                                                                            </del></span>
                                                                </div>
                                                                <div class="cart-price">
                                                                    <span class="new">Count {{ $cart->count }}
                                                                    </span>
                                                                    <span class="new">
                                                                        <br>With Count :
                                                                        {{ ($cart->price - $cart->price * ($cart->discount / 100)) * $cart->count }}
                                                                    </span>

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
                                                                @endphp


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
                                    <div class="nav-logo"><a href="{{ route('main.page') }}"><img src="{{ $settings->full_bg_image }}"
                                                alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class="menu-item-has-children"><a href="{{ route('main.page') }}">Home</a>

                                            </li>
                                            <li class="active menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="/shop">Shop Page</a></li>
                                                    {{-- <li><a href="shop-sidebar.html">Shop Sidebar</a></li> --}}
                                                    <li class="active"><a href="">Shop Details</a></li>
                                                    <li><a href="/cart">Cart Page</a></li>
                                                    <li><a href="/checkout">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/about">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="/blog">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="/blog">Our Blog</a></li>

                                                 <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/contact">Contact Us</a></li>
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
                        <form action="/shop" method="GET">
                            <input type="text" name="query" placeholder="Search here...">
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
                                        <a href="{{ route('main.page') }}"><img src="{{ $settings->site_logo}}" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                        </p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a
                                                    href="tel:123456789">{{ $settings->phone }}</a></li>
                                            <li><span class="flaticon-email"></span><a
                                                    href="mailto:adara@info.com">{{ $settings->email }}</a></li>
                                            <li><span class="flaticon-place"></span>{{ $settings->address }}</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>

                                             <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="{{ route('regster.news') }}" method="POST">
                                            @csrf

                                                     <input type="email" name="email" placeholder="Email..." required>
                                            <button class="btn" type="password">Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="oc-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="oc-bottom">
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
                                    </div>
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
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('img/bg/breadcrumb_bg01.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <div class="tag"><a href="/shop">Shopping</a></div>
                                <h3 class="title">The Greatest Thing World Belong Excepted</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Fashion is a Popular Aesthetic Expression Particular</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- blog-area -->
            <section class="blog-details-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="blog--post--item blog-details-content">
                                <div class="blog-post-thumb mb-25"><img src="img/blog/blog__thumb02.jpg" alt=""></div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i>By <a href="#">Tomas Alexa</a></li>
                                            <li><i class="far fa-calendar-alt"></i> November 10, 2021</li>
                                            <li><i class="far fa-comments"></i> 0 Comments</li>
                                        </ul>
                                    </div>
                                    <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <h4 class="title">The Greatest Thing World Belong Excepted</h4>
                                    <p>Excepteur sint occaecat cupidatat do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>Excepteur sint occaecat cupidatat do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <blockquote>
                                        “ Voluptate velit esse cillum dolore eu fugia nulla pariatur. Exceptur occaecat cupidatat non proidensunt in culpa qui
                                        officia deserunt “
                                    </blockquote>
                                    <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="blog-details-img-wrap">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="blog-details-img">
                                                    <img src="img/blog/blog_details_thumb01.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="blog-details-img">
                                                    <img src="img/blog/blog_details_thumb02.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="blog-details-meta">
                                        <div class="blog-bottom-meta">
                                            <ul>
                                                <li><i class="far fa-heart"></i><a href="#">0 Likes</a></li>
                                                <li><i class="far fa-comment"></i>3 Comments</li>
                                                <li>
                                                    <i class="fas fa-tag"></i>
                                                    <a href="#">Fashion,</a>
                                                    <a href="#">Lifestyle,</a>
                                                    <a href="#">Blanding</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="classic-blog-share">
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                        </div>
                                    </div>
                                    <div class="avatar-post mt-50 mb-70">
                                        <div class="post-avatar-img">
                                            <img src="img/blog/post_avatar_img.png" alt="img">
                                        </div>
                                        <div class="post-avatar-content">
                                            <h5>Hazal Kaya</h5>
                                            <p>Here are just a few things to know about online payment systems. ... A merchant account is a bank account
                                                that allows.</p>
                                            <div class="post-avatar-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comment mb-60">
                                        <h5 class="b-details-title mb-35">3 Comments</h5>
                                        <ul>
                                            <li>
                                                <div class="single-comment">
                                                    <div class="comment-avatar-img">
                                                        <img src="img/blog/comment_avatar01.jpg" alt="img">
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="comment-avatar-info">
                                                            <h5>Daisy Waterstone <span class="comment-date">November 13, 2021</span></h5>
                                                            <a href="#" class="comment-reply-link">Reply _</a>
                                                        </div>
                                                        <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment-reply">
                                                <div class="single-comment">
                                                    <div class="comment-avatar-img">
                                                        <img src="img/blog/comment_avatar02.jpg" alt="img">
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="comment-avatar-info">
                                                            <h5>Hazal Kaya <span class="comment-date">November 13, 2021</span></h5>
                                                            <a href="#" class="comment-reply-link">Reply _</a>
                                                        </div>
                                                        <p>Purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempr incididunt ut labore et dolore magna
                                                        aliqua. Ut enim ad minim</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-comment">
                                                    <div class="comment-avatar-img">
                                                        <img src="img/blog/comment_avatar03.jpg" alt="img">
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="comment-avatar-info">
                                                            <h5>Thomas Alexander <span class="comment-date">November 13, 2021</span></h5>
                                                            <a href="#" class="comment-reply-link">Reply _</a>
                                                        </div>
                                                        <p>The purpose Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="comment-reply-box">
                                        <h5 class="b-details-title mb-35">Leave a comment</h5>
                                        <form action="{{ route('blog.message') }}" method="POST" class="comment-form">
                                            @csrf
                                            <textarea name="comment" id="comment-message"  placeholder="Your Comment" required></textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="fullname" placeholder="Your Name*" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="email" placeholder="Your Email*" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" name="image" class="form-control-file"
                                                    id="exampleFormControlFile1" required>
                                                </div>
                                            </div>
                                            <div class="comment-check-box">
                                                <input type="checkbox" id="comment-check">
                                                <label for="comment-check">Save my name and email in this browser for the next time I comment.</label>
                                            </div>
                                            <button class="btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <aside class="blog-sidebar">
                                <div class="widget blog-sidebar-widget mb-45">
                                    <h5 class="widget-title">ABOUT ME</h5>
                                    <div class="sidebar-about">
                                        <div class="thumb"><img src="img/blog/sidebar_about_thumb.jpg" alt=""></div>
                                        <div class="content">
                                            <p>The purpose of lorem ipsum is create natural looking block of sentence doesn distract.Letset sheets containing puhing.</p>
                                            <a href="#">More About Me <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget blog-sidebar-widget mb-45">
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email...">
                                            <button class="btn">Subscribe</button>
                                        </form>
                                        <div class="oc-social">
                                            <h4 class="title">FOLLOW US</h4>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget blog-sidebar-widget mb-45">
                                    <h5 class="widget-title">Popular Posts</h5>
                                    <div class="blog-rc-post">
                                        <ul>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb01.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5><a href="blog-details.html">The Greatest Thing World Belong Excepted</a></h5>
                                                    <span><i class="far fa-calendar"></i> November 14, 2021</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb02.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5><a href="blog-details.html">Fashion is a Popular Aesthetic Expression Particular</a></h5>
                                                    <span><i class="far fa-calendar"></i> April 14, 2021</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="img/blog/rc_post_thumb03.jpg" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5><a href="blog-details.html">The Greatest Thing World Belong Excepted</a></h5>
                                                    <span><i class="far fa-calendar"></i> March 28, 2021</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget blog-sidebar-widget mb-45">
                                    <h5 class="widget-title">Categories</h5>
                                    <div class="blog-cat-list">
                                        <ul>
                                            <li><a href="#">Fashion</a>16</li>
                                            <li><a href="#">Woman</a>17</li>
                                            <li><a href="#">Lifestyle</a>08</li>
                                            <li><a href="#">Creative</a>19</li>
                                            <li><a href="#">Who</a>21</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget blog-sidebar-widget mb-45">
                                    <div class="sidebar-add">
                                        <a href="#"><img src="img/blog/sidebar_banner.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="widget blog-sidebar-widget">
                                    <h5 class="widget-title">TAGS POST</h5>
                                    <div class="blog-sidebar-tag">
                                        <ul>
                                            <li><a href="#">Art</a></li>
                                            <li><a href="#">Branding</a></li>
                                            <li><a href="#">Colors</a></li>
                                            <li><a href="#">Who</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Travel</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer class="gray-bg footer-style-two footer-style-three pt-75">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
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
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/shop">Store Locations</a></li>
                                        <li><a href="/contact">Contact</a></li>
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
                                        <li><a href="/sop">Women</a></li>
                                        <li><a href="/sop">Men</a></li>
                                        <li><a href="/sop">shoes</a></li>
                                        <li><a href="/sop">jacket</a></li>
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
                                            <li><a href="https://facebook.com/QodirovAbrorbek"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="https://instagram.com/AbrorbekQodirov963" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://t.me/dasturchi_07" target="_blank"><i
                                                        class="fab fa-telegram"></i></a></li>
                                            <li><a href="https://google.com"><i class="fab fa-google"></i></a></li>
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
                                <p>&copy; 2024 <a href="/">Adara</a>. All Rights Reserved | +998333733085</p>
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
