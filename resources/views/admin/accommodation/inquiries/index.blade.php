@extends('admin.includes.master')
@section('title', 'Inquiries | Accommodation')
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Inquiry to</th> 
                                <th>Timestamp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>{{$val->username}}</td>
                                    <td><a href="mailto:{{$val->email}}">{{$val->email}}</a></td>
                                    <td>{{empty($val->type) ? '' : $val->type->name}}</td>
                                    <td><p class="cut-text" title="{{$val->details}}">{{$val->details}}</td>
                                    <td>
                                        <a href="{{URL::to('/admin/accommodation/listing/details/'.base64_encode($val->listing->id))}}" data-toggle="tooltip" data-original-title="View Details">
                                            {{$val->listing->title}}
                                        </a>
                                    </td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td><a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" class="openInquiry"><i class="mdi mdi-arrow-expand-all"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Inquiry Detail Modal -->
    <div id="inquiryDetail-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> Inquiry Details&nbsp;&nbsp;</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="inquiry_block">
                    
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