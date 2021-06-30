@extends('web.includes.master')
@section('title', 'Art')
@section('addStyle')
<style type="text/css">
   .header-bottom {
      display: none;
   }
</style>
@endsection
@section('filter')
<div class="all-filters">
   <div class="container">
      <!-- Style Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Style  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Water Colour </a>
                     <a href=""> Line Drawing </a>
                     <a href=""> Illustration </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Style Filter Ends Here -->
      <!-- People Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         People  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> Individual </h4>
                  </div>
                  <div class="checkbox-filter2">
                     <button class="active-1"> <input type="checkbox" checked="checked" name=""> Any </button>
                     <button> <input type="checkbox" name=""> 1+ </button>
                     <button> <input type="checkbox" name=""> 2+ </button>
                     <button> <input type="checkbox" name=""> 3+ </button>
                     <button> <input type="checkbox" name=""> 4+ </button>
                     <button> <input type="checkbox" name=""> 5+ </button>
                  </div>
                  <div class="extract-value">
                     <p> <label> <input type="checkbox" name="">  Use extract value </label> </p>
                  </div>
               </div>
               <!-- Filter Actions Starts Here -->
               <div class="filter-actions">
                  <button class="cancel-btn"> Cancel </button>
                  <button class="results-btn"> See Results </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <!-- People Filter Ends Here -->
      <!-- Other Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Other  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Pet </a>
                     <a href=""> Item </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Other Filter Ends Here -->
      <!-- Custom Portrait Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
       <a data-toggle="modal" data-target="#exampleModal">  Custom Portrait   </a>
         </button>
          
      </div>
      <!-- Custom Portrait Filter Ends Here -->
      <!-- Price Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Price  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> Price </h4>
                     <h6> Above $50k </h6>
                  </div>
                  <div class="price-filter">
                     <div class="price-range-slider">
                        <p class="range-value">
                           <input type="text" id="amount2" readonly>
                        </p>
                        <div id="slider-range2" class="range-bar"></div>
                     </div>
                  </div>
               </div>
               <!-- Filter Actions Starts Here -->
               <div class="filter-actions">
                  <button class="cancel-btn"> Cancel </button>
                  <button class="results-btn"> See Results </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <!-- Price Filter Ends Here -->
   </div>
</div>
@endsection
@section('content')

<section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="sec-head2">
         <h3 class="col-blue alegraya"> Digital Portrait Customization </h3>
      </div>
      <div class="row margin-1">
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
           <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-1.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-2.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-3.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
            <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-4.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-5.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-6.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-7.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-8.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-7.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-4.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-5.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-6.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-1.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-2.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-3.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
   <!-- What We Offer Section Ends Here -->
   <!-- List Your Property Section Starts Here -->
   <section>
   <div class="container">
      <div class="art-quote quote-bg3 text-center">
         <p class="col-white alegraya">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices  </p>
         <a href="create-account.html" class="custom-btn5"> Become a Portrait Artist </a>
      </div>
   </div>
   </section>
   <!-- List Your Property Section Ends Here -->
   <!-- What We Offer Section Starts Here -->
   <section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="row margin-1">
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-1.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-2.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-3.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
            <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-4.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-5.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-6.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-7.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-8.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-10.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-11.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-12.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-1.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-2.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-3.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-4.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-5.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-6.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
            <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-7.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-8.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
              <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-1.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-2.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-3.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
               <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-7.jpg">
                  </div>
                   <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                      <img src="{{URL::to('/public/website')}}/images/painting-8.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                      <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="{{URL::to('/public/website')}}/images/painting-9.jpg">
                  </div>
                  <div class="art-item-hover">
                     <div class="art-item-actions">
                     <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                     </div>
                     <a href="customization-3.html">
                    <div class="feature-title1">
                  <h5> Title of Image </h5>
                  <p> Art By Ali  </p>
                  <h6> 159$ </h6>
                  </div>
               </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-12 col-lg-12">
            <div class="breadcrumbs-custom">
               <ul class="alegraya">
                  <li> <a href=""> <i class="fa fa-angle-left"> </i> </a> </li>
                  <li> <a href=""> 1 </a> </li>
                  <li> <a href=""> 2 </a> </li>
                  <li> <a href=""> 3 </a> </li>
                  <li> <a href=""> 4 </a> </li>
                  <li> <a href=""> 5 </a> </li>
                  <li> <a href=""> 6 </a> </li>
                  <li> <a href=""> 7 </a> </li>
                  <li> <a href=""> 8 </a> </li>
                  <li> <a href=""> 9 </a> </li>
                  <li> <a href=""> 10 </a> </li>
                  <li> <a href=""> <i class="fa fa-angle-right"> </i> </a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   </section>

@endsection
