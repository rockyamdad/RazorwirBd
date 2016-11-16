<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>RazorWireBD</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <link href="{{URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/global/plugins/slider-layer-slider/css/layerslider.css') }}"/>

    <link href="{{ URL::asset('assets/global/css/components.css') }}" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="{{ URL::asset('assets/frontend/layout/css/style.css') }}"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{ URL::asset('assets/frontend/pages/css/style-shop.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/frontend/pages/css/style-layer-slider.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/frontend/layout/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/frontend/layout/css/themes/red.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/frontend/layout/css/custom.css') }}" rel="stylesheet" type="text/css" id="style_color"/>

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    @yield('styles')
</head>
<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+880 1711524335</span></li>
                        <!-- BEGIN CURRENCIES -->

                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->

                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <h4 style="color:darkmagenta">Razor Wire Bd</h3>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
<!-- BEGIN HEADER -->
<div class="header">
    <div class="container">
        <a class="site-logo" href="{{ URL::to('/') }}"><img src="assets/frontend/layout/img/logos/logo.jpg" style="width: 70px;height:40px;" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
   {{--     <div class="top-cart-block">
            <div class="top-cart-info">
                <a href="javascript:void(0);" class="top-cart-info-count">3 items</a>
                <a href="javascript:void(0);" class="top-cart-info-value">$1260</a>
            </div>
            <i class="fa fa-shopping-cart"></i>
        </div>--}}
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
            <ul>
                <li class="dropdown">
                    <a  href="{{ URL::to('/') }}">
                        Home
                    </a>
                </li>
                <li><a href="{{ URL::to('all-products') }}">Products</a></li>
           {{--     <li class="dropdown dropdown100 nav-catalogue">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                        New

                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="header-navigation-content">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="shop-item.html"><img src="assets/frontend/pages/img/products/p1.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">$29.00</div>
                                            <a href="#" class="btn btn-default add2cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="shop-item.html"><img src="assets/frontend/pages/img/products/p7.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">$29.00</div>
                                            <a href="#" class="btn btn-default add2cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="shop-item.html"><img src="assets/frontend/pages/img/products/p4.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">$29.00</div>
                                            <a href="#" class="btn btn-default add2cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="product-item">
                                            <div class="pi-img-wrapper">
                                                <a href="shop-item.html"><img src="assets/frontend/pages/img/products/p5.jpg" class="img-responsive" alt="Berry Lace Dress"></a>
                                            </div>
                                            <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                                            <div class="pi-price">$29.00</div>
                                            <a href="#" class="btn btn-default add2cart">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>--}}
                <li><a href="{{ URL::to('about-us') }}" >About Us</a></li>
                <li><a href="{{ URL::to('contact-us') }}" >Contact Us</a></li>
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->
    @yield('content')

<!-- BEGIN BRANDS -->
<div class="brands">
    <div class="container">
        <div class="owl-carousel owl-carousel6-brands">
            <a href="#"><img src="assets/frontend/pages/img/brands/aiub.JPG" style="width: 90px;height: 90px;" alt="esprit" title="AIUB"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/army.png" style="width: 90px;height: 90px;" alt="gap" title="bangladesh Army"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/logo15.png" style="width: 90px;height: 90px;" alt="puma" title="STS Group"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/turky.jpg" style="width: 90px;height: 90px;" alt="zara" title="Turky Embassy"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/us-embassy.jpg" style="width: 90px;height: 90px;" alt="canon" title="US-Embassy"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/bcb.png" style="width: 90px;height: 90px;" alt="esprit" title="BCB"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/meghna.png" style="width: 90px;height: 90px;" alt="gap" title="Meghna Group"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/AMAN-Group-1.png" style="width: 90px;height: 90px;" alt="esprit" title="Aman Group"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/gulsan_club.png" style="width: 90px;height: 90px;" alt="next" title="Gulsan Club"></a>
        </div>
    </div>
</div>
<!-- END BRANDS -->


<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col" style="margin-left: 50px;">
                <h2>About us</h2>
                <p>As the first ever manufacturer of barbed wires, first ever importer of Razor Concertina and PVC barbed wire in Bangladesh. </p>
                <p> Sharif Enterprise has been fulfilling the needs of people since 1980. </p>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->
            <!-- BEGIN BOTTOM INFO BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col">

            </div>
            <!-- END INFO BLOCK -->


            <!-- BEGIN BOTTOM CONTACTS -->
            <div class="col-md-3 col-sm-6 pre-footer-col" style="margin-left:400px;">
                <h2>Our Contact</h2>
                <address class="margin-bottom-40">
                    Ferdous Hossain<br>
                    M/S Sharif Enterprise<br>
                    22 Nawab yousuf Market Nayabazar<br>
                    Dhaka<br>
                    Phone: 01711524335<br>
                    Email: <a href="mailto:info@metronic.com">sales@razorwirebd.com</a><br>
                    Skype: <a href="skype:metronic">Ferdous</a>
                </address>
            </div>
            <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
   {{--     <div class="row">
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-6 col-sm-6">
                <ul class="social-icons">
                    <li><a class="rss" data-original-title="rss" href="#"></a></li>
                    <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="#"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="#"></a></li>
                    <li><a class="linkedin" data-original-title="linkedin" href="#"></a></li>
                    <li><a class="youtube" data-original-title="youtube" href="#"></a></li>
                    <li><a class="vimeo" data-original-title="vimeo" href="#"></a></li>
                    <li><a class="skype" data-original-title="skype" href="#"></a></li>
                </ul>
            </div>
            <!-- END SOCIAL ICONS -->
            <!-- BEGIN NEWLETTER -->
            <div class="col-md-6 col-sm-6">
                <div class="pre-footer-subscribe-box pull-right">
                    <h2>Newsletter</h2>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END NEWLETTER -->
        </div>--}}
    </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6 padding-top-10">
                2016 © RazorWire BD. All Rights Reserved.
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->

            <!-- END PAYMENTS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN fast view of a product -->

<script src="{{ URL::asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
<script src="{{ URL::asset('assets/frontend/layout/scripts/back-to-top.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"
        type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/zoom/jquery.zoom.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script>
<script type="text/javascript"
        src="{{ URL::asset('assets/global/plugins/slider-layer-slider/js/greensock.js') }}"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->


<script src="{{ URL::asset('assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js') }}"
        type="text/javascript"></script>

<script src="{{ URL::asset('assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js') }}"
        type="text/javascript"></script>
<script src="{{ URL::asset('assets/frontend/pages/scripts/layerslider-init.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/frontend/layout/scripts/layout.js') }}"
        type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">

    jQuery(document).ready(function () {
        Layout.init();
        Layout.initOWL();
        LayersliderInit.initLayerSlider();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initTwitter();


    });

</script>
<!-- END JAVASCRIPTS -->

@yield('javascript')
</body>
<!-- END BODY -->
</html>