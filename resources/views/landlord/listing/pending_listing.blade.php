@extends('landlord.includes.master')
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
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>Title</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Property Type</th>
                                                <th>Timestamp</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($listing_data as $key => $listing)    
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td><a href="{{route('landlord.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">{{$listing->title}}</a></td>
                                                <td><p class="cut-text" title="{{$listing->address->address}}">{{substr($listing->address->address,0,15)}}...</p></td>
                                                <td>{{'$'.number_format($listing->price, 2)}}</td>
                                                <td>
                                                    <p class="cut-text" title="{{$listing->description}}">{{substr($listing->description,0,10)}}...</p>
                                                </td>
                                                <td>{{@$listing->type->name}}</td>
                                                <td>{{date('d-M-Y h:i a', strtotime($listing->created_at))}}</td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-original-title="delete" style="color:red">
                                                        <i class="fas fa-trash"></i> 
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                    {{ $listing_data->withQueryString()->links('pagination::bootstrap-4') }}
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
@endsection