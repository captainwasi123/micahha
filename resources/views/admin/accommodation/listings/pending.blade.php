@extends('admin.includes.master')
@section('title', 'Pending | Listings | Accommodation')
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
                                <th>Title</th>
                                <th>Address</th>
                                <th>Landlord</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Property Type</th>
                                <th>Timestamp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td><a href="{{route('admin.accommodation.members.profile')}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">Wasi</a></td>
                                <td>$50.0</td>
                                <td>
                                	<p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                </td>
                                <td>House</td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                	<a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                		<i class="fa fa-check text-success"></i> 
                                	</a>
                                	&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                     	<i class="fa fa-close text-danger"></i> 
                                 	</a>
                             	</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td><a href="{{route('admin.accommodation.members.profile')}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">Wasi</a></td>
                                <td>$50.0</td>
                                <td>
                                	<p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                </td>
                                <td>House</td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                	<a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                		<i class="fa fa-check text-success"></i> 
                                	</a>
                                	&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                     	<i class="fa fa-close text-danger"></i> 
                                 	</a>
                             	</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td><a href="{{route('admin.accommodation.members.profile')}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">Wasi</a></td>
                                <td>$50.0</td>
                                <td>
                                	<p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                </td>
                                <td>House</td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                	<a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                		<i class="fa fa-check text-success"></i> 
                                	</a>
                                	&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                     	<i class="fa fa-close text-danger"></i> 
                                 	</a>
                             	</td>
                            </tr>
                            
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