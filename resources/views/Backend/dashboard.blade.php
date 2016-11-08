@extends('backendLayout')

@section('content')
    <div class="theme-panel hidden-xs hidden-sm">

    </div>
    <!-- END STYLE CUSTOMIZER -->
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
        Dashboard
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

        </ul>
        <div class="page-toolbar">

        </div>


    </div>
    <h1>Welcome RazorWir Bd</h1>
@stop