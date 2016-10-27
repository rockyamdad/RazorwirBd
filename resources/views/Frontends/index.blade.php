@extends('baseLayout')

@section('content')


        <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
        <!-- LayerSlider start -->
        <div id="layerslider" style="width: 100%; height: 420px; margin: 0 auto;">

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
            <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SALE PRODUCT -->
                <div class="col-md-12 sale-product">
                    <h2>New Arrivals</h2>
                    <div class="owl-carousel owl-carousel5">
                        @foreach($newArrivals as $new )
                            <div>
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="images/{{$new->image}}" class="img-responsive" alt="{{$new->image}}">
                                        <div>
                                            <a href="images/{{$new->image}}" class="btn btn-default fancybox-button">Zoom</a>
                                          {{--  <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                            <a href="{{ URL::to('product-view/'.$new->id)}}" class="btn btn-default fancybox fancybox.ajax" id="event" data-fancybox-type="ajax">View</a>
                                        </div>
                                    </div>
                                    <h3><a href="shop-item.html">{{ $new->name }}</a></h3>
                                    <div class="pi-price">${{ $new->price }}</div>
                                  {{--  <a href="#" class="btn btn-default add2cart">Add to cart</a>--}}
                                    <div class="sticker sticker-sale"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END SALE PRODUCT -->
            </div>
            <!-- END SALE PRODUCT & NEW ARRIVALS -->


        </div>
    </div>
@stop
@section('javascript')
    <script type="text/javascript">
        $(".open_ajax").fancybox({type: 'ajax'});
        $(".fancybox").fancybox({
            maxWidth:850,
            afterShow: function() {
                Layout.initImageZoom();
                Layout.initTouchspin();


            }

        });

    </script>

@stop
