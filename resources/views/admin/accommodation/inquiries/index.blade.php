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
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Inquiry to</th> 
                                <th>Timestamp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#inquiryDetail-modal"><i class="mdi mdi-arrow-expand-all"></i></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#inquiryDetail-modal"><i class="mdi mdi-arrow-expand-all"></i></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#inquiryDetail-modal"><i class="mdi mdi-arrow-expand-all"></i></a></td>
                            </tr>
                            
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
                    <h4 class="modal-title"> << Inquiry Subject Here >>&nbsp;&nbsp;<small>5 minutes ago</small></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 b-b b-r"> <strong>Phone</strong>
                            <br>
                            <p class="text-muted m-b-0"><i class="mdi mdi-cellphone-android"></i> 123 456 7890</p>
                        </div>
                        <div class="col-md-6 col-xs-6 b-b b-r"> <strong>Email</strong>
                            <br>
                            <p class="text-muted m-b-0"><i class="mdi mdi-email-outline"></i> johnathan@admin.com</p>
                        </div>
                    </div>
                    <div class="row p-t-10">
                        <div class="col-md-6 col-xs-6 b-r"> <strong>Subject</strong>
                            <br>
                            <p class="text-muted m-b-0"><i class="mdi mdi-cellphone-android"></i> Request a Tour</p>
                        </div>
                        <div class="col-md-6 col-xs-6 b-r"> <strong>Inquiry To</strong>
                            <br>
                            <p class="text-muted m-b-0"><i class="mdi mdi-email-outline"></i> Khawaja House</p>
                        </div>
                    </div>
                    <hr>
                    <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
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