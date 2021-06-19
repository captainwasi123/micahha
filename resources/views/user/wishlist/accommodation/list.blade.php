@extends('user.includes.master')
@section('title', 'My Wishlist | Accommodation')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">My Wishlist | Accommodation</h3>
                                    @if(session()->has('success'))
                                        <div class="alert text-white bg-success mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Success!</b> {{ session()->get('success') }}</div>
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert text-white bg-danger mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Alert!</b> {{ session()->get('error') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body pt-3">
                            <div class="QA_section">
                                <div class="QA_table mb_10">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th style=" width: 300px; ">Property</th>
                                                <th>Landlord</th>
                                                <th>Type</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key => $val)    
                                            <tr>
                                                
                                                <td>{{++$key}}</td>
                                                <td>
                                                    <a href="" class="wishlist_title">
                                                        <img src="{{URL::to('/public/storage/listing/main/')}}/{{$val->listing->feature_img}}" width="40" height="40" class="img-circle">
                                                        <p>{{$val->listing->title}}</p>
                                                    </a>
                                                </td>
                                                <td>
                                                    {{empty($val->listing) ? '' : $val->listing->landlord->first_name.' '.$val->listing->landlord->last_name}}
                                                </td>
                                                <td>
                                                    {{empty($val->listing->type) ? '' : $val->listing->type->name}}
                                                </td>
                                                <td>
                                                    {{empty($val->listing->address) ? '' : $val->listing->address->address}}
                                                </td>
                                                <td>
                                                    {{empty($val->listing) ? '' : '$'.number_format($val->listing->price, 1)}}
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" data-id="{{base64_encode($val->id)}}" title="Remove" class="btn btn-warning btn-sm removeAccomWishlist">
                                                        <i class="fa fa-window-close" style="color:#fff"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    
                </div>
            </div>
        </div>
@endsection

@section('addScript')
	<!-- This is data table -->
    <script src="{{URL::to('/public/user/js/')}}/accommodation.js"></script> 
@endsection