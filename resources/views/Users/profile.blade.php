@extends('baseLayout')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/select2/select2_metro.css') }}"/>

@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
           My Profile
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li><a href="#" >Profile</a></li>
            <div class="actions" style="float: right;margin-top: -7px;">
                <a class="btn blue" href="{{ URL::to('edit/'. $profile->id) }}">Update Profile</a>
            </div>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="col-md-16">
    <?php
        $branch = \App\Branch::find($profile->branch_id);
        ?>
    <b>Name: </b>{{$profile->name}}<br><br>
    <b>Email:</b>{{$profile->email}}<br><br>
    <b>UserName: </b>{{$profile->username}}<br><br>
    <b>Branch: </b>{{$branch->name}}<br><br>
    <b>Phone: </b>{{$profile->phone}}<br><br>
    <b>Role: </b> @if($profile->role == 'admin')
            Admin
        @elseif($profile->role == 'manager')
            Stock InCharge
        @else
            Office Manager
        @endif  <br><br>
    <b>Address: </b>{{$profile->address}}


</div>
@stop
@section('javascript')
{!! HTML::script('js/users.js') !!}
@stop


