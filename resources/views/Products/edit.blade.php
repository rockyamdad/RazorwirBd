@extends('backendLayout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Product Section
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('list')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li>Edit Product</li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="col-md-16">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="fa fa-reorder"></i>Edit Product</div>
            <div class="actions">
                <a class="btn" href="{{ URL::to('list') }}">Product List</a>
            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            {!!Form::model($product,array('action' => array('ProductController@postUpdate', $product->id), 'method' => 'POST', 'class'=>'form-horizontal', 'id'=>'branch_form','files' => true))!!}

            <div class="form-body">
                <div class="alert alert-danger display-hide">
                    <button data-close="alert" class="close"></button>
                    You have some form errors. Please check below.
                </div>
                <div style="float: left;width: 80%; margin-left: 20px">
                    @if (Session::has('message'))
                        <div class="alert alert-danger">
                            <button data-close="alert" class="close"></button>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>
                <div class="alert alert-success display-hide">
                    <button data-close="alert" class="close"></button>
                    Your form validation is successful!
                </div>
                <div class="form-group">
                    {!! HTML::decode(Form::label('name','Name<span class="required">*</span>',array('class' => 'control-label col-md-3'))) !!}
                    <div class="col-md-4">
                        {!!Form::text('name',null,array('placeholder' => 'Name', 'class' => 'form-control','id' => 'name'))!!}
                    </div>
                </div>


                <div class="form-group">
                    {!!HTML::decode(Form::label('origin_name','Origin Name<span class="required">*</span>',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('origin_name',null,array('class' => 'form-control','placeholder' => 'Origin Name'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('brand','Brand Name<span class="required">*</span>',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('brand',null,array('class' => 'form-control','placeholder' => 'Brand Name'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('type','Type',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('type',null,array('class' => 'form-control','placeholder' => 'Type'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('color','Color',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('color',null,array('class' => 'form-control','placeholder' => 'Color'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('size','Size',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('size',null,array('class' => 'form-control','placeholder' => 'Size'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('price','Price',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::text('price',null,array('class' => 'form-control','placeholder' => 'Price'))!!}
                    </div>
                </div>

                <div class="form-group">
                    {!!HTML::decode(Form::label('details','Description<span class="required">*</span>',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::textarea('details',null,array('class' => 'form-control','id' => 'description', 'rows'=>'3'))!!}
                    </div>
                </div>
                <div class="form-group">
                    {!!HTML::decode(Form::label('image','Product Image',array('class' => 'control-label col-md-3')))!!}
                    <div class="col-md-4">
                        {!!Form::file('image', null) !!}
                        {{$product->image}}
                        </div>
                </div>



                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        {!!Form::button('Save',array('type' => 'submit','class' => 'btn blue','id' => 'save'))!!}
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
    {!! HTML::script('js/products.js') !!}
    @stop


