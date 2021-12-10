@extends('admin.includes.master')
@section('title', 'New Orders | Sales | Collectibles')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-10 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order#</th>
                                <th>Supplier</th>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Products</th>
                                <th>Amount</th>
                                <th>GST</th>
                                <th>Total Amount</th>
                                <th>Created at</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $val)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$val->id}}</td>
                                    <td>{{@$val->supplier->name}}</td>
                                    <td>
                                        <a href="javascript:void(0)">{{$val->invoice->delivery->first_name.' '.$val->invoice->delivery->last_name}}</a>
                                    </td>
                                    <td>
                                        <a href="mailto:{{$val->invoice->delivery->email}}">
                                            {{$val->invoice->delivery->email}}
                                        </a>
                                    </td>
                                    <td><a href="tel:{{$val->invoice->delivery->phone}}">{{$val->invoice->delivery->phone}}</a></td>
                                    <td>{{count($val->details)}}</td>
                                    <td>${{number_format($val->price, 2)}}</td>
                                    <td>${{number_format($val->gst, 2)}}</td>
                                    <td><strong>${{number_format($val->total_amount, 2)}}</strong></td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td class="text-right">
                                        <a href="{{URL::to('/admin/collectibles/sales/orderDetail/'.base64_encode($val->id))}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="View Details"><i class="fa fa-list" aria-hidden="true"></i></a>

                                        <button type="button" class="btn btn-sm btn-info processSale" data-toggle="tooltip" data-original-title="Process" data-id="{{base64_encode($val->id)}}"><i class="fa fa-check" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            @if(count($data) == 0)
                                <tr>
                                    <td colspan="9">No orders Found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('addScript')
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '.processSale', function(){
            var id = $(this).data('id');
            
            if(confirm('Are you sure want to reject this.?')){
                window.location.href = "{{URL::to('admin')}}/collectibles/sales/process/"+id;
            }
        });
    })
</script>
@endsection