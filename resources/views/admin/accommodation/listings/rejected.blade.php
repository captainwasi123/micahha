@extends('admin.includes.master')
@section('title', 'Rejected | Listings | Accommodation')
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
                                <th>Title</th>
                                <th>Address</th>
                                <th>Landlord</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Property Type</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val) 
                                @php 
                                    $address = empty($val->address) ? '' : $val->address->address.', '.$val->address->city.', '.$val->address->state.', '.$val->address->country->country.'. '.$val->address->post_code;
                                @endphp
                                <tr>
                                    <td>1</td>
                                    <td><a href="{{URL::to('/admin/accommodation/listing/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                    <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                    <td><a href="{{URL::to('/admin/accommodation/members/profile/'.base64_encode($val->landlord_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">Wasi</a></td>
                                    <td>$50.0</td>
                                    <td>
                                    	<p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                    </td>
                                    <td>House</td>
                                    <td>29-May-2021 8:11 pm</td>
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