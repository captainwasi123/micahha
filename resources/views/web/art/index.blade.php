@extends('web.includes.master')
@section('title', 'Art')
@section('addStyle')
<style type="text/css">
   .header-bottom {
      display: none;
   }
   .slick-initialized .slick-slide {
       height: 170px !important;
   }
</style>
@endsection
@section('content')

<section class="banner-sec">
   <div class="banner-video banner-video2" >
     <img src="{{URL::to('/public/website')}}/images/art-landing-bg.jpg">
   </div>
   <div class="banner-curve banner-curve2">
      <img src="{{URL::to('/public/website')}}/images/white-curve3.png">
   </div>
   <div class="banner-search-form">
      <h3> Stunning High-Quality Images Designed and <br> Created by Our Talented Community</h3>
      
      <form>
         <i class="fa fa-search"> </i>
         <input type="text" placeholder="Search images" name="">
      </form>
      <h6> 
         Popular Images: 
         @foreach($cat as $val)
            <a href="{{URL::to('/art')}}/{{$val->name}}"> {{$val->name}}, </a>&nbsp;&nbsp;
         @endforeach
      </h6>
   </div>
</section>
<!-- Banner Section Ends Here -->
<section>
   <div class="container">
      <a href="{{route('art.all')}}" class="custom-btn6"> Start Exploring Pictures </a>
   </div>
</section>
<!-- Images Section Starts Here -->
<section class="pad-top-40">
   <div class="container">
      <div class="row margin-1">
         @php $c=1; $r=1; @endphp
         @foreach($data as $val)
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
<!-- Images Section Ends Here -->
<!-- List Your Property Section Starts Here -->
<section class="pad-bot-40">
   <div class="container">
      <div class="art-quote text-center">
         <p class="col-white alegraya">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices  </p>
         <a href="{{route('user.login')}}" class="custom-btn5"> LIST YOUR ART </a>
      </div>
   </div>
</section>
<!-- List Your Property Section Ends Here -->
<!-- Portrait Detail Section Starts Here -->
<section class="bg-silver pad-top-40 pad-bot-40">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="portrait-detail">
               <p class="alegraya m-b-40"> It all starts when I was little, my aunt often took me and my siblings to various outdoor and indoor places to create and appreciate art. I’ve discovered diversity and so much possibilities on the pathway of growing up, from sketch, drawing, painting, art craft to cut and paste nature art, magazine collage, etc.   </p>
               <img src="{{URL::to('/public/website')}}/images/art-detail1.jpg">
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <div class="portrait-detail">
               <img src="{{URL::to('/public/website')}}/images/art-detail2.jpg" class="m-b-40" style="margin-left:auto;display:block">
               <p class="alegraya text-right"> Ah, what a blast of fun! With my memories and amateur experiences, hope you can enjoy as much as I do. Here, to paint a dream of yours.   </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Portrait Detail Section Ends Here -->
<!-- Images Section Starts Here -->
<section class="pad-top-40 pad-bot-40">
   <div class="container">
      <div class="row margin-1">
         <div class="col-md-12 col-lg-12 col-sm-12 col-12 padding-1 m-b-20">
            <div class="image-slider3 arrows-3">
               @foreach($data as $val)
                  <div>
                     <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}">
                  </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row margin-1">
         <div class="col-md-12 col-lg-12 col-sm-12 col-12 padding-1 m-b-20">
            <div class="image-slider3 arrows-3">
               @foreach($data as $val)
                  <div>
                     <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}">
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
