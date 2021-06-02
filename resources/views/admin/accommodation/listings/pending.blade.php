@extends('admin.includes.master')
@section('title', 'Pending | Listings | Accommodation')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Landlord</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Property Type</th>
                                <th>Timestamp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val) 
                                @php 
                                    $address = empty($val->address) ? '' : $val->address->address.', '.$val->address->city.', '.$val->address->state.', '.$val->address->country->country.'. '.$val->address->post_code;
                                @endphp
                                <tr>
                                    <td>{{$s}}</td>
                                    <td><a href="{{URL::to('/admin/accommodation/listing/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">{{$val->title}}</a></td>
                                    <td>
                                        <p class="cut-text" title="{{$address}}">
                                            {{$address}}
                                        </p></td>
                                    <td>
                                        <a href="{{route('admin.accommodation.members.profile')}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{empty($val->landlord) ? '' : $val->landlord->first_name}} 
                                            {{empty($val->landlord) ? '' : $val->landlord->last_name}} 
                                        </a></td>
                                    <td><strong>{{'$'.number_format($val->price, 2)}}</strong> <small>{{$val->unit}}</small></td>
                                    <td>
                                    	<p class="cut-text" title="{{$val->description}}">
                                            {{$val->description}}   
                                        </p>
                                    </td>
                                    <td>{{empty($val->type) ? '' : $val->type->name}}</td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td> 
                                    	<a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                    		<i class="fa fa-check text-success"></i> 
                                    	</a>
                                    	&nbsp;&nbsp;
                                        <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                         	<i class="fa fa-close text-danger"></i> 
                                     	</a>
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