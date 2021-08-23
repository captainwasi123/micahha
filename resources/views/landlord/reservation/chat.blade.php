@extends('landlord.includes.master')
@section('title', 'Order Chat | Accommodation')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-0 text-left detail_heading">
                    <a class="image-popup-vertical-fit" href="{{URL::to('/public/storage/listing/main/'.$order->listing->feature_img)}}" title="{{$order->listing->title}}"> 
                        <img src="{{URL::to('/public/storage/listing/main/'.$order->listing->feature_img)}}" alt="image" class="img-responsive" /> 
                    </a>
                    <h3 class="m-t-10 m-b-0">{{$order->listing->title}}</h3>
                    <small class="text-muted db">
                        <span class="fa fa-map-marker"></span>
                        <span>{{empty($order->listing->address) ? '' : $order->listing->address->address.', '.$order->listing->address->city.', '.$order->listing->address->state.', '.$order->listing->address->country->country.'. '.$order->listing->address->post_code}}</span>
                    </small>

                    <div class="row text-center m-t-10 justify-content-md-center">
                        <div class="col-4">
                            <a href="javascript:void(0)" class="link" title="Gallery Images">
                                <i class="ti-gallery"></i> <font class="font-medium">{{count($order->listing->galleryImages)}}</font>
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
                    @foreach($order->listing->amenities as $val)
                        <li class="list-group-item p-1">
                            <i class="ti-control-play"></i> {{$val->amenities->name}}
                        </li>
                    @endforeach
                    @if(count($order->listing->amenities) == '0')
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
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5>Order Details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Check-In</strong>
                        <br>
                        <p class="text-muted">
                            {{date('d-M-Y', strtotime($order->check_in))}}
                        </p>
                    </div>
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Check-Out</strong>
                        <br>
                        <p class="text-muted m-b-0">
                            {{date('d-M-Y', strtotime($order->check_out))}}
                        </p>
                    </div>
                    <div class="col-md-6 col-xs-6 b-r"> <strong>Guests</strong>
                        <br>
                        <p class="text-muted m-b-0">
                            Adults: {{number_format($order->no_of_people)}}&nbsp;&nbsp;|&nbsp;&nbsp; 
                            Children: {{number_format($order->children)}}&nbsp;&nbsp;|&nbsp;&nbsp;
                            Infants: {{number_format($order->infants)}}
                        </p>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <h5>Order Chat</h5>
                    </div>

                    <div class="col-12">
                        <div class="messages_box_area" id="talksall">
                            <div class="messages_chat mb_30">
                                <div class="white_box ">

                                    @foreach($data as $val)
                                        @if($val->user_id == Auth::id())
                                            <div class="single_message_chat sender_message">
                                                <div class="message_pre_left">
                                                    <div class="messges_info">
                                                        <h4>{{$val->user->first_name.' '.$val->user->last_name}}</h4>
                                                        <p>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</p>
                                                    </div>
                                                    <div class="message_preview_thumb">
                                                        <img src="{{URL::to('/public/storage/users/'.$val->user->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';" >
                                                    </div>
                                                </div>
                                                <div class="message_content_view">
                                                    <p>
                                                        {{$val->message}}
                                                    </p>
                                                </div>
                                            </div>
                                        @else
                                            <div class="single_message_chat">
                                                <div class="message_pre_left">
                                                    <div class="message_preview_thumb">
                                                        <img src="{{URL::to('/public/storage/users/'.$val->user->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';" >
                                                    </div>
                                                    <div class="messges_info">
                                                        <h4>{{$val->user->first_name.' '.$val->user->last_name}}</h4>
                                                        <p>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</p>
                                                    </div>
                                                </div>
                                                <div class="message_content_view red_border">
                                                    <p>
                                                        {{$val->message}}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <form method="post" action="{{route('landlord.reservation.sendchat')}}">
                                        <div class="message_send_field">
                                            @csrf
                                            <input type="hidden" name="order_id" value="{{base64_encode($order->id)}}">
                                            <input type="text" placeholder="Write your message" name="message" required>
                                            <button class="btn_1" type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#talksall').scrollTop($('#talksall').prop("scrollHeight"));
        });
    </script>
@endsection