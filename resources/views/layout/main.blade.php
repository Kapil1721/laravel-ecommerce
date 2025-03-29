<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="Multipurpose eCommerce Template">

   <!-- font -->
   <link rel="stylesheet" href="fonts/fonts.css">
   <link rel="stylesheet" href="fonts/font-icons.css">
   <!-- css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/swiper-bundle.min.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="../../../sibforms.com/forms/end-form/build/sib-styles.css">
   <link rel="stylesheet" type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="e-commerce fav.png">
    <link rel="apple-touch-icon-precomposed" href="e-commerce fav.png">

</head>

<body class="preload-wrapper popup-loader">

    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="btn-style-2 radius-3"><span>RTL</span></a>
    <!-- /RTL  -->

    <!-- Scroll Top -->
    <button id="scroll-top">
        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_15741_24194)">
            <path d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <defs>
            <clipPath id="clip0_15741_24194">
            <rect width="24" height="24" fill="white" transform="translate(0 0.66748)"/>
            </clipPath>
            </defs>
        </svg> 
    </button>

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
     
    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-main">
            <div class="container">
                <div class="tf-topbar_wrap d-flex align-items-center justify-content-center justify-content-xl-between">
                    <ul class="topbar-left">
                        <li><a class="text-caption-1 text-white" href="##">123-456-7890</a></li>
                        <li><a class="text-caption-1 text-white" href="#">ecommerce@domain.com</a></li>
                        <li><a class="text-caption-1 text-white text-decoration-underline" href="shop.php">Our Store</a></li>
                    </ul>
                    <div class="topbar-right d-none d-xl-block">
                        <div class="tf-cur justify-content-end">
                            <div class="tf-currencies">
                                <select class="image-select center style-default type-currencies color-white">
                                    <option selected data-thumbnail="images/country/us.svg">USD</option>
                                    <option data-thumbnail="images/country/vn.svg">VND</option>
                                </select>
                            </div>
                            <div class="tf-languages">
                                <select class="image-select center style-default type-languages color-white">
                                    <option>English</option>
                                    <option>Vietnam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header id="header" class="header-default">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories"></i>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="index.php" class="logo-header">
                            <img src="e-commerce logo.png" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                                <li class="menu-item active">
                                    <a href="index.php" class="item-link">Home</a>
                                </li>
                               <li class="menu-item">
                                    <a href="about-us.php" class="item-link">About</a>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="shop.php" class="item-link">Shop<i class="icon icon-arrow-down"></i></a>
                                     <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="shop-collection.php" class="menu-link-text">Product Category</a></li>
                                            <li><a href="product-inner.php" class="menu-link-text">Product Inner</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="blog.php" class="item-link">Blogs<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="blog-detail.php" class="menu-link-text">Blog Detail</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.php" class="item-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center">
                            <li class="nav-search"><a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>    
                            </a></li>
                            <li class="nav-account">
                                <a href="#" class="nav-icon-item">
                                    <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <div class="dropdown-account dropdown-login">
                                    <div class="sub-top">
                                        <a href="login.php" class="tf-btn btn-reset">Login</a>
                                        <p class="text-center text-secondary-2">Don’t have an account? <a href="register.php">Register</a></p>
                                    </div>
                                    <div class="sub-bot">
                                        <span class="body-text-">Support</span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-wishlist"><a href="wish-list.php" class="nav-icon-item">
                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>  
                                </a>
                            </li>
                            <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item">
                                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5078 10.8734V6.36686C16.5078 5.17166 16.033 4.02541 15.1879 3.18028C14.3428 2.33514 13.1965 1.86035 12.0013 1.86035C10.8061 1.86035 9.65985 2.33514 8.81472 3.18028C7.96958 4.02541 7.49479 5.17166 7.49479 6.36686V10.8734M4.11491 8.62012H19.8877L21.0143 22.1396H2.98828L4.11491 8.62012Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>  
                                <span class="count-box">1</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->

        @yield('main')

                <!-- Footer -->
                <footer id="footer" class="footer">
                    <div class="footer-wrap">
                        <div class="footer-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="footer-infor">
                                            <div class="footer-logo">
                                                <a href="index.php">
                                                    <img src="e-commerce logo.png" alt="">
                                                </a>
                                            </div>
                                            <div class="footer-address">
                                                <p>Lackland Ave, Piscataway, NJ 08854, USA</p>
                                                <a href="https://g.co/kgs/Z9egrku" class="tf-btn-default fw-6">GET DIRECTION<i class="icon-arrowUpRight"></i></a>
                                            </div>
                                            <ul class="footer-info">
                                                <li>
                                                    <i class="icon-mail"></i>
                                                    <p><a href="##">ecommerce@domain.com</a></p>
                                                </li>
                                                <li>
                                                    <i class="icon-phone"></i>
                                                    <p><a href="##">123-456-7890</a></p>
                                                </li>
                                            </ul>
                                            <ul class="tf-social-icon">
                                                <li><a href="##" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                                <li><a href="##" class="social-twiter"><i class="icon icon-x"></i></a></li>
                                                <li><a href="##" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
                                                <li><a href="##" class="social-tiktok"><i class="icon icon-tiktok"></i></a></li>
                                                <li><a href="##" class="social-amazon"><i class="icon icon-amazon"></i></a></li>
                                                <li><a href="##" class="social-pinterest"><i class="icon icon-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-menu">
                                            <div class="footer-col-block">
                                                <div class="footer-heading text-button footer-heading-mobile">
                                                    Infomation
                                                </div>
                                                <div class="tf-collapse-content">
                                                    <ul class="footer-menu-list">
                                                        <li class="text-caption-1">
                                                            <a href="about-us.php" class="footer-menu_item">About Us</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="checkout.php" class="footer-menu_item">Checkout</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="FAQs.php" class="footer-menu_item">FAQs</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="my-account.php" class="footer-menu_item">My Account</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="order-tracking.php" class="footer-menu_item">Order Tracking</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="login.php" class="footer-menu_item">Login</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="footer-col-block">
                                                <div class="footer-heading text-button footer-heading-mobile">
                                                    Customer Services
                                                </div>
                                                <div class="tf-collapse-content">
                                                    <ul class="footer-menu-list">
                                                        <li class="text-caption-1">
                                                            <a href="wish-list.php" class="footer-menu_item">Wishlist</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="returns-refund.php" class="footer-menu_item">Return & Refund</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="privacy-policy.php" class="footer-menu_item">Privacy Policy</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="term-of-use.php" class="footer-menu_item">Terms & Conditions</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="disclaimer.php" class="footer-menu_item">Disclaimer</a>
                                                        </li>
                                                        <li class="text-caption-1">
                                                            <a href="wish-list.php" class="footer-menu_item">My Wishlist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="footer-col-block">
                                            <div class="footer-heading text-button footer-heading-mobile">
                                                Newletter
                                            </div>
                                            <div class="tf-collapse-content">
                                                <div class="footer-newsletter">
                                                    <p class="text-caption-1">Sign up for our newsletter and get 10% off your first purchase</p>
                                                    <form class="form-newsletter subscribe-form"  action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                                        <div class="subscribe-content">
                                                            <fieldset class="email">
                                                                <input type="email" name="email-form" class="subscribe-email" placeholder="Enter your e-mail" tabindex="0" aria-required="true">
                                                            </fieldset>
                                                            <div class="button-submit">
                                                                <button  class="subscribe-button" type="submit"><i class="icon icon-arrowUpRight"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="subscribe-msg"></div>
                                                    </form>
                                                    <div class="tf-cart-checkbox">
                                                        <div class="tf-checkbox-wrapp">
                                                            <input class="" type="checkbox" id="footer-Form_agree" name="agree_checkbox">
                                                            <div>
                                                                <i class="icon-check"></i>
                                                            </div>
                                                        </div>
                                                        <label class="text-caption-1" for="footer-Form_agree">
                                                            By clicking subcribe, you agree to the <a class="fw-6 link" href="term-of-use.php">Terms of Service</a> and <a class="fw-6 link" href="privacy-policy.php">Privacy Policy</a>.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="footer-bottom-wrap">
                                            <div class="left">
                                                <p class="text-caption-1">©2025 eCommerce. All Rights Reserved.</p>
        
                                            </div>
                                            <div class="tf-payment">
                                                <ul>
                                                    <li>
                                                        <img src="images/payment/img-1.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/payment/img-2.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/payment/img-3.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/payment/img-4.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/payment/img-5.png" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="images/payment/img-6.png" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
        
                <!-- toolbar-bottom -->
                <!--<div class="tf-toolbar-bottom">-->
                <!--    <div class="toolbar-item">-->
                <!--        <a href="shop.php">-->
                <!--            <div class="toolbar-icon">-->
                <!--                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M8.125 3.125H4.375C4.04348 3.125 3.72554 3.2567 3.49112 3.49112C3.2567 3.72554 3.125 4.04348 3.125 4.375V8.125C3.125 8.45652 3.2567 8.77446 3.49112 9.00888C3.72554 9.2433 4.04348 9.375 4.375 9.375H8.125C8.45652 9.375 8.77446 9.2433 9.00888 9.00888C9.2433 8.77446 9.375 8.45652 9.375 8.125V4.375C9.375 4.04348 9.2433 3.72554 9.00888 3.49112C8.77446 3.2567 8.45652 3.125 8.125 3.125ZM8.125 8.125H4.375V4.375H8.125V8.125ZM15.625 3.125H11.875C11.5435 3.125 11.2255 3.2567 10.9911 3.49112C10.7567 3.72554 10.625 4.04348 10.625 4.375V8.125C10.625 8.45652 10.7567 8.77446 10.9911 9.00888C11.2255 9.2433 11.5435 9.375 11.875 9.375H15.625C15.9565 9.375 16.2745 9.2433 16.5089 9.00888C16.7433 8.77446 16.875 8.45652 16.875 8.125V4.375C16.875 4.04348 16.7433 3.72554 16.5089 3.49112C16.2745 3.2567 15.9565 3.125 15.625 3.125ZM15.625 8.125H11.875V4.375H15.625V8.125ZM8.125 10.625H4.375C4.04348 10.625 3.72554 10.7567 3.49112 10.9911C3.2567 11.2255 3.125 11.5435 3.125 11.875V15.625C3.125 15.9565 3.2567 16.2745 3.49112 16.5089C3.72554 16.7433 4.04348 16.875 4.375 16.875H8.125C8.45652 16.875 8.77446 16.7433 9.00888 16.5089C9.2433 16.2745 9.375 15.9565 9.375 15.625V11.875C9.375 11.5435 9.2433 11.2255 9.00888 10.9911C8.77446 10.7567 8.45652 10.625 8.125 10.625ZM8.125 15.625H4.375V11.875H8.125V15.625ZM15.625 10.625H11.875C11.5435 10.625 11.2255 10.7567 10.9911 10.9911C10.7567 11.2255 10.625 11.5435 10.625 11.875V15.625C10.625 15.9565 10.7567 16.2745 10.9911 16.5089C11.2255 16.7433 11.5435 16.875 11.875 16.875H15.625C15.9565 16.875 16.2745 16.7433 16.5089 16.5089C16.7433 16.2745 16.875 15.9565 16.875 15.625V11.875C16.875 11.5435 16.7433 11.2255 16.5089 10.9911C16.2745 10.7567 15.9565 10.625 15.625 10.625ZM15.625 15.625H11.875V11.875H15.625V15.625Z" fill="#4D4E4F"/>-->
                <!--                </svg>    -->
                <!--            </div>-->
                <!--            <div class="toolbar-label">Shop</div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="toolbar-item">-->
                <!--        <a href="#shopCategories" data-bs-toggle="offcanvas" aria-controls="shopCategories">-->
                <!--            <div class="toolbar-icon">-->
                <!--                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M17.5 10C17.5 10.1658 17.4342 10.3247 17.3169 10.4419C17.1997 10.5592 17.0408 10.625 16.875 10.625H3.125C2.95924 10.625 2.80027 10.5592 2.68306 10.4419C2.56585 10.3247 2.5 10.1658 2.5 10C2.5 9.83424 2.56585 9.67527 2.68306 9.55806C2.80027 9.44085 2.95924 9.375 3.125 9.375H16.875C17.0408 9.375 17.1997 9.44085 17.3169 9.55806C17.4342 9.67527 17.5 9.83424 17.5 10ZM3.125 5.625H16.875C17.0408 5.625 17.1997 5.55915 17.3169 5.44194C17.4342 5.32473 17.5 5.16576 17.5 5C17.5 4.83424 17.4342 4.67527 17.3169 4.55806C17.1997 4.44085 17.0408 4.375 16.875 4.375H3.125C2.95924 4.375 2.80027 4.44085 2.68306 4.55806C2.56585 4.67527 2.5 4.83424 2.5 5C2.5 5.16576 2.56585 5.32473 2.68306 5.44194C2.80027 5.55915 2.95924 5.625 3.125 5.625ZM16.875 14.375H3.125C2.95924 14.375 2.80027 14.4408 2.68306 14.5581C2.56585 14.6753 2.5 14.8342 2.5 15C2.5 15.1658 2.56585 15.3247 2.68306 15.4419C2.80027 15.5592 2.95924 15.625 3.125 15.625H16.875C17.0408 15.625 17.1997 15.5592 17.3169 15.4419C17.4342 15.3247 17.5 15.1658 17.5 15C17.5 14.8342 17.4342 14.6753 17.3169 14.5581C17.1997 14.4408 17.0408 14.375 16.875 14.375Z" fill="#4D4E4F"/>-->
                <!--                </svg>  -->
                <!--            </div>-->
                <!--            <div class="toolbar-label">Categories</div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="toolbar-item">-->
                <!--        <a href="#search" data-bs-toggle="modal">-->
                <!--            <div class="toolbar-icon">-->
                <!--                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M17.9419 17.058L14.0302 13.1471C15.1639 11.7859 15.7293 10.04 15.6086 8.27263C15.488 6.50524 14.6906 4.85241 13.3823 3.65797C12.074 2.46353 10.3557 1.81944 8.58462 1.85969C6.81357 1.89994 5.12622 2.62143 3.87358 3.87407C2.62094 5.12671 1.89945 6.81406 1.8592 8.5851C1.81895 10.3561 2.46304 12.0745 3.65748 13.3828C4.85192 14.691 6.50475 15.4884 8.27214 15.6091C10.0395 15.7298 11.7854 15.1644 13.1466 14.0306L17.0575 17.9424C17.1156 18.0004 17.1845 18.0465 17.2604 18.0779C17.3363 18.1094 17.4176 18.1255 17.4997 18.1255C17.5818 18.1255 17.6631 18.1094 17.739 18.0779C17.8149 18.0465 17.8838 18.0004 17.9419 17.9424C17.9999 17.8843 18.046 17.8154 18.0774 17.7395C18.1089 17.6636 18.125 17.5823 18.125 17.5002C18.125 17.4181 18.1089 17.3367 18.0774 17.2609C18.046 17.185 17.9999 17.1161 17.9419 17.058ZM3.12469 8.75018C3.12469 7.63766 3.45459 6.55012 4.07267 5.6251C4.69076 4.70007 5.56926 3.9791 6.5971 3.55336C7.62493 3.12761 8.75593 3.01622 9.84707 3.23326C10.9382 3.4503 11.9405 3.98603 12.7272 4.7727C13.5138 5.55937 14.0496 6.56165 14.2666 7.6528C14.4837 8.74394 14.3723 9.87494 13.9465 10.9028C13.5208 11.9306 12.7998 12.8091 11.8748 13.4272C10.9497 14.0453 9.86221 14.3752 8.74969 14.3752C7.25836 14.3735 5.82858 13.7804 4.77404 12.7258C3.71951 11.6713 3.12634 10.2415 3.12469 8.75018Z" fill="#4D4E4F"/>-->
                <!--                </svg>                            -->
                <!--            </div>-->
                <!--            <div class="toolbar-label">Search</div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="toolbar-item">-->
                <!--        <a href="#wishlist" data-bs-toggle="modal">-->
                <!--            <div class="toolbar-icon">-->
                <!--                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M17.4215 4.45326C16.5724 3.60627 15.4225 3.12997 14.2231 3.1285C13.0238 3.12704 11.8727 3.60054 11.0215 4.44545L9.99965 5.39467L8.97699 4.44232C8.12602 3.59373 6.9728 3.11795 5.77103 3.11963C4.56926 3.12132 3.41738 3.60034 2.56879 4.45131C1.7202 5.30228 1.24441 6.4555 1.2461 7.65727C1.24778 8.85904 1.7268 10.0109 2.57777 10.8595L9.55824 17.9423C9.6164 18.0014 9.68572 18.0483 9.76217 18.0803C9.83862 18.1123 9.92067 18.1288 10.0036 18.1288C10.0864 18.1288 10.1685 18.1123 10.2449 18.0803C10.3214 18.0483 10.3907 18.0014 10.4489 17.9423L17.4215 10.8595C18.2707 10.0098 18.7477 8.85768 18.7477 7.65639C18.7477 6.45509 18.2707 5.30296 17.4215 4.45326ZM16.5348 9.98139L9.99965 16.6095L3.46059 9.97514C2.8452 9.35975 2.49948 8.52511 2.49948 7.65482C2.49948 6.78454 2.8452 5.9499 3.46059 5.33451C4.07597 4.71913 4.91061 4.37341 5.7809 4.37341C6.65118 4.37341 7.48583 4.71913 8.10121 5.33451L8.11684 5.35014L9.57387 6.7056C9.68953 6.81324 9.84166 6.87307 9.99965 6.87307C10.1576 6.87307 10.3098 6.81324 10.4254 6.7056L11.8825 5.35014L11.8981 5.33451C12.5139 4.71954 13.3488 4.37438 14.219 4.37497C15.0893 4.37555 15.9237 4.72184 16.5387 5.33764C17.1537 5.95344 17.4988 6.78831 17.4983 7.6586C17.4977 8.52888 17.1514 9.36329 16.5356 9.97826L16.5348 9.98139Z" fill="#4D4E4F"/>-->
                <!--                </svg>  -->
                                <!-- <div class="toolbar-count">1</div> -->
                <!--            </div>-->
                <!--            <div class="toolbar-label">Wishlist</div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--    <div class="toolbar-item">-->
                <!--        <a href="#shoppingCart" data-bs-toggle="modal">-->
                <!--            <div class="toolbar-icon">-->
                <!--                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                <!--                    <path d="M13.75 8.23389V4.48389C13.75 3.48932 13.3549 2.5355 12.6517 1.83224C11.9484 1.12897 10.9946 0.733887 10 0.733887C9.00544 0.733887 8.05161 1.12897 7.34835 1.83224C6.64509 2.5355 6.25 3.48932 6.25 4.48389V8.23389M3.4375 6.35889H16.5625L17.5 17.6089H2.5L3.4375 6.35889Z" stroke="#4D4E4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>-->
                <!--                </svg>  -->
                <!--            </div>-->
                <!--            <div class="toolbar-label">Cart</div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- /toolbar-bottom -->
                
            </div>
            
            <!-- auto popup  -->
            <div class="modal modalCentered fade auto-popup modal-newleter">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-top">
                            <img class="lazyload" data-src="images/section/newsletter.jpg" src="images/section/newsletter.jpg" alt="images">
                            <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="modal-bottom text-center">
                            <p class="text-btn-uppercase fw-4 font-2">Subscribe To Our Newletter!</p>
                            <h5>Receive 10% OFF your next order, exclusive offers & more!</h5>
                            <div class="sib-form">
                                <div id="sib-form-container" class="sib-form-container">
                                    <div id="error-message" class="sib-form-message-panel">
                                        <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                            <span class="sib-form-message-panel__inner-text">
                                                Your subscription could not be saved. Please try again.
                                            </span>
                                        </div>
                                    </div>
                                    <div id="success-message" class="sib-form-message-panel">
                                        <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                            <span class="sib-form-message-panel__inner-text">
                                                Your subscription has been successful.
                                            </span>
                                        </div>
                                    </div>
                                    <div id="sib-container" class="sib-container--large sib-container--vertical">
                                        <form id="sib-form" method="POST"
                                            action="https://3c02c1a1.sibforms.com/serve/MUIFAOAhSCDRnPhdPWLTpLBkaFR0CvSbJ_okYrjCbXQRLkZZU67Hn2jdn18hTWJuGupI4VUfB4deuJIyP5yRoHWVb9pIrENAMcal9Jtz8q_qN4dpHNMIG454DwSVNVmnLXuePoOCvDqN_Vvs0ga_kzg7ouD63HjCaukRz3LGCQsfnQJBN4-KS2D3DVitqvFsDHSqevjjqLk2xFO4"
                                            data-type="subscription">
                                            <div>
                                                <div class="sib-form-block">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sib-form-block">
                                                    <div class="sib-text-form-block">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sib-input sib-form-block">
                                                    <div class="form__entry entry_block">
                                                        <div class="form__label-row ">
                                                            <label class="entry__label" for="EMAIL">
                                                            </label>
                                                            <div class="entry__field">
                                                                <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off"
                                                                    placeholder="Enter Your Email..." data-required="true" required />
                                                            </div>
                                                        </div>
                                                        <label class="entry__error entry__error--primary"></label>
                                                        <label class="entry__specification">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sib-optin sib-form-block">
                                                    <div class="form__entry entry_mcq">
                                                        <div class="form__label-row ">
                                                            <div class="entry__choice">
                                                                <label>
                                                                    <input type="checkbox" class="input_replaced" value="1" id="OPT_IN"
                                                                        name="OPT_IN" />
                                                                    <span class="checkbox checkbox_tick_positive"></span>
                                                                    <span>
                                                                        <p></p>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <label class="entry__error entry__error--primary">
                                                        </label>
                                                        <label class="entry__specification">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sib-form-block">
                                                    <button
                                                        class="sib-form-block__button sib-form-block__button-with-loader btn-style-2 radius-12 w-100 justify-content-center"
                                                        form="sib-form" type="submit">
                                                        <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                            viewBox="0 0 512 512">
                                                            <path
                                                                d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                                                        </svg>
                                                        <span class="text text-btn-uppercase">SUBSCRIBE</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <input type="text" name="email_address_check" value="" class="input--hidden">
                                            <input type="hidden" name="locale" value="en">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <ul class="tf-social-icon style-default justify-content-center">
                                <li><a href="##" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                <li><a href="##" class="social-twiter"><i class="icon icon-x"></i></a></li>
                                <li><a href="##" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
                                <li><a href="##" class="social-pinterest"><i class="icon icon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /auto popup  -->
            
            <!-- search -->
            <div class="modal fade modal-search" id="search">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Search</h5>
                            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                        </div>
                        <form class="form-search">
                            <fieldset class="text">
                                <input type="text" placeholder="Searching..." class="" name="text" tabindex="0" value="" aria-required="true" required="">
                            </fieldset>
                            <button class="" type="submit">
                                <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </form>
                        <div>
                            <h5 class="mb_16">Feature keywords Today</h5>
                            <ul class="list-tags">
                                <li><a href="#" class="radius-60 link">Dresses</a></li>
                                <li><a href="#" class="radius-60 link">Dresses women</a></li>
                                <li><a href="#" class="radius-60 link">Dresses midi</a></li>
                                <li><a href="#" class="radius-60 link">Dress summer</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="mb_16">Recently viewed products</h6>
                            <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4 loadmore-item" data-display="4" data-count="4">
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-8.jpg" src="images/products/womens/women-8.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-9.jpg" src="images/products/womens/women-9.jpg" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$39.99</span>
                                    </div>
                                </div>
                                <div class="fl-item card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-171.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-172.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                        </a>
                                        
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Faux-leather trousers</a>
                                        <span class="price current-price">$79.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-orange"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-171.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-dark-pink"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-172.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-83.jpg" src="images/products/womens/women-83.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-84.jpg" src="images/products/womens/women-84.jpg" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Belt wrap dress</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$129.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-83.jpg" src="images/products/womens/women-83.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-grey"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-94.jpg" src="images/products/womens/women-94.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-87.jpg" src="images/products/womens/women-87.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-102.jpg" src="images/products/womens/women-102.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-103.jpg" src="images/products/womens/women-103.jpg" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Double-button trench coat</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-2"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-102.jpg" src="images/products/womens/women-102.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-111.jpg" src="images/products/womens/women-111.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-104.jpg" src="images/products/womens/women-104.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-11.jpg" src="images/products/mens/men-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-12.jpg" src="images/products/mens/men-12.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                    </div>
                                </div>
                                <div class="fl-item card-product" >
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-14.jpg" src="images/products/mens/men-14.jpg" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="marquee-product bg-main">
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Polarized sunglasses</a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-12.jpg" src="images/products/mens/men-12.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-7.jpg" src="images/products/mens/men-7.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-8.jpg" src="images/products/mens/men-8.jpg" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="variant-wrap countdown-wrap">
                                            <div class="variant-box">
                                                <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Ramie shirt with pockets </a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$89.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-7.jpg" src="images/products/mens/men-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-11.jpg" src="images/products/mens/men-11.jpg" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-1.jpg" src="images/products/mens/men-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-3.jpg" src="images/products/mens/men-3.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$69.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-1.jpg" src="images/products/mens/men-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-13.jpg" src="images/products/mens/men-13.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-dark-grey-2"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-9.jpg" src="images/products/mens/men-9.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-38.jpg" src="images/products/womens/women-38.jpg" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Buttoned cotton shirt</a>
                                        <span class="price current-price">$89.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-41.jpg" src="images/products/womens/women-41.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-15.jpg" src="images/products/mens/men-15.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-16.jpg" src="images/products/mens/men-16.jpg" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Chest pocket cotton over shirt</a>
                                        <span class="price current-price">$99.25</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-15.jpg" src="images/products/mens/men-15.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Black</span>
                                                <span class="swatch-value bg-main"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-18.jpg" src="images/products/mens/men-18.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Dark Blue</span>
                                                <span class="swatch-value bg-dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/mens/men-17.jpg" src="images/products/mens/men-17.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/womens/women-168.jpg" src="images/products/womens/women-168.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Cotton shopper bag</a>
                                        <span class="price current-price">$199.25</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-167.jpg" src="images/products/womens/women-167.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class="lazyload" data-src="images/products/womens/women-162.jpg" src="images/products/womens/women-162.jpg" alt="image-product">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="fl-item card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-inner.php" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/mens/men-19.jpg" src="images/products/mens/men-19.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/mens/men-20.jpg" src="images/products/mens/men-20.jpg" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-inner.php" class="title link">Chest pocket cotton over shirt</a>
                                        <span class="price current-price">$250.00</span>
                                        
                                    </div>
                                </div>
                                </div>
                        </div>
                        <!-- Load Item -->
                        <div class="wd-load view-more-button text-center">
                            <button class="tf-loading btn-loadmore tf-btn btn-reset"><span class="text text-btn text-btn-uppercase">Load more</span></button>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- /search -->
        
            <!-- mobile menu -->
            <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                <div class="mb-canvas-content">
                    <div class="mb-body">
                        <div class="mb-content-top">
                            <form class="form-search">
                                <fieldset class="text">
                                    <input type="text" placeholder="What are you looking for?" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                                </fieldset>
                                <button class="" type="submit">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.9984 20.9999L16.6484 16.6499" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                
                                </button>
                            </form>
                            <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                                <li class="nav-mb-item active">
                                        <h2 style="font-size: 17px; font-weight:600;"><a href="index.php">Home</a></h2>
                                    </a>
                                </li>
                                <li class="nav-mb-item active">
                                        <h2 style="font-size: 17px; font-weight:600;"><a href="about.php">About</a></h2>
                                    </a>
                                </li>
                                <li class="nav-mb-item">
                                    <a href="#dropdown-menu-two" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                                        <span>Shop</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="dropdown-menu-two" class="collapse">
                                        <ul class="sub-nav-menu">
                                            <li><a href="shop-collection.php" class="sub-nav-link">Product Category</a></li>
                                            <li><a href="product-inner.php" class="sub-nav-link">Product Inner</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-mb-item">
                                    <a href="#dropdown-menu-four" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                                        <span>Blogs</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="dropdown-menu-four" class="collapse">
                                        <ul class="sub-nav-menu">
                                            <li><a href="blog-detail.php" class="sub-nav-link">Blog Detail</a></li>
                                        </ul>
                                    </div>
                                </li>
                                 <li class="nav-mb-item active">
                                <h2 style="font-size: 17px; font-weight:600;"><a href="contact.php">Contact</a></h2>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-other-content">
                            <div class="group-icon">
                                <a href="wish-list.php" class="site-nav-icon">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.8401 4.60987C20.3294 4.09888 19.7229 3.69352 19.0555 3.41696C18.388 3.14039 17.6726 2.99805 16.9501 2.99805C16.2276 2.99805 15.5122 3.14039 14.8448 3.41696C14.1773 3.69352 13.5709 4.09888 13.0601 4.60987L12.0001 5.66987L10.9401 4.60987C9.90843 3.57818 8.50915 2.99858 7.05012 2.99858C5.59109 2.99858 4.19181 3.57818 3.16012 4.60987C2.12843 5.64156 1.54883 7.04084 1.54883 8.49987C1.54883 9.95891 2.12843 11.3582 3.16012 12.3899L4.22012 13.4499L12.0001 21.2299L19.7801 13.4499L20.8401 12.3899C21.3511 11.8791 21.7565 11.2727 22.033 10.6052C22.3096 9.93777 22.4519 9.22236 22.4519 8.49987C22.4519 7.77738 22.3096 7.06198 22.033 6.39452C21.7565 5.72706 21.3511 5.12063 20.8401 4.60987V4.60987Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Wishlist 
                                </a>
                                
                                <a href="login.php" class="site-nav-icon">
                                    <svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>  
                                    Login
                                </a>
        
                            </div>
                            <div class="mb-notice">
                                <a href="contact.php" class="text-need">Need Help?</a>
                            </div>
                            <div class="mb-contact">
                                <p class="text-caption-1">549 Oak St.Crystal Lake, IL 60014</p>
                                <a href="contact.php" class="tf-btn-default text-btn-uppercase">GET DIRECTION<i class="icon-arrowUpRight"></i></a>
                            </div>
                            <ul class="mb-info">
                                <li>
                                    <i class="icon icon-mail"></i>
                                    <p>ecommerce@domain.com</p>
                                </li>
                                <li>
                                    <i class="icon icon-phone"></i>
                                    <p>123-456-7890</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-bottom">
                        <div class="bottom-bar-language">
                            <div class="tf-currencies">
                                <select class="image-select center style-default type-currencies">
                                    <option selected data-thumbnail="images/country/us.svg">USD</option>
                                    <option data-thumbnail="images/country/vn.svg">VND</option>
                                </select>
                            </div>
                            <div class="tf-languages">
                                <select class="image-select center style-default type-languages">
                                    <option>English</option>
                                    <option>Vietnam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!-- /mobile menu -->
        
            <!-- quickView -->
            <!--<div class="modal fullRight fade modal-quick-view" id="quickView">-->
            <!--    <div class="modal-dialog">-->
            <!--        <div class="modal-content">-->
            <!--            <div class="tf-quick-view-image">-->
            <!--                <div class="wrap-quick-view wrapper-scroll-quickview">-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="beige">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="gray">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-4.jpg" src="images/products/womens/women-4.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="quickView-item item-scroll-quickview" data-scroll-quickview="grey">-->
            <!--                        <img class="lazyload" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="">-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="wrap">-->
            <!--                <div class="header">-->
            <!--                    <h5 class="title">Quick View</h5>-->
            <!--                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>-->
            <!--                </div>-->
            <!--                <div class="tf-product-info-list">-->
            <!--                    <div class="tf-product-info-heading">-->
            <!--                        <div class="tf-product-info-name">-->
            <!--                            <div class="text text-btn-uppercase">Clothing</div>-->
            <!--                            <h3 class="name">Stretch Strap Top</h3>-->
            <!--                            <div class="sub">-->
            <!--                                <div class="tf-product-info-rate">-->
            <!--                                    <div class="list-star">-->
            <!--                                        <i class="icon icon-star"></i>-->
            <!--                                        <i class="icon icon-star"></i>-->
            <!--                                        <i class="icon icon-star"></i>-->
            <!--                                        <i class="icon icon-star"></i>-->
            <!--                                        <i class="icon icon-star"></i>-->
            <!--                                    </div>-->
            <!--                                    <div class="text text-caption-1">(134 reviews)</div>-->
            <!--                                </div>-->
            <!--                                <div class="tf-product-info-sold">-->
            <!--                                    <i class="icon icon-lightning"></i>-->
            <!--                                    <div class="text text-caption-1">18 sold in last 32 hours</div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="tf-product-info-desc">-->
            <!--                            <div class="tf-product-info-price">-->
            <!--                                <h5 class="price-on-sale font-2">$79.99</h5>-->
            <!--                                <div class="compare-at-price font-2">$98.99</div>-->
            <!--                                <div class="badges-on-sale text-btn-uppercase">-->
            <!--                                    -25%-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <p>The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>-->
            <!--                            <div class="tf-product-info-liveview">-->
            <!--                                <i class="icon icon-eye"></i>-->
            <!--                                <p class="text-caption-1"><span class="liveview-count">28</span> people are viewing this right now</p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="tf-product-info-choose-option">-->
            <!--                        <div class="variant-picker-item">-->
            <!--                            <div class="variant-picker-label mb_12">-->
            <!--                                Colors:<span class="text-title variant-picker-label-value">Beige</span>-->
            <!--                            </div>-->
            <!--                            <div class="variant-picker-values">-->
            <!--                                <input id="values-beige1" type="radio" name="color2" checked>-->
            <!--                                <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview active" data-slide="0" data-price="79.99" for="values-beige1" data-value="Beige" data-scroll-quickview="beige">-->
            <!--                                    <span class="btn-checkbox bg-color-beige1"></span>-->
            <!--                                    <span class="tooltip">Beige</span>-->
            <!--                                </label>-->
            <!--                                <input id="values-gray1" type="radio" name="color2">-->
            <!--                                <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview" data-slide="1" data-price="79.99" for="values-gray1" data-value="Gray" data-scroll-quickview="gray">-->
            <!--                                    <span class="btn-checkbox bg-color-gray"></span>-->
            <!--                                    <span class="tooltip">Gray</span>-->
            <!--                                </label>-->
            <!--                                <input id="values-grey1" type="radio" name="color2">-->
            <!--                                <label class="hover-tooltip tooltip-bot radius-60 color-btn btn-scroll-quickview" data-slide="2" data-price="89.99" for="values-grey1" data-value="Grey" data-scroll-quickview="grey">-->
            <!--                                    <span class="btn-checkbox bg-color-grey"></span>-->
            <!--                                    <span class="tooltip">Grey</span>-->
            <!--                                </label>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="variant-picker-item">-->
            <!--                            <div class="d-flex justify-content-between mb_12">-->
            <!--                                <div class="variant-picker-label">-->
            <!--                                    Size:<span class="text-title variant-picker-label-value">L</span>-->
            <!--                                </div>-->
            <!--                                <a class="size-guide text-title link show-size-guide">Size Guide</a>-->
            <!--                            </div>-->
            <!--                            <div class="variant-picker-values gap12">-->
            <!--                                <input type="radio" name="size2" id="values-s1">-->
            <!--                                <label class="style-text size-btn" for="values-s1" data-value="S">-->
            <!--                                    <span class="text-title">S</span>-->
            <!--                                </label>-->
            <!--                                <input type="radio" name="size2" id="values-m1">-->
            <!--                                <label class="style-text size-btn" for="values-m1" data-value="M">-->
            <!--                                    <span class="text-title">M</span>-->
            <!--                                </label>-->
            <!--                                <input type="radio" name="size2" id="values-l1" checked>-->
            <!--                                <label class="style-text size-btn" for="values-l1" data-value="L" data-price="89.99">-->
            <!--                                    <span class="text-title">L</span>-->
            <!--                                </label>-->
            <!--                                <input type="radio" name="size2" id="values-xl1">-->
            <!--                                <label class="style-text size-btn" for="values-xl1" data-value="XL" data-price="89.99">-->
            <!--                                    <span class="text-title">XL</span>-->
            <!--                                </label>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="tf-product-info-quantity">-->
            <!--                            <div class="title mb_12">Quantity:</div>-->
            <!--                            <div class="wg-quantity">-->
            <!--                                <span class="btn-quantity btn-decrease">-</span>-->
            <!--                                <input class="quantity-product" type="text" name="number" value="1">-->
            <!--                                <span class="btn-quantity btn-increase">+</span>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div>-->
            <!--                            <div class="tf-product-info-by-btn mb_10">-->
            <!--                                <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price total-price">$79.99</span></a>-->
            <!--                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon hover-tooltip compare btn-icon-action show-compare">-->
            <!--                                    <span class="icon icon-gitDiff"></span>-->
            <!--                                    <span class="tooltip text-caption-2">Compare</span>-->
            <!--                                </a>-->
            <!--                                <a href="javascript:void(0);" class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">-->
            <!--                                    <span class="icon icon-heart"></span>-->
            <!--                                    <span class="tooltip text-caption-2">Wishlist</span>-->
            <!--                                </a>-->
            <!--                            </div>-->
            <!--                            <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>-->
            <!--                        </div>-->
            <!--                    </div>-->
                                    
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!-- /quickView -->
        
            <!-- shoppingCart -->
            <div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="tf-minicart-recommendations">
                            <h6 class="title">You May Also Like</h6>
                            <div class="wrap-recommendations">
                                <div class="list-cart">
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Belt wrap dress</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Double-button coat</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Belted Manteco coat</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-4.jpg" src="images/products/womens/women-4.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Belt wrap dress</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-5.jpg" src="images/products/womens/women-5.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Belt wrap dress</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-cart-item">
                                        <div class="image">
                                            <img class="lazyload" data-src="images/products/womens/women-6.jpg" src="images/products/womens/women-6.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="name">
                                                <a class="link text-line-clamp-1" href="product-inner.php">Belt wrap dress</a>
                                            </div>
                                            <div class="cart-item-bot">
                                                <div class="text-button price">$59.99</div>
                                                <a class="link text-button" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
            <!-- /shoppingCart -->
        
            <!-- wishlist -->
            <div class="modal fullRight fade modal-wishlist" id="wishlist">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="header">
                            <h5 class="title">Wish List</h5>
                            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="wrap">
                            <div class="tf-mini-cart-wrap">
                                <div class="tf-mini-cart-main">
                                    <div class="tf-mini-cart-sroll">
                                        <div class="tf-mini-cart-items">
                                            <div class="tf-mini-cart-item file-delete">
                                                <div class="tf-mini-cart-image">
                                                    <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="">
                                                </div>
                                                <div class="tf-mini-cart-info flex-grow-1">
                                                    <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Contrasting sheepskin</a></div>
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-secondary-2">XL/Blue</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-mini-cart-item file-delete">
                                                <div class="tf-mini-cart-image">
                                                    <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">
                                                </div>
                                                <div class="tf-mini-cart-info flex-grow-1">
                                                    <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Suede leggings</a></div>
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-secondary-2">XL/Blue</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-mini-cart-item file-delete">
                                                <div class="tf-mini-cart-image">
                                                    <img class="lazyload" data-src="images/products/womens/women-2.jpg" src="images/products/womens/women-2.jpg" alt="">
                                                </div>
                                                <div class="tf-mini-cart-info flex-grow-1">
                                                    <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Faux-leather trousers</a></div>
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-secondary-2">XL/Blue</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-mini-cart-item file-delete">
                                                <div class="tf-mini-cart-image">
                                                    <img class="lazyload" data-src="images/products/womens/women-3.jpg" src="images/products/womens/women-3.jpg" alt="">
                                                </div>
                                                <div class="tf-mini-cart-info flex-grow-1">
                                                    <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Biker-style leggings</a></div>
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-secondary-2">XL/Blue</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tf-mini-cart-item file-delete">
                                                <div class="tf-mini-cart-image">
                                                    <img class="lazyload" data-src="images/products/womens/women-4.jpg" src="images/products/womens/women-4.jpg" alt="">
                                                </div>
                                                <div class="tf-mini-cart-info flex-grow-1">
                                                    <div class="mb_12 d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-title"><a href="product-inner.php" class="link text-line-clamp-1">Jacquard fluid trousers</a></div>
                                                        <div class="text-button tf-btn-remove remove">Remove</div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-12">
                                                        <div class="text-secondary-2">XL/Blue</div>
                                                        <div class="text-button">1 X $60.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-bottom">
                                    <a href="wish-list.php" class="btn-style-2 w-100 radius-4 view-all-wishlist"><span class="text-btn-uppercase">View All Wish List</span></a>
                                    <a href="shop.php" class="text-btn-uppercase">Or continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wishlist -->
        
            <!-- size-guide -->
            <div class="modal fade modal-size-guide" id="size-guide">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content widget-tabs style-2">
                        <div class="header">
                            <ul class="widget-menu-tab">
                                <li class="item-title active">
                                    <span class="inner text-button">Size </span>
                                </li>
                                <li class="item-title">
                                    <span class="inner text-button">Size Guide</span>
                                </li>
                            </ul>
                            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                        </div>
                        <div class="wrap">
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="tab-size">
                                        <div>
                                            <div class="widget-size mb_16">
                                                <div class="box-title-size">
                                                    <div class="title-size">Height</div>
                                                    <div class="number-size">
                                                        <span class="max-size">100</span>
                                                        <span class="text-caption-1 text-secondary">Cm</span>
                                                    </div>
                                                </div>
                                                <div class="range-input">
                                                    <div class="tow-bar-block">
                                                        <div class="progress-size" style="width: 50%;"></div>
                                                    </div>
                                                    <input type="range" min="0" max="200" value="100" class="range-max" />
                                                </div>
                                            </div>
                                            <div class="widget-size">
                                                <div class="box-title-size">
                                                    <div class="title-size">Weight</div>
                                                    <div class="number-size">
                                                        <span class="max-size">50</span>
                                                        <span class="text-caption-1 text-secondary">Kg</span>
                                                    </div>
                                                </div>
                                                <div class="range-input">
                                                    <div class="tow-bar-block">
                                                        <div class="progress-size" style="width: 50%;"></div>
                                                    </div>
                                                    <input type="range" min="0" max="100" value="50" class="range-max" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="size-button-wrap choose-option-list">
                                            <div class="size-button-item choose-option-item">
                                                <h5>thin</h5>
                                            </div>
                                            <div class="size-button-item choose-option-item select-option">
                                                <h5>Normal</h5>
                                            </div>
                                            <div class="size-button-item choose-option-item">
                                                <h5>plump</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="suggests-title">eCommerce suggests for you:</h6>
                                            <div class="suggests-list">
                                                <a href="#" class="suggests-item link text-button">L - shirt</a>
                                                <a href="#" class="suggests-item link text-button">XL - Pant</a>
                                                <a href="#" class="suggests-item link text-button">31 - Jeans</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <table class="tab-sizeguide-table">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>US</th>
                                                <th>Bust</th>
                                                <th>Waist</th>
                                                <th>Low Hip</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>XS</td>
                                                <td>2</td>
                                                <td>32</td>
                                                <td>24 - 25</td>
                                                <td>33 - 34</td>
                                            </tr>
                                            <tr>
                                                <td>S</td>
                                                <td>4</td>
                                                <td>26 - 27</td>
                                                <td>34 - 35</td>
                                                <td>35 - 26</td>
                                            </tr>
                                            <tr>
                                                <td>M</td>
                                                <td>6</td>
                                                <td>28 - 29</td>
                                                <td>36 - 37</td>
                                                <td>38 - 40</td>
                                            </tr>
                                            <tr>
                                                <td>L</td>
                                                <td>8</td>
                                                <td>30 - 31</td>
                                                <td>38 - 29</td>
                                                <td>42 - 44</td>
                                            </tr>
                                            <tr>
                                                <td>XL</td>
                                                <td>10</td>
                                                <td>32 - 33</td>
                                                <td>40 - 41</td>
                                                <td>45 - 47</td>
                                            </tr>
                                            <tr>
                                                <td>XXL</td>
                                                <td>12</td>
                                                <td>34 - 35</td>
                                                <td>42 - 43</td>
                                                <td>48 - 50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
        
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /size-guide -->
        
            <!-- compare -->
            <div class="offcanvas offcanvas-bottom offcanvas-compare" id="compare">
                <div class="offcanvas-content">
                    <div class="header">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                    <div class="wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tf-compare-list list-file-delete">
                                        <div class="tf-compare-head">
                                            <h5 class="title">Compare <br> Products</h5>
                                        </div>
                                        <div class="tf-compare-wrap">
                                            <div class="tf-compare-item file-delete">
                                                <span class="btns-repeat">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5628_27)">
                                                        <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_5628_27">
                                                        <rect width="16" height="16" fill="white" transform="translate(0 0.66626)"/>
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="icon-close remove"></span>
                                                <a href="product-inner.php" class="image">
                                                    <img class="lazyload" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <div class="text-title">
                                                        <a class="link text-line-clamp-2" href="product-inner.php">V-neck cotton T-shirt</a>
                                                    </div>
                                                    <div class="text-button">$59.99</div>
                                                </div>
                                            </div>
                                            <div class="tf-compare-item file-delete">
                                                <span class="btns-repeat">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5628_2702)">
                                                        <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_5628_2702">
                                                        <rect width="16" height="16" fill="white" transform="translate(0 0.66626)"/>
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="icon-close remove"></span>
                                                <a href="product-inner.php" class="image">
                                                    <img class="lazyload" data-src="images/products/womens/women-29.jpg" src="images/products/womens/women-29.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <div class="text-title">
                                                        <a class="link text-line-clamp-2" href="product-inner.php">Ramie shirt with pockets </a>
                                                    </div>
                                                    <div class="text-button">$72.00</div>
                                                </div>
                                            </div>
                                            <div class="tf-compare-item file-delete">
                                                <span class="btns-repeat">
                                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5628_27028)">
                                                        <path d="M11.334 1.33301L14.0007 3.99967L11.334 6.66634" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M2 7.99951V6.66618C2 5.95893 2.28095 5.28066 2.78105 4.78056C3.28115 4.28046 3.95942 3.99951 4.66667 3.99951H14" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.66667 15.9996L2 13.3329L4.66667 10.6663" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M14 9.33301V10.6663C14 11.3736 13.719 12.0519 13.219 12.552C12.7189 13.0521 12.0406 13.333 11.3333 13.333H2" stroke="#181818" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_5628_27028">
                                                        <rect width="16" height="16" fill="white" transform="translate(0 0.66626)"/>
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span class="icon-close remove"></span>
                                                <a href="product-inner.php" class="image">
                                                    <img class="lazyload" data-src="images/products/womens/women-1.jpg" src="images/products/womens/women-1.jpg" alt="">
                                                </a>
                                                <div class="content">
                                                    <div class="text-title">
                                                        <a class="link text-line-clamp-2" href="product-inner.php">Ribbed cotton-blend top</a>
                                                    </div>
                                                    <div class="text-button">$65.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-compare-buttons">
                                            <div class="tf-compare-buttons-wrap">
                                                <a href="compare-products.php" class="tf-btn w-100 btn-fill radius-4"><span class="text text-btn-uppercase">Compare Products</span></a>
                                                <div class="tf-compapre-button-clear-all clear-file-delete tf-btn w-100 btn-white radius-4 has-border">
                                                    <span class="text text-btn-uppercase">Clear All Products</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /compare -->
        
            <!-- quickAdd -->
            <div class="modal fade modal-quick-add" id="quickAdd">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="header">
                            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                        </div>
                        <div>
                            <div class="tf-product-info-list">
                                <div class="tf-product-info-item">
                                    <div class="image">
                                        <img src="images/products/womens/women-1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="product-inner.php">Ribbed Tank Top</a>
                                        <div class="tf-product-info-price">
                                            <h5 class="price-on-sale font-2">$79.99</h5>
                                            <div class="compare-at-price font-2">$98.99</div>
                                            <div class="badges-on-sale text-btn-uppercase">
                                                -25%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-product-info-choose-option">
                                    <div class="variant-picker-item">
                                        <div class="variant-picker-label mb_12">
                                            Colors:<span class="text-title variant-picker-label-value">Beige</span>
                                        </div>
                                        <div class="variant-picker-values type-click">
                                            <input id="values-beige2" type="radio" name="color3" checked>
                                            <label class="hover-tooltip tooltip-bot radius-60" for="values-beige2" data-value="Beige">
                                                <span class="btn-checkbox bg-color-beige1"></span>
                                                <span class="tooltip">Beige</span>
                                            </label>
                                            <input id="values-gray2" type="radio" name="color3">
                                            <label class="hover-tooltip tooltip-bot radius-60" for="values-gray2" data-value="Gray">
                                                <span class="btn-checkbox bg-color-gray"></span>
                                                <span class="tooltip">Gray</span>
                                            </label>
                                            <input id="values-grey3" type="radio" name="color3">
                                            <label class="hover-tooltip tooltip-bot radius-60" for="values-grey3" data-value="Grey">
                                                <span class="btn-checkbox bg-color-grey"></span>
                                                <span class="tooltip">Grey</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="variant-picker-item">
                                        <div class="variant-picker-label">
                                            Size:<span class="text-title variant-picker-label-value">L</span>
                                        </div>
                                        <div class="variant-picker-values gap12">
                                            <input type="radio" name="size3" id="values-s2">
                                            <label class="style-text size-btn" for="values-s2" data-value="S">
                                                <span class="text-title">S</span>
                                            </label>
                                            <input type="radio" name="size3" id="values-m2">
                                            <label class="style-text size-btn" for="values-m2" data-value="M">
                                                <span class="text-title">M</span>
                                            </label>
                                            <input type="radio" name="size3" id="values-l2" checked>
                                            <label class="style-text size-btn" for="values-l2" data-value="L">
                                                <span class="text-title">L</span>
                                            </label>
                                            <input type="radio" name="size3" id="values-xl2">
                                            <label class="style-text size-btn" for="values-xl2" data-value="XL">
                                                <span class="text-title">XL</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-quantity">
                                        <div class="title mb_12">Quantity:</div>
                                        <div class="wg-quantity">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input class="quantity-product" type="text" name="number" value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tf-product-info-by-btn mb_10">
                                            <a class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 show-shopping-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price total-price">$79.99</span></a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon hover-tooltip compare btn-icon-action show-compare">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip text-caption-2">Compare</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip text-caption-2">Wishlist</span>
                                            </a>
                                        </div>
                                        <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /quickAdd -->
        
            <!-- Javascript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery-validate.js"></script>
            <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
            <script type="text/javascript" src="js/carousel.js"></script>
            <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
            <script type="text/javascript" src="js/lazysize.min.js"></script>
            <script type="text/javascript" src="js/count-down.js"></script>
            <script type="text/javascript" src="js/wow.min.js"></script>
            <script type="text/javascript" src="js/multiple-modal.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        
            <script src="js/sibforms.js" defer></script>
        
            <script>
                window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
                window.LOCALE = 'en';
                window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
        
                window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";
        
                window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";
        
                window.translation = {
                    common: {
                        selectedList: '{quantity} list selected',
                        selectedLists: '{quantity} lists selected'
                    }
                };
        
                var AUTOHIDE = Boolean(0);
            </script>
        </body>
        
        </html>
