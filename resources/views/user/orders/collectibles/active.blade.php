@extends('user.includes.master')
@section('title', 'Active | Collectibles | My Orders')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Active | Collectibles | My Orders</h3>
                                    @if(session()->has('success'))
                                        <div class="alert text-white bg-success mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Success!</b> {{ session()->get('success') }}</div>
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert text-white bg-danger mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Alert!</b> {{ session()->get('error') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pt-3">
                            <div class="QA_section">
                                <div class="QA_table mb_10">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th style=" width: 150px; ">Order#</th>
                                                <th>No. of Items</th>
                                                <th>Amount</th>
                                                <th>GST</th>
                                                <th>Total Amount</th>
                                                <th>Order at</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $val)    
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$val->id}}</td>
                                                <td>{{count($val->details)}}</td>
                                                <td>${{number_format($val->price,2)}}</td>
                                                <td>${{number_format($val->gst,2)}}</td>
                                                <td>${{number_format($val->total_amount,2)}}</td>
                                                <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                                <td>
                                                    @if($val->status == '1')
                                                        <label class="badge badge-warning">Pending</label>
                                                    @else
                                                        <label class="badge badge-primary">Progress</label>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    
                </div>
            </div>
        </div>
@endsection

@section('addScript')
	<!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script type="text/javascript">
function confirm_click()
{
return confirm("Are you sure ?");
}

</script> 
@endsection