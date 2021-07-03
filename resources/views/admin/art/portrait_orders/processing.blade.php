@extends('admin.includes.master')
@section('title', 'Processing | Orders | Portrait Customization')
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
                                <th>Order#</th>
                                <th>Artist</th>
                                <th>Products</th>
                                <th>Total Price</th>
                                <th>Commission</th>
                                <th>Artist Earning</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val) 
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>{{$val->id}}</td>
                                    <td>
                                        <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->artist_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{empty($val->artist) ? '' : $val->artist->first_name}} 
                                            {{empty($val->artist) ? '' : $val->artist->last_name}} 
                                        </a>
                                    </td>
                                    <td>
                                        <p>
                                            <img src="{{URL::to('/public/storage/art/portfolio/')}}/{{$val->product->image}}"  width="40px" />
                                            {{$val->product->title}}
                                        </p>
                                    </td>
                                    <td>
                                        <strong>{{'$'.number_format($val->price, 2)}}</strong> 
                                    </td>
                                    <td>
                                        <strong>{{'$'.number_format((($val->price/100)*$com), 2)}}</strong> 
                                    </td>
                                    <td>
                                        <strong>{{'$'.number_format(($val->price - (($val->price/100)*$com)), 2)}}</strong> 
                                    </td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                </tr>
                                @php $s++; @endphp
                            @endforeach
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