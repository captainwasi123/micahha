@extends('web.includes.master')
@section('title', 'Collectibles')
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
      <a> Collectibles </a>  
      <i class="fa fa-angle-right"> </i>
      <a> Furniture </a>
      <i class="fa fa-angle-right"> </i>
      <a> All Seating </a>
      <i class="fa fa-angle-right"> </i>
      <a> Sofa </a>
   </div>
</div>
@endsection
@section('content')

<section class="pad-top-40">
   <div class="container">

     
      <div class="row">
         <div class="col-md-7 col-lg-8 col-sm-12 col-12">
            <div class="apartment-name m-b-10">
               <h3 class="col-black"> Collectibles Title </h3>
               <p> Art by Ali </p>
            </div>
            <div class="image-slider arrows-3">
               <div>
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-large.jpg">
               </div>
               <div>
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-large.jpg">
               </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-12">
            <div class="apartment-title">
               <h5 class="alegraya col-black">   <span> Price </span> </h5>
            </div>
            <div class="description-field"  >
               <h5> Description </h5>
               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            </div>
            <div class="block-element text-right">
               <a href="" class="custom-btn6"> Add to Cart </a>
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
         <h3 class="col-black alegraya"> Similar Collectibles You May Like </h3>
      </div>
      <div class="row margin-1">
        <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
            <div class="image-slider img-mob-margin arrows-1 m-b-20">
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-9.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-9.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
            </div>
         </div>

         <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
            <div class="image-slider img-mob-margin arrows-1 m-b-20">
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-10.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-10.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
            </div>
         </div>

         <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
            <div class="image-slider img-mob-margin arrows-1 m-b-20">
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-11.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
                <div class="feature-box1">
                  <img src="{{URL::to('/public/website/')}}/images/collectibles-11.jpg">
                  <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Category  </p>
                  <h6> 159$ </h6>
                  </div>
                  <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>


@endsection
