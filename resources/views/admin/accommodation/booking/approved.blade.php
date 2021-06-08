@extends('admin.includes.master')
@section('title', 'Approved | Bookings | Accommodation')
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
                                <th>Tenant</th>
                                <th>Landlord</th>
                                <th>Property Type</th>
                                <th>Address</th>
                                <th>Duration</th>
                                <th>Guest</th>
                                <th>Price</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s = 1; @endphp
                            @foreach($data as $val)
                                @php 
                                    $address = empty($val->listing->address) ? '' : $val->listing->address->address.', '.$val->listing->address->city.', '.$val->listing->address->state.', '.$val->listing->address->country->country.'. '.$val->listing->address->post_code;

                                    $duration = date_diff(date_create($val->check_in), date_create($val->check_out));
                                    $duration = $duration->format('%a');
                                @endphp
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>{{$val->user_name}}</td>
                                    <td><a href="{{URL::to('/admin/accommodation/members/profile/'.base64_encode($val->landlord_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                        {{empty($val->landlord) ? '' : $val->landlord->first_name}} 
                                        {{empty($val->landlord) ? '' : $val->landlord->last_name}}</a></td>
                                    <td>{{empty($val->listing->type) ? '' : $val->listing->type->name}}</td>
                                    <td>
                                        <p class="cut-text" data-toggle="tooltip" data-original-title="{{$address}}">
                                            {{$address}}
                                        </p>
                                    </td>
                                    <td>{{$duration.' nights'}}</td>
                                    <td>{{$val->no_of_people}}</td>
                                    <td>
                                        <strong>{{'$'.number_format($val->listing->price, 2)}}</strong> 
                                        <small>{{$val->listing->unit}}</small>
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