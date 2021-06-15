@extends('user.includes.master')
@section('title', 'History | Accommodation | My Orders')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">History | Accommodation | My Orders</h3>
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
                        <div class="white_card_body pt-3">
                            <div class="QA_section">
                                <div class="QA_table mb_10">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th style=" width: 150px; ">Title</th>
                                                <th>Property Type</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Check-In</th>
                                                <th>Check-Out</th>
                                                <th>No. of Guest</th>
                                                <th>Booking at</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $listing)    
                                            <tr>
                                                
                                                <td>{{++$key}}</td>
                                                <td style="width: 150px;">
                                                    <a href="{{URL::to('landlord/listing/details/'.base64_encode($listing->listing->id))}}" data-toggle="tooltip" data-original-title="View Details" title="{{$listing->title}}">
                                                        {{substr($listing->listing->title,0,20)}}
                                                    </a>
                                                </td>
                                                <td>{{@$listing->listing->type->name}}</td>
                                                <td>
                                                    {{$listing->listing->address->address}}
                                                </td>
                                                <td>
                                                    {{'$'.number_format($listing->listing->price, 2)}}
                                                </td>
                                                <td>
                                                    {{date('d-M-Y', strtotime($listing->check_in))}}
                                                </td>
                                                <td>
                                                    {{date('d-M-Y', strtotime($listing->check_out))}}
                                                </td>
                                                <td>
                                                    {{$listing->no_of_people}}
                                                </td>
                                                <td>{{date('d-M-Y h:i a', strtotime($listing->listing->created_at))}}</td>
                                                <td>
                                                    @switch($listing->status)
                                                        @case('0')
                                                            <label class="badge badge-info">Pending</label>
                                                            @break

                                                        @case('1')
                                                            <label class="badge badge-primary">Reserved</label>
                                                            @break

                                                        @case('2')
                                                            <label class="badge badge-danger">Rejected</label>
                                                            @break

                                                        @case('3')
                                                            <label class="badge badge-warning">Cancelled</label>
                                                            @break
                                                    @endswitch
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