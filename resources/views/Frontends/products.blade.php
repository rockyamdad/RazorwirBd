@extends('baseLayout')

@section('content')


        <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <!-- LayerSlider start -->
        <div id="layerslider" style="width: 100%; height: 370px; margin: 0 auto;">

            <!-- slide one start -->
            <div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 24,25,27,28;">

                <img src="assets/frontend/pages/img/layerslider/slide1/one.jpg" class="ls-bg" alt="Slide background">

                <div class="ls-l ls-title" style="top: 96px; left: 35%; white-space: nowrap;" data-ls="
            fade: true;
            fadeout: true;
            durationin: 750;
            durationout: 750;
            easingin: easeOutQuint;
            rotatein: 90;
            rotateout: -90;
            scalein: .5;
            scaleout: .5;
            showuntil: 4000;
          ">Quality Of<strong>Steel Kingdom</strong> Making</div>

                <div class="ls-l ls-mini-text" style="top: 338px; left: 35%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          showuntil: 4000;
          ">Lorem ipsum dolor sit amet  constectetuer diam<br > adipiscing elit euismod ut laoreet dolore.
                </div>
            </div>
            <!-- slide one end -->

            <!-- slide two start -->
            <div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

                <img src="assets/frontend/pages/img/layerslider/slide2/two.jpg" class="ls-bg" alt="Slide background">

                <div class="ls-l ls-title" style="top: 40%; left: 21%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750; durationout: 109750;
          easingin: easeOutQuint;
          easingout: easeInOutQuint;
          delayin: 0;
          delayout: 0;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;
          "><strong>Unlimted</strong> Steel Options <em>Fully Foreign</em>
                </div>

                <div class="ls-l ls-price" style="top: 50%; left: 45%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 109750;
          easingin: easeOutQuint;
          delayin: 300;
          scalein: .8;
          scaleout: .8;
          showuntil: 4000;"><b>from</b> <strong><span>$</span>25</strong>
                </div>

                <a href="#" class="ls-l ls-more" style="top: 72%; left: 21%; display: inline-block; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          easingout: easeInOutQuint;
          delayin: 0;
          delayout: 0;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;">See More Details
                </a>
            </div>
            <!-- slide two end -->

            <!-- slide three start -->
            <div class="ls-slide ls-slide3" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 92,93,105;">

                <img src="assets/frontend/pages/img/layerslider/slide3/three.jpg" class="ls-bg" alt="Slide background">

                <div class="ls-l ls-title" style="top: 83px; left: 33%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;
          ">Full Steel &amp; Strong <strong>Best Quality</strong> Is Ready For Your Project
                </div>
                <div class="ls-l" style="top: 333px; left: 33%; white-space: nowrap; font-size: 20px; font: 20px 'Open Sans Light', sans-serif;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          scalein: .8;
          scaleout: .8;
          showuntil: 4000;
          ">
                    <a href="#" class="ls-buy">
                        Buy It Now!
                    </a>
                    <div class="ls-price">
                        <span>All these for only:</span>
                        <strong>25<sup>$</sup></strong>
                    </div>
                </div>
            </div>
            <!-- slide three end -->

            <!-- slide four start -->
           {{-- <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

                <img src="assets/frontend/pages/img/layerslider/slide5/bg.jpg" class="ls-bg" alt="Slide background">

                <div class="ls-l ls-title" style="top: 35%; left: 60%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;">
                    The most<br>
                    wanted bijouterie
                </div>

                <div class="ls-l ls-mini-text" style="top: 70%; left: 60%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          scalein: .8;
          scaleout: .8;
          showuntil: 4000;">
                    <span>Lorem ipsum and</span>
                    <a href="#">Buy It Now!</a>
                </div>

            </div>--}}
            <!-- slide four end -->
        </div>
        <!-- LayerSlider end -->
    </div>
    <!-- END SLIDER -->
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">All Products</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <h1>Products</h1>
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Ladies</a></li>
                    <li class="list-group-item clearfix dropdown active">
                        <a href="javascript:void(0);" class="collapsed">
                            <i class="fa fa-angle-right"></i>
                            Mens

                        </a>
                        <ul class="dropdown-menu" style="display:block;">
                            <li class="list-group-item dropdown clearfix active">
                                <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                                <ul class="dropdown-menu" style="display:block;">
                                    <li class="list-group-item dropdown clearfix">
                                        <a href="javascript:void(0);"><i class="fa fa-angle-right"></i> Classic </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item dropdown clearfix active">
                                        <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                                        <ul class="dropdown-menu" style="display:block;">
                                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
                        </ul>
                    </li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Kids</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Accessories</a></li>

                </ul>


            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="row list-view-sorting clearfix">
                    <div class="col-md-2 col-sm-2 list-view">
                        <a href="#"><i class="fa fa-th-large"></i></a>
                        <a href="#"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="pull-right">
                            <label class="control-label">Show:</label>
                            <select class="form-control input-sm">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100">100</option>
                            </select>
                        </div>

                    </div>
                </div>
                <!-- BEGIN PRODUCT LIST -->
                <div class="row product-list">
                    <!-- PRODUCT ITEM START -->
                    @foreach($products as $new )
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="../../assets/frontend/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                    <a href="../../assets/frontend/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                                    <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">{{ $new->name }}</a></h3>
                            <div class="pi-price">${{ $new->price }}</div>
                              <a href="#" class="btn btn-default add2cart">Add to cart</a>
                            <div class="sticker sticker-sale"></div>
                        </div>
                    </div>
                    @endforeach
                    <!-- PRODUCT ITEM END -->

                </div>
                <!-- END PRODUCT LIST -->
                <!-- BEGIN PAGINATOR -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
                    <div class="col-md-8 col-sm-8">
                        <ul class="pagination pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><span>2</span></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGINATOR -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>
@stop
