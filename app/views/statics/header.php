<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/bootstrap.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('style.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/dark.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/font-icons.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/animate.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/magnific-popup.css') ?>" type="text/css" />
    <link
        href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= public_url('css/components/datepicker.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/components/timepicker.css') ?>" type="text/css" />
    <link rel="stylesheet" href="<?= public_url('css/components/daterangepicker.css') ?>" type="text/css" />

    <link rel="stylesheet" href="<?= public_url('css/custom.css') ?>" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Event - Single | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo"></div>

                    <div class="header-misc">



                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a style="cursor:pointer" id="top-cart-trigger"><i class="<?= session('user') ? "icon-line2-logout" : "icon-line2-login" ?>"></i></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4><a href="<?= session('user') ? site_url('logout') : site_url('login') ?>"><?= session('user') ? "Çıkış Yap" : "Giriş Yap" ?></a></h4>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                    </div>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu">

                        <ul class="menu-container">
                            <li class="menu-item">
                                <a class="menu-link" href="<?= site_url('index') ?>"><div>Home</div></a>
                            </li>

                        </ul>

                    </nav><!-- #primary-menu end -->


                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->
