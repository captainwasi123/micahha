@extends('admin.includes.master')
@section('title', 'Profile | Members | Accommodation')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{URL::to('/public/storage/users/'.$data->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';" class="img-circle" width="150" />
                    <h4 class="card-title m-t-10">
                        {{$data->first_name}} 
                        {{$data->last_name}}
                    </h4>
                    <h6 class="card-subtitle">
                        Artist
                    </h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-original-title="Listings">
                                <i class="mdi mdi-home-outline"></i> <font class="font-medium">{{count($data->listings)}}</font>
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
            <div class="card-body"> 
                <small class="text-muted">Email address </small>
                <h6>{{$data->email}}</h6> 

                <small class="text-muted p-t-30 db">Phone</small>
                <h6>{{$data->phone}}</h6> 

                <small class="text-muted p-t-30 db">Address</small>
                <h6>
                    {{!empty($data->address) ? $data->address.', ' : ''}}
                    {{!empty($data->city) ? $data->city.', ' : ''}}
                    {{!empty($data->state) ? $data->state.', ' : ''}}
                    {{!empty($data->country) ? $data->country->country.'. ' : ''}}
                    {{!empty($data->post_code) ? $data->post_code : ''}}
                </h6>
                
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#booking" role="tab">Orders</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#listing" role="tab">Products</a> </li>
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
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Artist</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $s=1; @endphp
                                    @foreach($data->products as $val)
                                        <tr>
                                            <td>{{$s}}</td>
                                            <td>
                                                <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}" alt="" width="30px">
                                            </td>
                                            <td><a href="{{URL::to('/admin/art/product/details/'.base64_encode($val->id))}}" data-toggle="tooltip" data-original-title="View Details">{{$val->title}}</a></td>
                                            <td>
                                                <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->artist_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                                    {{empty($val->artist) ? '' : $val->artist->first_name}} 
                                                    {{empty($val->artist) ? '' : $val->artist->last_name}} 
                                                </a>
                                            </td>
                                            <td>
                                                <strong>{{'$'.number_format($val->price, 2)}}</strong> 
                                                <small>{{$val->unit}}</small>
                                            </td>
                                            <td>
                                                <p class="cut-text" title="{{$val->description}}">
                                                    {{$val->description}}   
                                                </p>
                                            </td>
                                            <td>{{empty($val->cat) ? '' : $val->cat->name}}</td>
                                            <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                        </tr>
                                        @php $s++; @endphp
                                    @endforeach
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
    });
    </script>
@endsection