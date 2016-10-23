@extends('baseLayout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Dashboard Section
        </h3>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{URL::to('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li><a href="{{URL::to('dashboard')}}">dashboard</a></li>
        </ul>
        @if (Session::has('flash_notice'))

            <div id="flash_notice"  class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a>{{ Session::get('flash_notice') }}</div>
        @endif
    </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-barcode"></i>
                </div>
                <div class="details">
                    <div class="number">
                       {{$totalProducts}}
                    </div>
                    <div class="desc">
                       Total Products
                    </div>
                </div>
                <a class="more" href="{{URL::to('/products')}}">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-plane"></i>
                </div>
                <div class="details">
                    <div class="number">{{$totalImports[0]->totalImport ? $totalImports[0]->totalImport : 0}}</div>
                    <div class="desc">Total Imports</div>
                </div>
                <a class="more" href="{{URL::to('imports/index')}}">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="fa fa-level-down"></i>
                </div>
                <div class="details">
                    <div class="number">{{$totalSales[0]->todaySale ? $totalSales[0]->todaySale : 0.00}}&nbsp;Tk</div>
                    <div class="desc">Today's Sales Collection</div>
                </div>
                <a class="more" href="{{URL::to('sales/')}}">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat yellow">
                <div class="visual">
                <i class="fa fa-level-up"></i>
                </div>
                <div class="details">
                    <div class="number">
                        {{$totalPurchase[0]->todayPurchase ? $totalPurchase[0]->todayPurchase : 0.00}} &nbsp;Tk
                    </div>
                    <div class="desc">Today's Purchase Payment</div>
                </div>
                <a class="more" href="{{URL::to('purchases/')}}">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>


</div>
    @if(Session::get('user_role') == 'admin' || Session::get('user_role') == 'user')
        <div class="row ">
            <div class="col-md-12 col-sm-12">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-bell-o"></i>Payee Cheque Register</div>

                    </div>
                    <div class="portlet-body">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Party Name</th>
                                    <th>Bank Name</th>
                                    <th>Cheque No</th>
                                    <th>Cheque Date</th>
                                    <th>Amount</th>
                                    <th>Received by</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $slNo = 1;
                                ?>
                                @foreach($register as $reg)
                                    <?php
                                    $sale = \App\Sale::where('invoice_id','=',$reg->invoice_id)->first();
                                    $partyname = \App\Party::find($sale->party_id);
                                    $time = strtotime($reg->cheque_date);
                                    $newformat = date('d',$time);
                                    $today = date('d', time());

                                    ?>
                                    <?php if ($reg->cheque_date != "") { ?>
                                    <tr>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$slNo}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$partyname->name}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->cheque_bank}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->cheque_no}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>><?php if ($reg->cheque_date != '') {?>{{\App\Transaction::convertDate($reg->cheque_date)}}<?php } ?> </td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->amount}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->user->username}}</td>
                                        <td class="party-status" <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>><span class="label label-sm label-danger" >Pending</span></td>
                                        <td>
                                            <a data-id="" class="btn btn-sm purple changeStatus"
                                               href="{{ URL::to('chequeregister/complete2/'. $reg->id ) }}"><i
                                                        class="fa fa-check"></i>Complete</a>
                                        </td>
                                    </tr>
                                    <?php }else { ?>
                                    <tr>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$slNo}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$partyname->name}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->cheque_bank}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->cheque_no}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>open cheque</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->amount}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->user->username}}</td>
                                        <td class="party-status" <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>><span class="label label-sm label-danger" >Pending</span></td>
                                        <td>
                                            <a data-id="" class="btn btn-sm purple changeStatus"
                                               href="{{ URL::to('chequeregister/complete2/'. $reg->id ) }}"><i
                                                        class="fa fa-check"></i>Complete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                    $slNo++;
                                    ?>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="scroller-footer">
                            <div class="pull-right">
                                <a href="{{ URL::to('chequeregister/index') }}">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row ">
            <div class="col-md-12 col-sm-12">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-bell-o"></i>Payer Cheque Register</div>

                    </div>
                    <div class="portlet-body">

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Party Name</th>
                                    <th>Bank Name</th>
                                    <th>Cheque No</th>
                                    <th>Cheque Date</th>
                                    <th>Amount</th>
                                    <th>Received by</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $slNo = 1;
                                ?>
                                @foreach($purchaseregister as $reg)
                                    <?php
                                            if($reg->type=='Payment'){
                                    $sale = \App\PurchaseInvoice::where('invoice_id','=',$reg->invoice_id)->first();
                                                $partyname = \App\Party::find($sale->party_id);
                                            } else {
                                                $sale = \App\Expense::where('invoice_id','=',$reg->invoice_id)->first();
                                            }

                                    $time = strtotime($reg->cheque_date);
                                    $newformat = date('d',$time);
                                    $today = date('d', time());
                                    ?>
                                    <?php if ($reg->cheque_date != "") { ?>
                                    <tr>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$slNo}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>><?php if($reg->type=='Payment'){ ?>{{$partyname->name}} <?php } else echo "Expense"; ?></td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->cheque_bank}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->cheque_no}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>><?php if ($reg->cheque_date != '') {?>{{\App\Transaction::convertDate($reg->cheque_date)}}<?php } ?> </td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->amount}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>>{{$reg->user->username}}</td>
                                        <td class="party-status" <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blink'";}?>><span class="label label-sm label-danger" >Pending</span></td>
                                        <td>
                                            <a data-id="" class="btn btn-sm purple changeStatus"
                                               href="{{ URL::to('chequeregister/complete3/'. $reg->id ) }}"><i
                                                        class="fa fa-check"></i>Complete</a>
                                        </td>
                                    </tr>
                                    <?php }else { ?>
                                    <tr>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$slNo}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>><?php if($reg->type=='Payment'){ ?>{{$partyname->name}} <?php } else echo "Expense"; ?></td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->cheque_bank}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->cheque_no}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>open cheque</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->amount}}</td>
                                        <td <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>>{{$reg->user->username}}</td>
                                        <td class="party-status" <?php if($newformat >= $today -2 && $newformat <= $today + 2){ echo "class='blinks'";}?>><span class="label label-sm label-danger" >Pending</span></td>
                                        <td>
                                            <a data-id="" class="btn btn-sm purple changeStatus"
                                               href="{{ URL::to('chequeregister/complete3/'. $reg->id ) }}"><i
                                                        class="fa fa-check"></i>Complete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                    $slNo++;
                                    ?>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="scroller-footer">
                            <div class="pull-right">
                                <a href="{{ URL::to('chequeregister/purchase') }}">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="portlet box yellow tasks-widget">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-money"></i>Latest Transactions</div>
                    <div class="tools">

                        <a href="index.html" class="reload"></a>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Date</th>
                            <th>Account Category</th>
                            <th>Account Name</th>
                            <th>Transaction Type</th>
                            <th>Payment Method</th>
                            <th>Cheque No</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($latestTransactions as $transaction )
                            <tr class="odd gradeX">

                                <td>{{\App\Transaction::convertDate($transaction->created_at)}}</td>
                                <td>{{$transaction->accountCategory->name}}</td>
                                <td>{{$transaction->accountName->name}}</td>
                                <td>{{$transaction->type}}</td>
                                <td>{{$transaction->payment_method}}</td>
                                <td>
                                    @if($transaction->cheque_no)
                                        {{ $transaction->cheque_no }}
                                    @else
                                        {{"Not Available"}}
                                    @endif
                                </td>
                                <td>{{$transaction->amount}}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
               {{--     <div class="task-footer">
                                    <span class="pull-right">
                                    <a href="index.html#">See All Tasks <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                                    </span>
                    </div>--}}
                </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Accounts</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Branch Name</th>
                                <th>Account Name</th>
                                <th>Balance</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $slNo = 1;
                            ?>
                                @foreach($accountsBalance as $account)
                                    <?php
                                        $branch = \App\Branch::find($account->branch_id);
                                    ?>
                                    <tr>
                                        <td>{{$slNo}}</td>
                                        <td>{{$branch->name}}</td>
                                        <td>{{$account->name}}</td>
                                        <td>{{$account->opening_balance}}</td>
                                    </tr>
                                    <?php
                                        $slNo++;
                                    ?>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"><i class="fa fa-cogs"></i>Account Balance Transfer</div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Lender Account</th>
                                <th>Borrower Account</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $slNo = 1;
                            ?>
                            <?php
                                $values = array();
                                $count=0;
                                $count2=0;
                            ?>
                            @foreach($accountBalanceTransfers as $result )
                                <?php
                                $reports = new \App\Report();
                                $results2 = $reports->getBalanceTransferForFromAccount($result->fromAccount);
                                $fromAccount = \App\NameOfAccount::find($result->fromAccount);
                                ?>

                                @foreach($results2 as $result2 )
                                    <?php
                                    $reports = new \App\Report();
                                    $results3 = $reports->getBalanceTransferForToAccount($result->fromAccount, $result2->toAccount);
                                    $remainingAmount = $result2->fromAmount - $results3[0]->toAmount;
                                    $toAccount = \App\NameOfAccount::find($result2->toAccount);
                                    ?>
                                    @if($remainingAmount > 0)
                                        <?php
                                            for($i=0;$i<$count;$i++)
                                            {

                                                $from = $values[$i]["from"];
                                                $to = $values[$i]["to"];
                                                //var_dump($from." ".$to);
                                                if($from==$fromAccount->name && $to==$toAccount->name)
                                                {
                                                    $count2=1;
                                                }
                                            }
                                        ?>
                                        @if($count2==0)
                                        <tr>
                                            <td>{{$slNo}}</td>
                                            <td>{{$fromAccount->name}}</td>
                                            <td>{{$toAccount->name}}</td>
                                            <td>{{$remainingAmount}}</td>
                                        </tr>
                                            <?php
                                                array_push($values, array("from" => $fromAccount->name, "to" => $toAccount->name));
                                                $count++;
                                                $slNo++;
                                            ?>
                                        @endif
                                        <?php $count2=0; ?>
                                    @elseif($remainingAmount < 0)
                                        <?php
                                            for($i=0;$i<$count;$i++)
                                            {
                                                $from = $values[$i]["to"];
                                                $to = $values[$i]["from"];
                                                //var_dump($from." ".$to);
                                                if($from==$fromAccount->name && $to==$toAccount->name)
                                                {
                                                    $count2=1;
                                                }
                                            }
                                        ?>
                                        @if($count2==0)
                                        <tr>
                                            <td>{{$slNo}}</td>
                                            <td>{{$toAccount->name}}</td>
                                            <td>{{$fromAccount->name}}</td>
                                            <td>{{-$remainingAmount}}</td>
                                        </tr>
                                        <?php
                                            array_push($values, array("from" => $fromAccount->name, "to" => $toAccount->name));
                                            $count++;
                                            $slNo++;
                                        ?>
                                    @endif
                                    <?php $count2=0; ?>
                                    @endif
                                @endforeach

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>
    @endif
