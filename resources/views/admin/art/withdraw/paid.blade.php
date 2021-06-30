@extends('admin.includes.master')
@section('title', 'Paid | Withdraw | Art')
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
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Artist</th>
                                <th>Bank</th>
                                <th>Account Number</th>
                                <th>Amount</th>
                                <th>Request at</th>
                            </tr>
                        </thead>
                        <tbody>
                             @php $s=1; @endphp
                            @foreach($data as $val) 
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>
                                        <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->user_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{empty($val->artist) ? '' : $val->artist->first_name}} 
                                            {{empty($val->artist) ? '' : $val->artist->last_name}} 
                                        </a>
                                    </td>
                                    <td>{{empty($val->artist) ? '' : $val->artist->bank_name}} </td>
                                    <td>{{empty($val->artist) ? '' : $val->artist->account_no}} </td>
                                    <td>
                                        <strong>{{'$'.number_format($val->amount, 2)}}</strong> 
                                    </td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                </tr>
                                @php $s++; @endphp
                            @endforeach
                            @if(count($data) == '0')
                                <tr>
                                    <td colspan="6">No Requests Found.</td>
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
	<!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
@endsection