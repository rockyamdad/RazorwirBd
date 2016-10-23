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
    <title>Ecomerce site</title>
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
    <link href="{{ URL::asset('assets/frontend/onepage/css/style.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ URL::asset('assets/frontend/onepage/css/style-responsive.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ URL::asset('assets/frontend/onepage/css/themes/red.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ URL::asset('assets/frontend/onepage/css/custom.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
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
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                                </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Log In</a></li>
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
        <a class="site-logo" href="{{ URL::to('/') }}"><img src="assets/frontend/layout/img/logos/test.png" style="width: 118px;height:38px;" alt="Metronic Shop UI"></a>

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
                <li><a href="shop-item.html">Products</a></li>
                <li class="dropdown dropdown100 nav-catalogue">
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
                </li>
                <li><a href="{{ URL::to('about-us') }}" >About Us</a></li>
                <li><a href="onepage-index.html" target="_blank">Contact Us</a></li>
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
            <a href="#"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/next.jpg" alt="next" title="next"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/next.jpg" alt="next" title="next"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
            <a href="#"><img src="assets/frontend/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
        </div>
    </div>
</div>
<!-- END BRANDS -->


<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col">
                <h2>About us</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
                <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->
            <!-- BEGIN BOTTOM INFO BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col">
                <h2>Information</h2>
                <ul class="list-unstyled">
                    <li><i class="fa fa-angle-right"></i> <a href="#">Delivery Information</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#">Customer Service</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#">Order Tracking</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#">Shipping &amp; Returns</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#">Careers</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#">Payment Methods</a></li>
                </ul>
            </div>
            <!-- END INFO BLOCK -->


            <!-- BEGIN BOTTOM CONTACTS -->
            <div class="col-md-3 col-sm-6 pre-footer-col">
                <h2>Our Contacts</h2>
                <address class="margin-bottom-40">
                    35, Lorem Lis Street, Park Ave<br>
                    California, US<br>
                    Phone: 300 323 3456<br>
                    Fax: 300 323 1456<br>
                    Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                    Skype: <a href="skype:metronic">metronic</a>
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
                2014 © Metronic Shop UI. ALL Rights Reserved.
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->
            <div class="col-md-6 col-sm-6">
                <ul class="list-unstyled list-inline pull-right">
                    <li><img src="assets/frontend/layout/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
                    <li><img src="assets/frontend/layout/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
                    <li><img src="assets/frontend/layout/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
                    <li><img src="assets/frontend/layout/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
                    <li><img src="assets/frontend/layout/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
                </ul>
            </div>
            <!-- END PAYMENTS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN fast view of a product -->
<div id="product-pop-up" style="display: none; width: 700px;">
    <div class="product-page product-pop-up">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-3">
                <div class="product-main-image">
                    <img src="assets/frontend/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                </div>
                <div class="product-other-images">
                    <a href="#" class="active"><img alt="Berry Lace Dress" src="assets/frontend/pages/img/products/model3.jpg"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="assets/frontend/pages/img/products/model4.jpg"></a>
                    <a href="#"><img alt="Berry Lace Dress" src="assets/frontend/pages/img/products/model5.jpg"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-9">
                <h2>Cool green dress with red bell</h2>
                <div class="price-availability-block clearfix">
                    <div class="price">
                        <strong><span>$</span>47.00</strong>
                        <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                        Availability: <strong>In Stock</strong>
                    </div>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                        Nostrud duis molestie at dolore.</p>
                </div>
                <div class="product-page-options">
                    <div class="pull-left">
                        <label class="control-label">Size:</label>
                        <select class="form-control input-sm">
                            <option>L</option>
                            <option>M</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="pull-left">
                        <label class="control-label">Color:</label>
                        <select class="form-control input-sm">
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Black</option>
                        </select>
                    </div>
                </div>
                <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                </div>
            </div>

            <div class="sticker sticker-sale"></div>
        </div>
    </div>
</div>
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