@extends('baseLayout')
@section('styles')
    <link href="{{ URL::asset('assets/frontend/onepage/css/style.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
@endsection
@section('content')
    <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
        <div class="container">
            <h2>Why to <strong>choose us</strong></h2>
            <h4>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">consectetuer adipiscing</a> elit, sed diam nonummy<br> nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</h4>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <img src="../../assets/frontend/onepage/img/choose-us.png" alt="Why to choose us" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Lorem ipsum dolor sit amet</a>
                                </h5>
                            </div>
                            <div id="accordion1_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Consectetur adipisicing elit</a>
                                </h5>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Augue assum anteposuerit dolore</a>
                                </h5>
                            </div>
                            <div id="accordion1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Sollemnes in futurum</a>
                                </h5>
                            </div>
                            <div id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Nostrud Tempor veniam</a>
                                </h5>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Ut enem magana sed dolore</a>
                                </h5>
                            </div>
                            <div id="accordion1_6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation dolore magna ullamco.</p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco sed eiusmod tempor ut labore et dolore.</p>
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
