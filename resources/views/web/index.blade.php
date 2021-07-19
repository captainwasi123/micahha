@extends('web.includes.master')
@section('title', 'Home')
@section('content')


   <!-- Banner Section Starts Here -->
   <section class="banner-sec">
      <div class="banner-video">
         <div style="width: 100%; height: 950px; margin-bottom: -900px;"></div>
         <iframe style="width: 100%; height: 950px; margin-top: -110px;" src="https://www.youtube.com/embed/bvLulz7QsLE?autoplay=1&loop=1&playlist=bvLulz7QsLE&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="banner-curve">
         <img src="{{URL::to('/public/website')}}/images/white-curve2.png">
      </div>
   </section>
   <!-- Banner Section Ends Here -->
   <!-- What We Offer Section Starts Here -->
   <section class="pad-top-40 pad-bot-40">
      <div class="container">
         <div class="sec-head2">
            <h3 class="col-blue alegraya"> WHAT WE OFFER </h3>
         </div>
         <div class="row margin-1">
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="offer-box">
                  <img src="{{URL::to('/public/website')}}/images/offer-image1.jpg">
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="offer-box">
                  <img src="{{URL::to('/public/website')}}/images/offer-image2.jpg">
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="offer-box">
                  <img src="{{URL::to('/public/website')}}/images/offer-image3.jpg">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- What We Offer Section Ends Here -->
   <!-- Quote Section Starts Here -->
   <section class="pad-bot-20 pad-top-20">
      <div class="container">
         <div class="quote-sec">
            <h4 class="alegraya col-white"> Lorem Ipsum </h4>
            <p class="col-white"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.  </p>
         </div>
      </div>
   </section>
   <!-- Quote Section Ends Here -->
   <!-- Accomodation Section Starts Here -->
   <section class="pad-top-40 pad-bot-40">
      <div class="container">
         <div class="sec-head2">
            <h3 class="col-blue alegraya"> ACCOMODATION </h3>
         </div>
         <div class="row margin-1">
            @php $i = 1; @endphp
            @foreach($list_data as $val)
               @if($i==1)
               <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">
               @endif
                     <div class="prop-box">
                        <div>
                           <div class="prop-box-image">
                              <img src="{{URL::to('/public/storage/listing/main/')}}/{{$val->feature_img}}">
                           </div>
                           <div class="prop-box-text">
                              @if(Auth::id() && count($val->wishlist) == 0)
                                 <a href="javascript:void(0)" class="wishlist-icon accomAddWishlist" data-id="{{base64_encode($val->id)}}"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                              @endif
                              <h4> {{'$'.number_format($val->price, 2)}} {{$val->unit}} </h4>
                              <p> {{@$val->address->city}}, {{@$val->address->state}}, {{@$val->address->post_code}}, {{@$val->address->country->nicename}} </p>
                              <a href="{{route('accommodation.details',base64_encode(@$val->id))}}"> View Detail </a>
                              <h6>
                                 <span> <img src="{{URL::to('/public/website')}}/images/bed-icon.png">  2 </span>
                                 <span> <img src="{{URL::to('/public/website')}}/images/tub-icon.png">  2 </span>
                                 <span> <img src="{{URL::to('/public/website')}}/images/car-icon.png">  1 </span>
                                 <span> <img src="{{URL::to('/public/website')}}/images/sofa-icon.png">  1 </span>
                                 <span> <img src="{{URL::to('/public/website')}}/images/users-icon.png">  3 </span>
                              </h6>
                           </div>
                        </div>
                     </div>
               @if($i == 2)
                  </div>
               </div>
                  @php $i=1; @endphp
               @else
                  @php $i++; @endphp
               @endif

            @endforeach

         </div>
      </div>
   </section>
   <!-- Accomodation Section Ends Here -->
   <!-- Art Section Starts Here -->
   <section class="pad-bot-40">
      <div class="container">
         <div class="sec-head2">
            <h3 class="col-blue alegraya"> ART </h3>
         </div>
         <div class="row margin-1">
            @php $c=1; $r=1; @endphp
            @foreach($product_data as $val)
               @if(($r%2) == 1)
                  <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                     <div class="art-multiple-box arrows-1">
               @endif
                        <div class="art-item-box">
                           <div class="art-item-image">
                              <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}">
                           </div>
                           <div class="art-item-hover">
                              <div class="art-item-actions">
                                 <label class="art-btn1"> 
                                    <a href="{{URL::to('/art')}}/{{$val->cat->name}}">
                                       <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> 
                                       <span> Similar </span> 
                                    </a>
                                 </label>
                                 <label class="wishlist-icon white-heart"> 
                                    <i class="fa fa-heart"> </i>  
                                    <span> Save </span> 
                                 </label>
                              </div>
                              <a href="{{URL::to('/art/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                                 <div class="feature-title1">
                                    <h5> {{$val->title}} </h5>
                                    <p> Made By: 
                                       <strong>{{empty($val->artist) ? '' : $val->artist->username}}</strong>
                                    </p>
                                    <h6> {{'$'.number_format($val->price, 2)}} </h6>
                                 </div>
                              </a>
                           </div>
                        </div>
               @if(($r%2) == 0)
                     </div>
                  </div>
                  @php $c++; @endphp
               @endif
               @php $r++; @endphp
            @endforeach
         </div>
      </div>
   </section>
   <!-- Art Section Ends Here -->
   <!-- Art Section Starts Here -->
   <section class="pad-bot-40">
      <div class="container">
         <div class="sec-head2">
            <h3 class="col-blue alegraya"> COLLECTIBLES </h3>
         </div>
         <div class="row margin-1">
            @php $r=1; @endphp
            @foreach($cproduct_data as $val)
               @if(($r%2) == 1)
                  <div class=" col-sm-12 col-12 padding-1 col-md-6 col-lg-6">
                     <div class="image-slider img-mob-margin arrows-1 m-b-20 feature-large">
               @endif
                        <div class="art-item-box">
                           <div class="art-item-image">
                              <img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}">
                           </div>
                            <div class="art-item-hover">
                              <div class="art-item-actions">
                                 @if(Auth::id() && count($val->wishlist) == 0)
                                    <label class="wishlist-icon white-heart collAddWishlist" data-id="{{base64_encode($val->id)}}"> 
                                       <i class="fa fa-heart"> </i>  
                                       <span> Save </span> 
                                    </label>
                                 @endif
                              </div>
                              <a href="{{URL::to('/collectibles/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                                 <div class="feature-title1">
                                    <h5> {{$val->title}}</h5>
                                    <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}}  </p>
                                    <h6> ${{number_format($val->price, 1)}} </h6>
                                 </div>
                              </a>
                           </div>
                        </div>
               @if(($r%2) == 0)
                     </div>
                  </div>
               @endif
               @php $r++; @endphp
            @endforeach
         </div>
      </div>
   </section>

@endsection