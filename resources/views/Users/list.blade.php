@extends('baseLayout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            User Section
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li><a href="{{URL::to('list')}}">Users List</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box light-grey">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i>Users</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div style="float: left;width: 80%; margin-left: 20px">
                @if (Session::has('message'))
                <div class="alert alert-success">
                    <button data-close="alert" class="close"></button>
                    {{ Session::get('message') }}
                </div>
                @endif
            </div>

            <div class="portlet-body">

                <div class="table-toolbar">
                    <div class="btn-group">
                        <a class="btn green" href="{{ URL::to('add') }}">Add User &nbsp;&nbsp;<i class="fa fa-plus"></i></a>

                    </div>

                </div>
                <div class="table-responsive">

                <table class="table" id="user_table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>UserName</th>
                            <th>Role</th>
                            <th>Gender</th>
                            <th>Branch</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sl=1;
                    ?>
                    @foreach($users as $user )
                        <?php
                        $branchName = \App\Branch::find($user->branch_id);

                        ?>
                    <tr class="odd gradeX">
                        <td><?php echo $sl; ?></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->username}}</td>
                        <td>
                            @if($user->role == 'admin')
                                Admin
                            @elseif($user->role == 'manager')
                                Stock InCharge
                            @else
                                Office Manager
                            @endif
                        </td>
                        @if($user->sex == "m")
                        <td>Male</td>
                        @else
                        <td>Female</td>
                        @endif
                        <td>{{$branchName->name}}</td>
                        <td>{{$user->address}}</td>
                        @if($user->status == "Activate")
                        <td class="user-status"><span class="label label-sm label-success">Activate</span></td>
                        @else
                        <td class="user-status"><span class="label label-sm label-danger">Deactivate</span></td>
                        @endif
                        <td>

                            <a class="btn blue btn-sm" href="{{ URL::to('edit/'. $user->id ) }}"><i
                                        class="fa fa-edit"></i>Edit User</a>
                            @if(Session::get('user_id') != $user->id )
                                <a data-id="{{$user->id}}" class="btn btn-sm purple changeStatus"
                                   href="{{ URL::to('changeStatus/'.$user->status.'/'. $user->id ) }}"><i
                                        class="fa fa-link"></i>Change Status</a>
                            @endif
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
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
{!! $users->render() !!}
@stop
@section('javascript')

{!! HTML::script('js/users.js') !!}

@stop