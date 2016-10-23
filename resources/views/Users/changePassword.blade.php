@extends('baseLayout')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/select2/select2_metro.css') }}"/>

@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Change Password Sections
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li><a href="{{URL::to('#')}}" >Change Your Password</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="col-md-16">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="fa fa-reorder"></i>Change Password</div>

        </div>


        <div class="portlet-body form">
        <div style="float: left;width: 80%; margin-left: 20px">
                                @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <button data-close="alert" class="close"></button>
                                    {{ Session::get('message') }}
                                </div>
                                @endif
                            </div>

        <div style="float: left;width: 80%; margin-left: 20px">
                                @if (Session::has('message2'))
                                <div class="alert alert-danger">
                                    <button data-close="alert" class="close"></button>
                                    {{ Session::get('message2') }}
                                </div>
                                @endif
                            </div>

            @if ($errors->has())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
                @endif

                        <!-- BEGIN FORM-->
            {!!Form::open(array('url' => 'users/changePassword/', 'method' => 'post', 'class'=>'form-horizontal',
            'id'=>'user_form'))!!}
            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button data-close="alert" class="close"></button>
                    You have some form errors. Please check below.
                </div>
                <div class="alert alert-success display-hide">
                    <button data-close="alert" class="close"></button>
                    Your form validation is successful!
                </div>


                <div class="form-group">
                    {!!HTML::decode(Form::label('oldPassword','Old Password<span class="required">*</span>',array('class' =>
                    'control-label col-md-3')))!!}
                    <div class="col-md-4">
                            {!!Form::text('oldPassword',null,array('placeholder' => 'Old Password', 'class' => 'form-control','id' =>
                            'oldPassword'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('password','New Password<span class="required">*</span>',array('class' =>
                    'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::password('password',array('placeholder' => 'New Password', 'class' => 'form-control','id'
                        => 'password'))!!}
                    </div>
                </div>
                <div class="form-group">
                    {!!HTML::decode(Form::label('password_confirmation','Password confirmation<span class="required">*</span>',array('class' =>
                    'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::password('password_confirmation',array('placeholder' => 'Password confirmation', 'class' => 'form-control','id'
                        => 'password'))!!}
                    </div>
                </div>

            </div>
            <div class="form-actions fluid">
                <div class="col-md-offset-3 col-md-9">
                    {!!Form::button('Save',array('type' => 'submit','class' => 'btn green','id' => 'save'))!!}
                    {!!Form::button('Cancel',array('type'=>'reset', 'class' => 'btn default','id' => 'cancel'))!!}

                </div>
            </div>
            {!!Form::close()!!}
            <!-- END FORM-->
        </div>
    </div>
    <!-- END VALIDATION STATES-->
</div>
@stop
@section('javascript')
{!! HTML::script('js/users.js') !!}
@stop


