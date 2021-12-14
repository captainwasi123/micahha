@extends('admin.includes.master')
@section('title', 'Filter | Sales | Collectibles')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <form action="" method="post" class="form-horizontal">
                @csrf
                <h3 class="add-lead-head">Filter Leads</h3>
                <div class="row m-t-30">
                   
                    <div class="col-md-4">
                            <label>Order#</label>                                                        
                                <input type="number" class="form-control" name="id" value="{{@$search['id']}}" >
                    </div>
                    <div class="col-md-4">
                            
                              <label>Supplier-Name</label> 
                                <select class="form-control custom-select" name="seller_id">
                                    <option value="">Supplier *</option>
                                    @foreach($suppliers as $val)
                                        <option value="{{$val->id}}" 
                                            @if(!empty($search['seller_id']))
                                                {{$search['seller_id'] == $val->id ? 'selected' : ''}}
                                            @endif
                                        >
                                          {{$val->name}}
                                    </option>
                                    @endforeach
                                </select>
                           
                    </div>
                     <div class="col-md-4">
                            <label>Bayer Name</label>                                                        
                                <input type="text" class="form-control" name="first_name"  value="{{@$search['first_name']}}">
                    </div>


                </div>
                <div class="row m-t-20">
                   
                     <div class="col-md-4">
                            <label>Bayer Email</label>                                                        
                                <input type="email" class="form-control" name="email"  value="{{@$search['email']}}">
                    </div>
                     <div class="col-md-4">
                            <label>Bayer Phone </label>                                                        
                                <input type="text" class="form-control" name="phone"  value="{{@$search['phone']}}">
                    </div>
             
                  
                    <div class="col-md-4">
                        
                                <label>Status</label> 
                                <select class="form-control custom-select" name="status" value="{{@$search['status']}}">
                                    <option value="">Status *</option>
                                       
                                        <option value="1" {{!empty($search['status']) && $search['status'] == '1' ? 'selected' : ''}}>Pending</option>
                                        <option value="2" {{!empty($search['status']) && $search['status'] == '2' ? 'selected' : ''}}>Progress</option>
                                        <option value="3" {{!empty($search['status']) && $search['status'] == '3' ? 'selected' : ''}}>Delivered</option>
                                        <option value="4" {{!empty($search['status']) && $search['status'] == '4' ? 'selected' : ''}}>Cancelled</option>

                                       

                                    
                                </select>
                    </div>
                </div>
                <button type="submit" class="btn  btn-info m-t-20">Filter</button>
                <a href=""  class="btn  btn-warning m-t-20">Reset</a>
            </form>
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                    @endif
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-10 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order#</th>
                                <th>Supplier Name</th>
                                <th>Bayer Name</th>
                                <th>Bayer Email</th>
                                <th>Bayer Phone</th>
                                <th>Products</th>
                                <th>Amount</th>
                                <th>GST</th>
                                <th>Total Amount</th>
                                <th>Created at</th>
                                <th >Status</th>
                            </tr>
                        </thead>
                        <tbody>artist
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
                                    <td >
                                    @switch($val->status)
                                            @case('1')
                                                <label class="label label-info">Pending</label>
                                                @break

                                            @case('2')
                                                <label class="label label-success">Progress</label>
                                                @break

                                            @case('3')
                                                <label class="label label-danger">Delivered</label>
                                                @break
                                             @case('4')
                                                <label class="label label-danger">Cancelled</label>
                                                @break

                                        @endswitch
                                        {{--  <a href="{{URL::to('/admin/collectibles/sales/orderDetail/'.base64_encode($val->id))}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="View Details"><i class="fa fa-list" aria-hidden="true"></i></a>

                                        <button type="button" class="btn btn-sm btn-info processSale" data-toggle="tooltip" data-original-title="Process" data-id="{{base64_encode($val->id)}}"><i class="fa fa-check" aria-hidden="true"></i></button>  --}}
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