@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-0 text-left">
                    <a class="image-popup-vertical-fit" href="{{URL::to('/public/admin')}}/assets/images/big/img1.jpg" title="Property Listing Title"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img1.jpg" alt="image" class="img-responsive" /> </a>
                    <h3 class="m-t-10 m-b-0">Property Listing Title</h3>
                    <small class="text-muted db">
                        <span class="fa fa-map-marker"></span>
                        <span>71 Pilgrim Avenue Chevy Chase, MD 20815</span>
                    </small>

                    <div class="row text-center m-t-10 justify-content-md-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-original-title="Listings">
                                <i class="icon-picture"></i> <font class="font-medium">10</font>
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
                <hr class="m-t-0"> 
            </div>
            <div class="card-body">
                <h5>Amenities</h5>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item p-1"><i class="mdi mdi-air-conditioner"></i> Cras justo odio</li>
                  <li class="list-group-item p-1"><i class="mdi mdi-coffee-outline"></i> Dapibus ac facilisis in</li><li class="list-group-item p-1"><i class="mdi mdi-air-conditioner"></i> Cras justo odio</li>
                  <li class="list-group-item p-1"><i class="mdi mdi-coffee-outline"></i> Dapibus ac facilisis in</li><li class="list-group-item p-1"><i class="mdi mdi-air-conditioner"></i> Cras justo odio</li>
                  <li class="list-group-item p-1"><i class="mdi mdi-coffee-outline"></i> Dapibus ac facilisis in</li><li class="list-group-item p-1"><i class="mdi mdi-air-conditioner"></i> Cras justo odio</li>
                  <li class="list-group-item p-1"><i class="mdi mdi-coffee-outline"></i> Dapibus ac facilisis in</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#gallery" role="tab">Gallery</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Landlord</strong>
                                <br>
                                <p class="text-muted">Johnathan Deo</p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                <br>
                                <p class="text-muted m-b-0"><i class="mdi mdi-cellphone-android"></i> 123 456 7890</p>
                                <p class="text-muted m-b-0"><i class="mdi mdi-email-outline"></i> johnathan@admin.com</p>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Location</strong>
                                <br>
                                <p class="text-muted">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
                            </div>
                            <div class="col-md-2 col-xs-6"> <strong>Price</strong>
                                <br>
                                <h2 class="m-b-0">$35</h2>
                                <p class="text-muted m-b-0">per night</p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        
                    </div>
                </div>

                <div class="tab-pane" id="gallery" role="tabpanel">
                    <div class="card-body">
                        <div class="popup-gallery row m-t-0">
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img4.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img4.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img5.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img5.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img6.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img6.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img4.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img4.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img5.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img5.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
                            <div class="col-md-4 m-b-25">
                                <a href="{{URL::to('/public/admin')}}/assets/images/big/img6.jpg"> <img src="{{URL::to('/public/admin')}}/assets/images/big/img6.jpg" class="img-responsive" alt="img" /> </a>
                            </div>
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
@section('addStyle')
    <!-- Popup CSS -->
    <link href="{{URL::to('/public/admin')}}/assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

@endsection
@section('addScript')
    <!-- This is data table --><!-- Magnific popup JavaScript -->
    <script src="{{URL::to('/public/admin')}}/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{URL::to('/public/admin')}}/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
@endsection