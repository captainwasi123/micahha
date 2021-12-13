@extends('admin.includes.master')
@section('title', 'Order Details | Sales | Collectibles')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>Order</b> <span class="pull-right">#{{$data->id}}</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <address>
                            <h3> &nbsp;<b class="text-danger">Micahha</b></h3>
                            <p class="text-muted m-l-5">E 104, Dharti-2,
                                <br/> Nr Viswakarma Temple,
                                <br/> Talaja Road,
                                <br/> Bhavnagar - 364002</p>
                        </address>
                    </div>
                    <div class="pull-right text-right">
                        <address>
                            <h3>To,</h3>
                            <h4 class="font-bold">{{$data->invoice->delivery->first_name.' '.$data->invoice->delivery->last_name}},</h4>
                            <p class="text-muted m-l-30">{{$data->invoice->delivery->address}},
                                <br/> {{$data->invoice->delivery->city}}, {{$data->invoice->delivery->state}}
                                <br/> {{$data->invoice->delivery->country->nicename}},
                                <br/> -{{$data->invoice->delivery->postcode}}</p>
                            <p class="m-t-30"><b>Order Date :</b> <i class="fa fa-calendar"></i> {{date('d-M-Y', strtotime($data->created_at))}}</p>
                        </address>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive m-t-30" style="clear: both;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-right">Quantity</th>
                                    <th class="text-right">Unit Cost</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data->details as $key => $val)
                                    <tr>
                                        <td class="text-center">{{++$key}}</td>
                                        <td>{{$val->product->title}}</td>
                                        <td class="text-right"><strong>{{$val->qty}}</strong>x</td>
                                        <td class="text-right"> ${{number_format($val->price,2)}} </td>
                                        <td class="text-right"> ${{number_format($val->sub_total,2)}} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pull-right m-t-30 text-right">
                        <p>Sub - Total amount: ${{number_format($data->price,2)}}</p>
                        <p>vat (15%) : ${{number_format($data->gst,2)}} </p>
                        <hr>
                        <h3><b>Total :</b> ${{number_format($data->total_amount,2)}}</h3>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-right">
                        <button id="print" class="btn btn-default" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('addStyle')
@endsection
@section('addScript')
<script src="{{URL::to('/public/admin/')}}/js/jquery.PrintArea.js" type="text/JavaScript"></script>
<script>
$(document).ready(function() {
    $("#print").click(function() {
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = {
            mode: mode,
            popClose: close
        };
        $("div.printableArea").printArea(options);
    });
});
</script>
@endsection