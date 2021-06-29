@extends('artist.includes.master')
@section('title', $title)
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">{{$title}}</h3>
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
                                <div class="white_box_tittle list_header">
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <!-- <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>Image</th>
                                                <th style=" width: 220px; ">Title</th>
                                                <th>Dimension (WxH)</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Timestamp</th>
                                                <th style=" width: 150px; ">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product_data as $key => $val)    
                                            <tr>
                                                
                                                <td>{{++$key}}</td>
                                                <td>
                                                    <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}" alt="" width="30px">
                                                </td>
                                                <td><a href="{{URL::to('landlord/listing/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">{{$val->title}}</a></td>
                                                <td>{{$val->img_width.'x'.$val->img_height}}</td>
                                                <td>{{'$'.number_format($val->price, 2)}}</td>
                                                <td>
                                                    <p class="cut-text" title="{{$val->description}}">{{substr($val->description,0,10)}}...</p>
                                                </td>
                                                <td>{{@$val->cat->name}}</td>
                                                <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                                <td>
                                                    <a onclick="return confirm_click();" href="{{route('landlord.list.delete',base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="delete" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash" style="color:#fff"></i> 
                                                    </a>
                                                    <a href="{{URL::to('landlord/listing/details/'.base64_encode($val->id))}}" title="Detail View" class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye" style="color:#fff"></i> 
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                    {{ $product_data->withQueryString()->links('pagination::bootstrap-4') }}
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