@extends('admin.includes.master')
@section('title', 'Detail | Product | Art')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-0 text-left">
                    <a class="image-popup-vertical-fit" href="{{URL::to('/public/storage/listing/main/'.$data->feature_img)}}" title="{{$data->title}}">
                        <img src="{{URL::to('/public/storage/art/main/thumbnail/'.$data->image)}}" alt="image" class="img-responsive" /> 
                    </a>
                    <h3 class="m-t-10 m-b-0">{{$data->title}}</h3>
                    <small class="text-muted db">
                        <span>{{empty($data->cat) ? '' : $data->cat->name}}</span>
                    </small>
                </center>
            </div>
            <div>
                <hr class="m-t-0"> 
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
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="profile" role="tabpanel">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Artist</strong>
                                <br>
                                <p class="text-muted">
                                    {{empty($data->artist) ? '' : $data->artist->first_name}} 
                                    {{empty($data->artist) ? '' : $data->artist->last_name}} 
                                </p>
                            </div>
                            <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                <br>
                                <p class="text-muted m-b-0">
                                    @if(!empty($data->artist->phone))
                                        <i class="mdi mdi-cellphone-android"></i> {{$data->artist->phone}}
                                    @endif
                                </p>
                                
                            </div>
                            <div class="col-md-4 col-xs-6 b-r"> <strong>Email</strong>
                                <p class="text-muted m-b-0">
                                    <i class="mdi mdi-email-outline"></i>
                                    {{empty($data->artist->email) ? '-' : $data->artist->email}}
                                </p>
                            </div>
                            <div class="col-md-2 col-xs-6"> <strong>Price</strong>
                                <br>
                                <h2 class="m-b-0">${{number_format($data->price, 2)}}</h2>
                                <p class="text-muted m-b-0">{{$data->unit}}</p>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-30">
                            {{$data->description}}
                        </p>
                        
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