@extends('admin.includes.master')
@section('title', 'Profile | Members | Accommodation')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{URL::to('/public/admin')}}/assets/images/users/5.jpg" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-original-title="Listings">
                                <i class="mdi mdi-home-outline"></i> <font class="font-medium">10</font>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-original-title="Bookings">
                                <i class="mdi mdi-calendar-multiple-check"></i> <font class="font-medium">45</font>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-original-title="Rating">
                                <i class="mdi mdi-star-outline"></i> <font class="font-medium">4.8</font>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-body"> <small class="text-muted">Email address </small>
                <h6>hannagover@gmail.com</h6> <small class="text-muted p-t-30 db">Phone</small>
                <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                
                <small class="text-muted p-t-30 db">Social Profile</small>
                <br/>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#booking" role="tab">Bookings</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#listing" role="tab">Listings</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="booking" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bookingTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S#</th>
                                        <th>Tenant</th>
                                        <th>Property Type</th>
                                        <th>Address</th>
                                        <th>Duration</th>
                                        <th>Guest</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Wasi</td>
                                        <td>House</td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>6 nights</td>
                                        <td>4</td>
                                        <td>
                                            $250
                                        </td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Wasi</td>
                                        <td>House</td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>6 nights</td>
                                        <td>4</td>
                                        <td>
                                            $250
                                        </td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Wasi</td>
                                        <td>House</td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>6 nights</td>
                                        <td>4</td>
                                        <td>
                                            $250
                                        </td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="listing" role="tabpanel">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="listingTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S#</th>
                                        <th>Title</th>
                                        <th>Address</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Property Type</th>
                                        <th>Status</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>$50.0</td>
                                        <td>
                                            <p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                        </td>
                                        <td>House</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>$50.0</td>
                                        <td>
                                            <p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                        </td>
                                        <td>House</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="{{route('admin.accommodation.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                        <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                        <td>$50.0</td>
                                        <td>
                                            <p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</p>
                                        </td>
                                        <td>House</td>
                                        <td><span class="badge badge-primary">Pending</span></td>
                                        <td>29-May-2021 8:11 pm</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="reviews" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">

                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{URL::to('/public/admin')}}/assets/images/users/3.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                    </div>
                                    <div class="like-comm m-t-20">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i> 
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="sl-item">
                                <div class="sl-left"> <img src="{{URL::to('/public/admin')}}/assets/images/users/3.jpg" alt="user" class="img-circle" /> </div>
                                <div class="sl-right">
                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                    </div>
                                    <div class="like-comm m-t-20">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i> 
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@endsection

@section('addScript')
    <!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#bookingTable').DataTable();
        $('#listingTable').DataTable();
    });
    </script>
@endsection