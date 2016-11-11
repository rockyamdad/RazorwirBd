@extends('baseLayout')
@section('styles')
    <link href="{{ URL::asset('assets/frontend/onepage/css/style.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
@endsection
@section('content')
    <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
        <div class="container">
            <h2>Why to <strong>choose us</strong></h2>
            <h4>We know that your time is valuable. Your home and safety, precious. So The Wire Guys make sure everything is safe, simple and straightforward—from your first call to live customer care through on-time and satisfaction guarantees. From start to finish, you everything you want, and nothing you don't.</h4>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <img src="../../assets/frontend/onepage/img/aboutUs.png" style="height: 350px" alt="Why to choose us" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">History</a>
                                </h5>
                            </div>
                            <div id="accordion1_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>As the first ever manufacturer of barbed wires, first ever importer of Razor Concertina and PVC barbed wire in Bangladesh</p>
                                    <p>Sharif Enterprise has been fulfilling the needs of people since 1980. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Our Aim</a>
                                </h5>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Our core principles lie in serving our customers with integrity and conducting ourselves and our business in an honest, ethical and trustworthy manner.</p>
                                    <p>We make it our priority to treat people with care, respect and fairness</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Responsibilty</a>
                                </h5>
                            </div>
                            <div id="accordion1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>We work with our clients to achieve their aspirations, working around their needs to achieve a result that surpasses requirement.</p>
                                    <p>Financial stewardship is our responsibility. We grow through innovation and creativity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Want to Give You</a>
                                </h5>
                            </div>
                            <div id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is our aim to create continuous value for our customers, earn respect and confidence through the highest levels of product quality and service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">objective</a>
                                </h5>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Our chief objective is to ensure maximum consumer satisfaction and augmented social benefits through our service. </p>
                                    <p>latest technology in wire forming we pride ourelves in delivering cost effective & quality products, on time... every time</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose us block END -->
@stop
