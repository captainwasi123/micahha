@extends('admin.includes.master')
@section('title', 'Rejected | Products | Art')
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
                                <th>Title</th>
                                <th>Artist</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Timestamp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val) 
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>
                                        <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}" alt="" width="30px">
                                    </td>
                                    <td><a href="{{URL::to('/admin/art/product/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">{{$val->title}}</a></td>
                                    <td>
                                        <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->artist_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                            {{empty($val->artist) ? '' : $val->artist->first_name}} 
                                            {{empty($val->artist) ? '' : $val->artist->last_name}} 
                                        </a>
                                    </td>
                                    <td>
                                        <strong>{{'$'.number_format($val->price, 2)}}</strong> 
                                        <small>{{$val->unit}}</small>
                                    </td>
                                    <td>
                                        <p class="cut-text" title="{{$val->description}}">
                                            {{$val->description}}   
                                        </p>
                                    </td>
                                    <td>{{empty($val->cat) ? '' : $val->cat->name}}</td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td> 
                                        <a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" class="productApproveArt" data-toggle="tooltip" data-original-title="Approve"> 
                                            <i class="fa fa-check text-success"></i> 
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