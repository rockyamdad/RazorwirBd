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
                <a href="{{ URL::to('dashboard/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li><a href="{{URL::to('list')}}">Product List</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box light-grey">

            <div style="float: left;width: 80%; margin-left: 20px">
                @if (Session::has('message'))
                <div class="alert alert-success">
                    <button data-close="alert" class="close"></button>
                    {{ Session::get('message') }}
                </div>
                @endif
            </div>

            <div class="portlet-body flip-scroll">

                <div class="table-toolbar">
                    <div class="btn-group">
                        <a class="btn green" href="{{ URL::to('add') }}">Add Product &nbsp;&nbsp;<i class="fa fa-plus"></i></a>

                    </div>

                </div>
                <table class="table table-bordered table-striped table-condensed flip-content" id="product_table">
                    <thead class="flip-content">
                    <tr>
                        <th>SL</th>
                        <th >Name</th>
                        <th >Brand</th>
                        <th >Color</th>
                        <th >Origin Name</th>
                        <th >Type</th>
                        <th >Size</th>
                        <th >Price</th>
                        <th >Description</th>
                        <th >Image</th>
                        <th width="160px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sl=1;
                    ?>
                    @foreach($products as $product )
                    <tr class="odd gradeX">
                        <td><?php echo $sl;?></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->brand}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->origin_name}}</td>
                        <td>{{$product->type}}</td>
                        <td>{{$product->size}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->details}}</td>
                        <td>  <img src="images/{{$product->image}}" class="img-responsive" alt="{{$product->image}}" style="width: 50px;height:30px"></td>
                        <td>
                            <a class="btn blue btn-sm" href="{{ URL::to('edit/'. $product->id ) }}"><i class="fa fa-edit"></i>Edit </a>
                            <a class="btn red btn-sm" href="{{ URL::to('products/delete/'.$product->id)}}"
                               onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="fa fa-trash-o"></i> Delete</a>
                        </td>
                    </tr>
                    <?php
                    $sl++;
                    ?>
                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
{!! $products->render() !!}
@stop
@section('javascript')
{!! HTML::script('js/products.js') !!}
@stop