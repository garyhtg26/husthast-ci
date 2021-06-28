
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Husthast</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('')?>assets/images/lg.ico" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?= base_url('')?>assets/images/logohust.jpeg" type="image/jpeg" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/slick-theme.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/style.css" />
    <link rel="stylesheet" href="<?= base_url('')?>assets/css/royal-preload.css" />
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <header id="site-header" class="site-header header-style-2 header-fullwidth">
           
            <!-- Main Header start -->
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <!-- logo start -->
                                <div class="octf-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="">
                                            <img class="logo-static" src="<?= base_url('')?>assets/images/hust.png" alt="Onum">
                                            <img class="logo-scroll" src="<?= base_url('')?>assets/images/hust.png" alt="Onum">
                                        </a>
                                    </div>
                                </div>
                                <!-- logo start -->

                                <!-- nav start -->
                                <div class="octf-col">
                                    <nav id="site-navigation" class="main-navigation">          
                                        <ul id="primary-menu" class="menu">
                                            <li class=""><a href="<?= base_url('')?>" >Home</a>
                                           
                                            </li>
                                          
                                            </li>
                                            <li class="menu-item-has-children <?php if($this->uri->segment(1) == 'service') { echo 'current-menu-item current-menu-ancestor'; } ?>"><a href="<?= base_url('portofolio')?>"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Advertising</a></li>
                                                    <li><a href="#">Digital Marketing </a></li>
                                                    <li><a href="#">Social Media Management </a></li>
                                                    <li><a href="#">Event Organizer </a></li>
                                                    <li><a href="#">Multimedia </a></li>
                                                    <li><a href="#">Merchandising </a></li>
                                                    <li><a href="#">Procurement</a></li>
                                                </ul>
                                            </li>
                                            <!--
                                            <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog List</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-single.html">Blog Single</a></li>
                                                </ul>
                                            </li>
-->
                                            
                                            <li class="<?php if($this->uri->segment(1) == 'portofolio') { echo 'current-menu-item current-menu-ancestor'; } ?>"><a href="<?= base_url('portofolio')?>">Portfolio</a>
                                             
                                            </li>
                                            <li class="<?php if($this->uri->segment(1) == 'about') { echo 'current-menu-item current-menu-ancestor'; } ?>"><a href="<?= base_url('about')?>">About Us</a>
                                               
                                               </li>
                                           
                                            <li class="<?php if($this->uri->segment(1) == 'contact') { echo 'current-menu-item current-menu-ancestor'; } ?>"><a href="<?= base_url('contact')?>">Contacts Us</a>
                                               
                                            </li>
                                        </ul>                               
                                    </nav><!-- #site-navigation -->
                                </div>

                                <div class="octf-col text-right">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta">
                                        <div class="octf-header-module cart-btn-hover">
                                            <div class="h-cart-btn octf-cta-icons">
                                               
                                            </div>  
                                            <div class="site-header-cart">
                                                <div class="widget woocommerce widget_shopping_cart">
                                                    <div class="widget_shopping_cart_content">
                                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                                    </div>
                                                </div>                                            
                                            </div>  
                                        </div>
                                        <div class="octf-header-module">
                                            <div class="toggle_search octf-cta-icons">
                                                <i class="flaticon-search"></i>
                                            </div>
                                            <!-- Form Search on Header -->
                                            <div class="h-search-form-field">
                                                <div class="h-search-form-inner">
                                                    <form role="search" method="get" id="search-form" class="search-form" action="">
                                                        <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                                                        <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                                                    </form>
                                                </div>                                  
                                            </div>
                                        </div>
                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn octf-btn-third" href="https://api.whatsapp.com/send?phone=6282110905630&text=HALO%20GIGABYTE%20">Order Now</a>
                                            </div>
                                        </div>
                                    </div>                              
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header mobile -->
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">

                        <!-- logo mobile start -->
                        <div class="mobile_logo">
                            <a href="http://gigabytestudio.id"><img src=" <?= base_url('')?>assets/images/hust.png" alt="Onum"></a>
                        </div>
                        <!-- logo mobile end -->


                        <div id="mmenu_toggle">
                            <button></button>
                        </div>

                    </div>

                    <!-- nav mobile start -->
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <li class=""><a href="http://gigabytestudio.id" >Home</a>
                             
                                </li>
                              
                                </li>
                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
               
                                                    <li><a href="webdev">Web Development</a></li>
                                                    <li><a href="digitalmarketing">Digital Marketing</a></li>
                                                    <li><a href="smm">Social Media Management</a></li>
                                                    <li><a href="erp">Enterprise Resource Planning</a></li>
                                    </ul>
                                </li>
                                
                                <li class=""><a href="portfolio">Portfolio</a>
                              
                                </li>
                                <li class=""><a href="about">About Us</a>
                                 
                                </li>
                             
                                <li class=""><a href="contact">Contacts Us</a>
                                 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- nav mobile end -->
                </div>
            </div>
        </header>