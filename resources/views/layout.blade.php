<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>@yield('title', 'Cafena - Coffee Shop HTML5 Template')</title>
    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{('frontend/images/logo/favicon.ico')}}" type="images/x-icon" />
    <!--====== CSS Here ======-->
    @stack('style')
</head>

<body class="">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
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

    <!-- header start -->
    <header class="site-header">
        <div class="header-top header-top__2">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="header-top__left d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{('frontend/images/logo/logo-black.png')}}" alt="img">
                                </a>
                            </div>
                            <ul class="header-top__infos pl-75 list-unstyled d-flex align-items-center mb-0">
                                <li><a href="tel:91800458568"><i class="fas fa-phone-square"></i> 91 800 458 568</a></li>
                                <li><i class="fa fa-map-marker-alt"></i> Wasington Baseben</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12  align-self-center">
                        <div class="header-top__right header-top__right--2 d-flex justify-content-xl-end justify-content-center align-items-center">
                            <div class="social-links social-links__2 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <a href="#0" class="site-btn">testy Coffee</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area menu-area-2 custom-padding">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-6">
                        <div class="logo mm-only d-md-block d-lg-none">
                            <a href="index.html">
                                <img src="{{('frontend/images/logo/logo-black.png')}}" alt="img">
                            </a>
                        </div>
                        <div class="main-menu main-menu__2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{('URL::to(/home)')}}">Home</a></li>
                                    <li><a href="{{('URL::to(/about)')}}l">About</a></li>
                                    <li><a href="menu.html">Menu</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="#0">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="chefs.html">Chefs</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Shop Cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-6 align-self-center">
                        <div class="menu-area__right menu-area__right--2 d-flex justify-content-end align-items-center">
                            <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
                                    <span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="index.html">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="hamburger-trigger item">
                                <i class="far fa-bars"></i>
                            </div>
                            <div class="cart cart-trigger item position-relative">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart__count">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab" href="#menu-tab-1" role="tab" aria-controls="menu-tab-1" aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2" role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="{{('frontend/images/logo/logo-black.png')}}" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel" aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel" aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="site-btn mt-20" href="contact.html">Contact us</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- side info for desktop view -->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="{{('frontend/images/logo/logo-black.png')}}" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                <a class="site-btn mt-20" href="contact.html">Contact us</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

    <!-- cart list -->
    <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{('frontend/images/top-grade/tg-1.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{('frontend/images/top-grade/tg-2.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$36.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{('frontend/images/top-grade/tg-3.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="{{('frontend/images/top-grade/tg-4.png')}}" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$20.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    @yield('content')

    <footer class="site-footer dark-bg pt-125 position-relative">
        <div class="footer__top">
            <a href="#" class="go-top go-top__white position-absolute d-flex align-items-center justify-content-center">
                <i class="fal fa-long-arrow-up"></i>
            </a>
            <div class="container">
                <div class="row justify-content-center mt-none-30">
                    <div class="col-xl-3 col-lg-6 mt-30">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="{{('frontend/images/icons/ft-phone.png')}}" alt="">
                                <span>Phone :</span>
                                <a href="tel:88019339702520">+88019 339 702 520</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mt-30 pl-55">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-start">
                                <img src="{{('frontend/images/icons/ft-map-marker.png')}}" alt="">
                                <span>Address :</span>
                                <p>30 North West New</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8 mt-30 pl-55">
                        <div class="footer__widget">
                            <div class="subscribe">
                                <form action="index.html">
                                    <input type="email" name="email" id="email" placeholder="Enter your email">
                                    <button type="submit" class="subscribe__btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__middle mt-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="footer__logo--content">
                            <img class="mb-15" src="images/logo/logo.png')}}" alt="">
                            <p>Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum</p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="social-links d-flex align-items-center justify-content-lg-end">
                            <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__menu-area mt-30 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="footer__menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="menu.html">Menu</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="#0">pages</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center text-lg-end">
                        <a href="#" class="go-top go-top__bottom">
                            <span>go top</span>
                            <i class="fal fa-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--========= JS Here =========-->
    @stack('scripts')
</body>

</html>