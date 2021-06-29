@extends('artist.includes.master')
@section('title', 'Withdraw History | Artist')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Withdraw History</h3>
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
                        <div class="white_card_body">
                            <div class="QA_section">        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th style=" width: 60%; ">Amount</th>
                                                <th>Status</th>
                                                <th>Request at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $val)    
                                            <tr>
                                                
                                                <td>{{++$key}}</td>
                                                <td>{{number_format($val->amount, 2)}}$</td>
                                                <td>
                                                    @switch($val->status)
                                                        @case('0')
                                                            <label class="badge badge-info">Pending</label>
                                                            @break

                                                        @case('1')
                                                            <label class="badge badge-success">Paid</label>
                                                            @break

                                                        @case('2')
                                                            <label class="badge badge-warning">Hold</label>
                                                            @break
                                                    @endswitch
                                                </td>
                                                <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                    {{ $data->withQueryString()->links('pagination::bootstrap-4') }}
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