@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-0 text-left detail_heading">
                    <a class="image-popup-vertical-fit" href="{{URL::to('/public/storage/listing/main/'.$listing->feature_img)}}" title="{{$listing->title}}"> 
                        <img src="{{URL::to('/public/storage/listing/main/'.$listing->feature_img)}}" alt="image" class="img-responsive" /> 
                    </a>
                    <h3 class="m-t-10 m-b-0">{{$listing->title}}</h3>
                    <small class="text-muted db">
                        <span class="fa fa-map-marker"></span>
                        <span>{{empty($listing->address) ? '' : $listing->address->address.', '.$listing->address->city.', '.$listing->address->state.', '.$listing->address->country->country.'. '.$listing->address->post_code}}</span>
                    </small>

                    <div class="row text-center m-t-10 justify-content-md-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" title="Gallery Images">
                                <i class="ti-gallery"></i> <font class="font-medium">{{count($listing->galleryImages)}}</font>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" title="Bookings">
                                <i class="ti-calendar"></i> <font class="font-medium">45</font>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" title="Rating">
                                <i class="ti-star"></i> <font class="font-medium">4.8</font>
                            </a>
                        </div>
                    </div>
                </center>
            </div>
            <div>
                <hr class="m-t-0 m-b-0"> 
            </div>
            <div class="card-body">
                <h5>Amenities</h5>
                <ul class="list-group list-group-flush">
                    @foreach($listing->amenities as $val)
                        <li class="list-group-item p-1">
                            <i class="ti-control-play"></i> {{$val->amenities->name}}
                        </li>
                    @endforeach
                    @if(count($listing->amenities) == '0')
                        <li class="list-group-item p-1">
                            No Amenitites
                        </li>
                    @endif
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
                                <p class="text-muted">
                                    {{empty($listing->landlord) ? '' : $listing->landlord->first_name}} 
                                    {{empty($listing->landlord) ? '' : $listing->landlord->last_name}} 
                                </p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                <br>
                                <p class="text-muted m-b-0">
                                    @if(!empty($listing->landlord->phone))
                                        <i class="mdi mdi-cellphone-android"></i> {{$listing->landlord->phone}}
                                    @endif
                                </p>
                                <p class="text-muted m-b-0">
                                    <i class="mdi mdi-email-outline"></i>
                                    {{empty($listing->landlord->email) ? '-' : $listing->landlord->email}}
                                </p>
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Location</strong>
                                <br>
                                <p class="text-muted">{{empty($listing->address) ? '' : $listing->address->address.', '.$listing->address->city.', '.$listing->address->state.', '.$listing->address->country->country.'. '.$listing->address->post_code}}</p>
                            </div>
                            <div class="col-md-2 col-xs-6"> <strong>Price</strong>
                                <br>
                                <h2 class="m-b-0">${{number_format($listing->price, 2)}}</h2>
                                <p class="text-muted m-b-0">{{$listing->unit}}</p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-30">
                            {{$listing->description}}
                        </p>
                        
                    </div>
                </div>

                <div class="tab-pane" id="gallery" role="tabpanel">
                    <div class="card-body">
                        <div class="popup-gallery row m-t-0">
                            @foreach($listing->galleryImages as $val)
                                <div class="col-md-4 m-b-25">
                                    <a href="{{URL::to('/public/storage/listing/gallery/'.$val->id.'-'.$val->image)}}"> <img src="{{URL::to('/public/storage/listing/gallery/'.$val->id.'-'.$val->image)}}" class="img-responsive" alt="img" /> </a>
                                </div>
                            @endforeach
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