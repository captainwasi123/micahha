@extends('admin.includes.master')
@section('title', 'Rejected | Members | Accommodation')
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
                                <th style="width:35px">Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Reg. at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td style="width:35px"><img src="{{URL::to('/public/admin/')}}/assets/images/dp-placeholder.jpg" alt="user" class="thumbnail" /></td>
                                    <td>
                                        <a href="{{route('admin.accommodation.members.profile')}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{$val->first_name}} 
                                            {{$val->last_name}}
                                        </a>
                                    </td>
                                    <td>{{$val->phone}}</td>
                                    <td><a href="mailto:{{$val->email}}">{{$val->email}}</a></td>
                                    <td>{{$val->country->country}}</td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td> 
                                        <a href="#" data-toggle="tooltip" data-original-title="Approve" class="btn btn-success btn-sm memberApprove" data-id="{{base64_encode($val->id)}}"> 
                                            <i class="fa fa-check"></i> 
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