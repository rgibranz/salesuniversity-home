<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= base_url() ?>assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/styles/responsive.css">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="<?= base_url() ?>assets/images/phone.png" alt=""></div>+38 068 005 3570
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon"><img src="<?= base_url() ?>assets/images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <li>
                                            <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">Italian</a></li>
                                                <li><a href="#">Spanish</a></li>
                                                <li><a href="#">Japanese</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="#">EUR Euro</a></li>
                                                <li><a href="#">GBP British Pound</a></li>
                                                <li><a href="#">JPY Japanese Yen</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="top_bar_user">
                                    <div class="user_icon"><img src="<?= base_url() ?>assets/images/user.svg" alt=""></div>
                                    <div><a href="#">Register</a></div>
                                    <div><a href="#">Sign in</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="#">OneTech</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?= base_url() ?>assets/images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                    <div class="wishlist_icon"><img src="<?= base_url() ?>assets/images/heart.png" alt=""></div>
                                    <div class="wishlist_content">
                                        <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                        <div class="wishlist_count">115</div>
                                    </div>
                                </div>

                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="<?= base_url() ?>assets/images/cart.png" alt="">
                                            <div class="cart_count"><span>10</span></div>
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="#">Cart</a></div>
                                            <div class="cart_price">$85</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->

                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text">categories</div>
                                    </div>

                                    <ul class="cat_menu">
                                        <li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                        <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                                        <li class="hassubs">
                                            <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
                                            <ul>
                                                <li class="hassubs">
                                                    <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                    <ul>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                                        <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
                                        <li class="hassubs">
                                            <a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li>
                                                    <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                    <ul>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="hassubs">
                                            <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                                <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                        <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="<?= base_url() ?>assets/images/phone_white.png" alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="<?= base_url() ?>assets/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Banner -->

        <div class="banner">
            <div class="banner_background" style="background-image:url(<?= base_url() ?>assets/images/banner_background.jpg)"></div>
            <div class="container fill_height">
                <div class="row fill_height">
                    <div class="banner_product_image"><img src="<?= base_url() ?>assets/images/banner_product.png" alt=""></div>
                    <div class="col-lg-5 offset-lg-4 fill_height">
                        <div class="banner_content">
                            <h1 class="banner_text">new era of smartphones</h1>
                            <div class="banner_price"><span>$530</span>$460</div>
                            <div class="banner_product_name">Apple Iphone 6s</div>
                            <div class="button banner_button"><a href="#">Shop Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Characteristics -->

        <div class="characteristics">
            <div class="container">
                <div class="row">

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="<?= base_url() ?>assets/images/char_1.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="<?= base_url() ?>assets/images/char_2.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="<?= base_url() ?>assets/images/char_3.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>

                    <!-- Char. Item -->
                    <div class="col-lg-3 col-md-6 char_col">

                        <div class="char_item d-flex flex-row align-items-center justify-content-start">
                            <div class="char_icon"><img src="<?= base_url() ?>assets/images/char_4.png" alt=""></div>
                            <div class="char_content">
                                <div class="char_title">Free Delivery</div>
                                <div class="char_subtitle">from $50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deals of the week -->

        <div class="deals_featured">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Deals -->

                        <div class="deals">
                            <div class="deals_title">Deals of the Week</div>
                            <div class="deals_slider_container">

                                <!-- Deals Slider -->
                                <div class="owl-carousel owl-theme deals_slider">

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="<?= base_url() ?>assets/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Headphones</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="<?= base_url() ?>assets/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Headphones</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="<?= base_url() ?>assets/images/deals.png" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">Headphones</a></div>
                                                <div class="deals_item_price_a ml-auto">$300</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">Beoplay H7</div>
                                                <div class="deals_item_price ml-auto">$225</div>
                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available: <span>6</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="deals_slider_nav_container">
                                <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                                <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                            </div>
                        </div>

                        <!-- Featured -->
                        <div class="featured">
                            <div class="tabbed_container">
                                <div class="tabs">
                                    <ul class="clearfix">
                                        <li class="active">Featured</li>
                                        <li>On Sale</li>
                                        <li>Best Rated</li>
                                    </ul>
                                    <div class="tabs_line"><span></span></div>
                                </div>

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                                <!-- Product Panel -->

                                <div class="product_panel panel">
                                    <div class="featured_slider slider">

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Apple iPod shuffle</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button active">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Sony MDRZX310W</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price discount">$225<span>$300</span></div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">LUNA Smartphone</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Canon STM Kit...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Samsung J330F...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Lenovo IdeaPad</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Digitus EDNET...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_1.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_2.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_3.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_4.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_5.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_6.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_7.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$379</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Slider Item -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/featured_8.png" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">$225</div>
                                                    <div class="product_name">
                                                        <div><a href="product.html">Huawei MediaPad...</a></div>
                                                    </div>
                                                    <div class="product_extras">
                                                        <div class="product_color">
                                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                                            <input type="radio" name="product_color" style="background:#000000">
                                                            <input type="radio" name="product_color" style="background:#999999">
                                                        </div>
                                                        <button class="product_cart_button">Add to Cart</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount"></li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Categories -->

        <div class="popular_categories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="popular_categories_content">
                            <div class="popular_categories_title">Popular Categories</div>
                            <div class="popular_categories_slider_nav">
                                <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                            <div class="popular_categories_link"><a href="#">full catalog</a></div>
                        </div>
                    </div>

                    <!-- Popular Categories Slider -->

                    <div class="col-lg-9">
                        <div class="popular_categories_slider_container">
                            <div class="owl-carousel owl-theme popular_categories_slider">

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="<?= base_url() ?>assets/images/popular_1.png" alt=""></div>
                                        <div class="popular_category_text">Smartphones & Tablets</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="<?= base_url() ?>assets/images/popular_2.png" alt=""></div>
                                        <div class="popular_category_text">Computers & Laptops</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="<?= base_url() ?>assets/images/popular_3.png" alt=""></div>
                                        <div class="popular_category_text">Gadgets</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="<?= base_url() ?>assets/images/popular_4.png" alt=""></div>
                                        <div class="popular_category_text">Video Games & Consoles</div>
                                    </div>
                                </div>

                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img src="<?= base_url() ?>assets/images/popular_5.png" alt=""></div>
                                        <div class="popular_category_text">Accessories</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner -->

        <div class="banner_2">
            <div class="banner_2_background" style="background-image:url(<?= base_url() ?>assets/images/banner_2_background.jpg)"></div>
            <div class="banner_2_container">
                <div class="banner_2_dots"></div>
                <!-- Banner 2 Slider -->

                <div class="owl-carousel owl-theme banner_2_slider">

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Laptops</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                            <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Explore</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="<?= base_url() ?>assets/images/banner_2_product.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Laptops</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                            <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Explore</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="<?= base_url() ?>assets/images/banner_2_product.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner 2 Slider Item -->
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">Laptops</div>
                                            <div class="banner_2_title">MacBook Air 13</div>
                                            <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                            <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a href="#">Explore</a></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="<?= base_url() ?>assets/images/banner_2_product.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Hot New Arrivals -->

        <div class="new_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabbed_container">
                            <div class="tabs clearfix tabs-right">
                                <div class="new_arrivals_title">Hot New Arrivals</div>
                                <ul class="clearfix">
                                    <li class="active">Featured</li>
                                    <li>Audio & Video</li>
                                    <li>Laptops & Computers</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9" style="z-index:1;">

                                    <!-- Product Panel -->
                                    <div class="product_panel panel active">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Astro M2 Black</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Transcend T.Sonic</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Xiaomi Band 2...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Rapoo T8 White</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Philips BT6900A</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Nokia 3310(2017)...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Rapoo 7100p Gray</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Canon EF</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Gembird SPK-103</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Canon IXUS 175...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                    <!-- Product Panel -->
                                    <div class="product_panel panel">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                    <!-- Product Panel -->
                                    <div class="product_panel panel">
                                        <div class="arrivals_slider slider">

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button active">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount">-25%</li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_1.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_2.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_3.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_4.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_5.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_6.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_7.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$379</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Slider Item -->
                                            <div class="arrivals_slider_item">
                                                <div class="border_active"></div>
                                                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?= base_url() ?>assets/images/new_8.jpg" alt=""></div>
                                                    <div class="product_content">
                                                        <div class="product_price">$225</div>
                                                        <div class="product_name">
                                                            <div><a href="product.html">Huawei MediaPad...</a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                <input type="radio" name="product_color" style="background:#000000">
                                                                <input type="radio" name="product_color" style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button">Add to Cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_discount"></li>
                                                        <li class="product_mark product_new">new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="arrivals_slider_dots_cover"></div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="arrivals_single clearfix">
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <div class="arrivals_single_image"><img src="<?= base_url() ?>assets/images/new_single.png" alt=""></div>
                                            <div class="arrivals_single_content">
                                                <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                                                <div class="arrivals_single_name_container clearfix">
                                                    <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                                                    <div class="arrivals_single_price text-right">$379</div>
                                                </div>
                                                <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
                                            </div>
                                            <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
                                            <ul class="arrivals_single_marks product_marks">
                                                <li class="arrivals_single_mark product_mark product_new">new</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kelass Online -->

        <div class="best_sellers">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabbed_container">
                            <div class="tabs clearfix tabs-right">
                                <div class="new_arrivals_title">Kelas Online</div>
                                <ul class="clearfix">
                                    <li class="active">Semua Kelas</li>
                                    <li>B2B B2C</li>
                                    <li>Sales Mindstet</li>
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <div class="bestsellers_panel panel active">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                <?php foreach($all_product as $data):?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if($data->sale_price != '' ?? null):?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price?><span>Rp.<?= $data->regular_price?></span></div>
                                                <?php else:?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price?></div>
                                                <?php endif?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>

                            <div class="bestsellers_panel panel">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                <?php foreach($b2b as $data):?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if($data->sale_price != '' ?? null):?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price?><span>Rp.<?= $data->regular_price?></span></div>
                                                <?php else:?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price?></div>
                                                <?php endif?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>


                                </div>
                            </div>

                            <div class="bestsellers_panel panel">

                                <!-- Best Sellers Slider -->

                                <div class="bestsellers_slider slider">

                                <?php foreach($sales_mindset as $data):?>
                                    <!-- Best Sellers Item -->
                                    <div class="bestsellers_item discount">
                                        <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="<?= $data->images[0]->src?>" alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#"><?= $data->categories[0]->name?></a></div>
                                                <div class="bestsellers_name"><a href="product.html"><?= $data->name?></a></div>
                                                <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <?php if($data->sale_price != '' ?? null):?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price?><span>Rp.<?= $data->regular_price?></span></div>
                                                <?php else:?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price?></div>
                                                <?php endif?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Adverts -->

        <div class="adverts">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_title"><a href="#">Trends 2018</a></div>
                                <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="<?= base_url() ?>assets/images/adv_1.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_subtitle">Trends 2018</div>
                                <div class="advert_title_2"><a href="#">Sale -45%</a></div>
                                <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="<?= base_url() ?>assets/images/adv_2.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->

                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_title"><a href="#">Trends 2018</a></div>
                                <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="<?= base_url() ?>assets/images/adv_3.png" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Best Seller -->

        <div class="trends">

            <div class="container">
                <div class="row bg-info py-4 px-4" style="border-radius:25px">

                    <!-- Trends Content -->
                    <div class="col-lg-3">
                        <div class="trends_container">
                            <h2 class="trends_title">Best Seller</h2>
                            <div class="trends_text">
                                <p class="text-white">Produk Terlaris Tahun Ini</p>
                            </div>
                            <div class="trends_slider_nav">
                                <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                                <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- Trends Slider -->
                    <div class="col-lg-9">
                        <div class="trends_slider_container">

                            <!-- Trends Slider -->

                            <div class="owl-carousel owl-theme trends_slider">

                            <?php foreach($best_seller as $data): ?>
                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item">
                                        <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?= $data->images[0]->src?>" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#"><?= $data->categories[0]->name?></a></div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="product.html"><?= $data->name?></a></div><br>
                                                <?php if($data->sale_price != '' ?? null):?>
                                                    <div class="bestsellers_price discount">Rp. <?= $data->sale_price?><span>Rp.<?= $data->regular_price?></span></div>
                                                <?php else:?>
                                                    <div class="bestsellers_price">Rp.<?= $data->regular_price?></div>
                                                <?php endif?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#">OneTech</a></div>
                            </div>
                            <div class="footer_title">Got Question? Call Us 24/7</div>
                            <div class="footer_phone">+38 068 005 3570</div>
                            <div class="footer_contact_text">
                                <p>17 Princess Road, London</p>
                                <p>Grester London NW18JR, UK</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 offset-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Find it Fast</div>
                            <ul class="footer_list">
                                <li><a href="#">Computers & Laptops</a></li>
                                <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Smartphones & Tablets</a></li>
                                <li><a href="#">TV & Audio</a></li>
                            </ul>
                            <div class="footer_subtitle">Gadgets</div>
                            <ul class="footer_list">
                                <li><a href="#">Car Electronics</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <ul class="footer_list footer_list_2">
                                <li><a href="#">Video Games & Consoles</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Hardware</a></li>
                                <li><a href="#">Computers & Laptops</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Customer Care</div>
                            <ul class="footer_list">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Customer Services</a></li>
                                <li><a href="#">Returns / Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Product Support</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_1.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_3.png" alt=""></a></li>
                                    <li><a href="#"><img src="<?= base_url() ?>assets/images/logos_4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/styles/bootstrap4/popper.js"></script>
    <script src="<?= base_url() ?>assets/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/plugins/slick-1.8.0/slick.js"></script>
    <script src="<?= base_url() ?>assets/plugins/easing/easing.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>