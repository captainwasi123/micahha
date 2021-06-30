@extends('artist.includes.master')
@section('title', 'Pending | Porfolio | Artist')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_0">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Pending | Porfolio | Artist</h3>
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
                                <div class="QA_table mb_0 mt-0">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>Image</th>
                                                <th style=" width: 220px; ">Title</th>
                                                <th>No. of Subjects</th>
                                                <th>Delivery Time</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Portrait Type</th>
                                                <th>Timestamp</th>
                                                <th style=" width: 150px; ">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $val)    
                                            <tr>
                                                
                                                <td>{{++$key}}</td>
                                                <td>
                                                    <img src="{{URL::to('/public/storage/art/portfolio/')}}/{{$val->image}}" alt="" width="30px">
                                                </td>
                                                <td><a href="{{URL::to('landlord/listing/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">{{$val->title}}</a></td>
                                                <td>{{$val->no_of_subject}}</td>
                                                <td>{{$val->delivery_time.' days'}}</td>
                                                <td>{{'$'.number_format($val->price, 2)}}</td>
                                                <td>
                                                    <p class="cut-text" title="{{$val->description}}">{{substr($val->description,0,10)}}...</p>
                                                </td>
                                                <td>{{@$val->portrait_type->name}}</td>
                                                <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                                <td>
                                                    <a href="{{route('artist.portfolio.edit',base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="delete" class="btn btn-info btn-sm" >
                                                        <i class="fas fa-edit" style="color:#fff"></i>
                                                    </a>
                                                    <a onclick="return confirm_click();" href="{{route('artist.portfolio.delete',base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="delete" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash" style="color:#fff"></i> 
                                                    </a>
                                                </td>
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