<div class="row">
    <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-cogs"></i>Today's Stocks</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Branch Name</th>
                            <th>Total StocktIn</th>
                            <th>Total StocktOut</th>
                            <th>Total StocktTransfer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $slNo = 1;
                        ?>
                        @foreach($stocksBranch as $stockBranch)
                            <?php
                            $branchs = \App\Branch::find($stockBranch->branch);
                                    $reports = new \App\Report();
                                    $stockIn = $reports->getStockInTotal($stockBranch->branch);
                                    $stockOut = $reports->getStockOutTotal($stockBranch->branch);
                                    $stockTransfer = $reports->getStockTransferTotal($stockBranch->branch);
                            ?>
                            <tr>
                                <td>{{$slNo}}</td>
                                <td>{{$branchs->name}}</td>
                                <td>{{$stockIn[0]->totalStockIn}}</td>
                                <td>{{$stockOut[0]->totalStockOut}}</td>
                                <td>{{$stockTransfer[0]->totalStockTransfer}}</td>
                            </tr>
                            <?php
                            $slNo++;
                            ?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="scroller-footer">
                    <div class="pull-right">
                        <a href="{{URL::to('stocks/index')}}">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

    <div class="col-md-6">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-cogs"></i>Order Requisition</div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Party</th>
                            <th>Req Quantity</th>
                            <th>Issued</th>
                            <th>Remaining</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $slNo = 1;
                        ?>

                        @foreach($stockRequisitions as $requisition)
                            <?php
                                $branchName = \App\Branch::find($requisition->branch_id);
                                $subCategory = \App\SubCategory::find($requisition->product->sub_category_id);
                                $subCategoryName =  '('.$subCategory->name.')';
                            ?>
                            <tr>
                                <td>{{$slNo}}</td>
                                <td>{{$requisition->product->name."(".$requisition->product->category->name.")".$subCategoryName}}</td>
                                <td>{{$requisition->party->name}}</td>
                                <td>{{$requisition->requisition_quantity}}</td>
                                <td>{{$requisition->issued_quantity}}</td>
                                <td>{{$requisition->requisition_quantity-$requisition->issued_quantity}}</td>
                            </tr>
                            <?php
                            $slNo++;
                            ?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="scroller-footer">
                    <div class="pull-right">
                        <a href="{{URL::to('requisitions/')}}">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
</div>

    <style>
        @-webkit-keyframes blink {
            from {
                opacity: 1.0;
            }
            to {
                opacity: 0.0;
            }
        }
        .blink {
            -webkit-animation-name: blink;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(1.0, 0, 0, 1.0);
            -webkit-animation-duration: 1s;
            color: red;
            background-color: #FFB848;
        }
    </style>

@stop