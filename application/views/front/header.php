<!doctype html>
<html class="no-js" lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home portfolio || wright</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/icons/favicon.ico">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <?=front_css('bootstrap.min.css')?>
    <!-- This core.css file contents all plugings css file. -->
    <?=front_css('plugins.css')?>
    <!-- Theme shortcodes/elements style -->
    <?=front_css('shortcode.css')?>
    <!-- Theme main style -->
    <?=front_css('style.css')?>
    <!-- Responsive css -->
    <?=front_css('responsive.css')?>
    <!-- User style -->
    <?=front_css('custom.css')?>


    <!-- Modernizr JS -->
    <?=front_js('vendor/modernizr-2.8.3.min.js')?>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper home-portfolio">

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="phone-mail-area">
                                <div class="contact-number text-white f-left">
                                    <i class="icon-call-in"></i>
                                    (021) 123 456 789
                                </div>
                                <div class="contact-email text-white f-left hidden-xs">
                                    <i class="fa fa-envelope-o"></i>
                                    contact@pthakari.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-4 col">
                                <div class="logo ptb-20"><a href="index.html"> <img src="<?=base_url()?>frontend/assets/images/logo/logo.png" alt="main logo"></a></div>
                            </div>
                            <div class="col-lg-9 col-md-8 col">
                                <nav id="primary-menu">
                                    <ul class="main-menu menu-eff text-right">
                                        <li><a class="active" href="<?=base_url()?>">Home</a></li>
                                        <li class="mega-parent"><a href="<?=base_url('Product')?>">Product</a></li>
                                        <li class="mega-parent"><a href="<?=base_url('About')?>">About</a></li>
                                        <li class="mega-parent"><a href="<?=base_url('Contact')?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area fix d-block d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav id="dropdown">
                                <ul>
                                  <li><a class="active" href="index.html">Home</a></li>
                                  <li class="mega-parent"><a href="shop.html">Product</a></li>
                                  <li class="mega-parent"><a href="blog.html">About</a></li>
                                  <li class="mega-parent"><a href="index-2.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--mobile menu area end-->


        </header>
        <!-- End of header area -->
