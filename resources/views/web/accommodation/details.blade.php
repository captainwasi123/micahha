@extends('web.includes.master')
@section('title', 'Accommodations')
@section('addStyle')
<style type="text/css">
   .header-bottom {
      display: none;
   }
</style>
@endsection
@section('filter')
         <div class="accomodation-tags">
            <div class="container">
               <span> Accomodation </span>   
               <span> NSW </span>
               <span> Houses </span>
               <span> 2 Rooms </span>
               <span> 4 Rooms </span>
               <span> 2 Bathrooms </span>
               <span> 1 Parking </span>
            </div>
         </div>
@endsection
@section('content')
   <!-- Accomodation Entry Details Section Starts Here -->
      <section class="pad-top-40">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                  <div class="apartment-name m-b-10">
                     <h3 class="col-black"> {{$list_data->type->name}} </h3>
                     <p> {{$list_data->address->accommodation_id}}, {{$list_data->address->city}}, {{$list_data->address->state}}, {{$list_data->address->post_code}}, {{$list_data->address->country->nicename}} </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7 col-lg-8 col-sm-12 col-12">
                  <div class="image-slider arrows-2">
                     <div>
                        <img src="{{URL::to('/public/storage/listing/main/')}}/{{$list_data->feature_img}}">
                        <span class="apartment-tags">
                        <b> <img src="{{URL::to('/public/website')}}/images/bed-icon-white.png"> 2 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/tub-icon-white.png"> 2 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/car-icon-white.png"> 1 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/sofa-icon-white.png"> 1 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/users-icon-white.png"> 3 </b>
                        </span>
                     </div>
                     @foreach($list_data->galleryImages as $gallery_images)
                     <div>
                        <img src="{{URL::to('/public/storage/listing/gallery/'.$gallery_images->id.'-'.$gallery_images->image)}}">
                        <span class="apartment-tags">
                        <b> <img src="{{URL::to('/public/website')}}/images/bed-icon-white.png"> 2 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/tub-icon-white.png"> 2 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/car-icon-white.png"> 1 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/sofa-icon-white.png"> 1 </b>
                        <b> <img src="{{URL::to('/public/website')}}/images/users-icon-white.png"> 3 </b>
                        </span>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-5 col-lg-4 col-sm-12 col-12">
                  <div class="apartment-title">
                     <h5 class="alegraya col-black"> {{$list_data->title}} <span> {{'$'.number_format($list_data->price, 2)}} </span> </h5>
                  </div>
                  <div class="apartment-features">
                     <div class="alegraya m-b-20">
                        @foreach($list_data->amenities as $amenities)
                        <span> <img src="{{URL::to('/public/website')}}/images/apartment-icon1.jpg"> {{$amenities->amenities->name}} </span>
                        @endforeach
                     </div>
                     <!-- <h6 class="alegraya"> BUILDING </h6>
                     <div class="alegraya m-t-10">
                        <span> <img src="images/apartment-icon1.jpg"> DISHWASHER </span>
                        <span> <img src="images/apartment-icon2.jpg"> FURNISHED </span>
                        <span> <img src="images/apartment-icon3.jpg"> MICROWAVE </span>
                        <span> <img src="images/apartment-icon4.jpg"> PANTRY </span>
                        <span> <img src="images/apartment-icon5.jpg"> RENOVATED </span>
                        <span> <img src="images/apartment-icon6.jpg"> LINEN CLOSET </span>
                     </div> -->
                  </div>
                  <div class="apartment-actions">
                     <a href="" class="custom-btn4"> Request a Tour </a>
                     <a href="" class="custom-btn4"> Book Now </a>
                     <a href="" class="custom-btn4"> Enquiry </a>
                  </div>
                  <div class="description-field">
                     <h5> Description </h5>
                     <p>{{$list_data->description}}</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Accomodation Entry Details Section Ends Here -->
      <!-- What We Offer Section Starts Here -->
      <section class="pad-top-40 pad-bot-20">
         <div class="container">
            <div class="sec-head2">
               <h3 class="col-black alegraya"> Similar Properties You May Like </h3>
            </div>
            <div class="row margin-1">
            @foreach($rendom_list as $list_val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                 <div class="item-box">
                  <div class="image-slider arrows-3">
                     <div> <img src="{{URL::to('/public/storage/listing/main/')}}/{{$list_val->feature_img}}"> </div>
                     @foreach($list_val->galleryImages as $gallery_images)
                        <div> <img src="{{URL::to('/public/storage/listing/gallery/'.$gallery_images->id.'-'.$gallery_images->image)}}"> </div>
                     @endforeach
                  </div>
                     <a href="{{route('accommodation.details',base64_encode($list_val->id))}}">
                     <div class="prop-box-text">
                        <h4> {{'$'.number_format($list_val->price, 2)}} {{$list_val->unit}} </h4>
                        <p> {{$list_val->address->accommodation_id}}, {{$list_val->address->city}}, {{$list_val->address->state}}, {{$list_val->address->post_code}}, {{$list_val->address->country->nicename}} </p>
                        <h6> 
                           <span> <img src="{{URL::to('/public/website')}}/images/bed-icon.png">  2 </span> 
                           <span> <img src="{{URL::to('/public/website')}}/images/tub-icon.png">  2 </span> 
                           <span> <img src="{{URL::to('/public/website')}}/images/car-icon.png">  1 </span> 
                           <span> <img src="{{URL::to('/public/website')}}/images/sofa-icon.png">  1 </span> 
                           <span> <img src="{{URL::to('/public/website')}}/images/users-icon.png">  3 </span> 
                        </h6>
                     </div>
                     </a>
                  </div>
               </div>
            @endforeach   
            </div>
         </div>
         </div>
      </section>
      <!-- What We Offer Section Ends Here -->
@endsection