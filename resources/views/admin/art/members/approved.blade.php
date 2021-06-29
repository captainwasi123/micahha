@extends('admin.includes.master')
@section('title', 'Approved | Members | Art & Portrait Customization')
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Products</th>
                                <th>Orders</th>
                                <th>Reg. at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>
                                        <img src="{{URL::to('/public/storage/users/'.$val->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';" alt="user" class="thumbnail" />
                                    </td>
                                    <td>
                                        <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{$val->first_name}} {{$val->last_name}}
                                        </a>
                                    </td>
                                    <td>{{$val->phone}}</td>
                                    <td><a href="mailto:{{$val->email}}">{{$val->email}}</a></td>
                                    <td>
                                        <p class="cut-text" data-toggle="tooltip" data-original-title="{{!empty($val->address) ? $val->address.', ' : ''}}{{!empty($val->city) ? $val->city.', ' : ''}}{{!empty($val->state) ? $val->state.', ' : ''}}{{!empty($val->country) ? $val->country->country.'. ' : ''}}{{!empty($val->post_code) ? $val->post_code : ''}}
                                        ">
                                            {{!empty($val->address) ? $val->address.', ' : ''}}
                                            {{!empty($val->city) ? $val->city.', ' : ''}}
                                            {{!empty($val->state) ? $val->state.', ' : ''}}
                                            {{!empty($val->country) ? $val->country->country.'. ' : ''}}
                                            {{!empty($val->post_code) ? $val->post_code : ''}}
                                        </p>
                                    </td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td> 
                                        <a href="#" data-toggle="tooltip" data-original-title="Block" class=" btn btn-danger btn-sm memberBlockArt" data-id="{{base64_encode($val->id)}}">
                                         	<i class="fa fa-ban"></i> 
                                     	</a>
                                 	</td>
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