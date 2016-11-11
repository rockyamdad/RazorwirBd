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
          ">Committed  <strong>since</strong> 1980</div>

            <div class="ls-l ls-mini-text" style="top: 338px; left: 35%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          showuntil: 4000;
          ">Keep<br > Promises
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
          "><strong> Ensuring Quality</strong> <em>Always</em>
            </div>


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
          ">Beyond  &amp; Strong <strong>the conventional</strong>
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

                {{-- <div class="ls-price">
                     <span>All these for only:</span>
                     <strong>25<sup>$</sup></strong>
                 </div>--}}
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


            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="row list-view-sorting clearfix">
                    <div class="col-md-2 col-sm-2 list-view">
                        <a href="#"><i class="fa fa-th-large"></i></a>
                        <a href="#"><i class="fa fa-th-list"></i></a>
                    </div>

                </div>
                <!-- BEGIN PRODUCT LIST -->
                <div class="row product-list">
                    <!-- PRODUCT ITEM START -->
                    @foreach($products as $new )
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="images/{{$new->image}}" style="height: 182px;width: 230px" class="img-responsive" alt="{{$new->image}}">
                                <div>
                                    <a href="images/{{$new->image}}" class="btn btn-default fancybox-button">Zoom</a>
                                    {{--  <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>--}}
                                    <a href="{{ URL::to('product-view/'.$new->id)}}" class="btn btn-default fancybox fancybox.ajax" id="event" data-fancybox-type="ajax">View</a>
                                </div>
                            </div>
                            <h3><a href="shop-item.html">{{ $new->name }}</a></h3>
                            <div class="pi-price">${{ $new->price }}</div>
                              {{--<a href="#" class="btn btn-default add2cart">Add to cart</a>--}}
                        </div>
                    </div>
                    @endforeach
                    <!-- PRODUCT ITEM END -->

                </div>

                <!-- END PRODUCT LIST -->
                <!-- BEGIN PAGINATOR -->
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <ul class="pagination pull-right">
                            {!! $products->render() !!}
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