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
<div class="accommodation-tags">
   <div class="container">
      <a> Customization </a>  
      <i class="fa fa-angle-right"> </i>
      <a> Abstract </a>
      <i class="fa fa-angle-right"> </i>
      <a> Lines Diagram </a>
      <i class="fa fa-angle-right"> </i>
      <a> Portrait Custom Title </a>
   </div>
</div>
@endsection
@section('content')

<section class="pad-top-40">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-lg-8 col-sm-12 col-12">
            <div class="apartment-name m-b-10">
               <h3 class="col-black"> Custom Portrait Title </h3>
               <p> Art by Ben </p>
            </div>
            <div class="image-zoomer">
               <div class="zoom-area">
               <div class="large"></div>
               <img class="small" src="images/painting-large.jpg"  />
            </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-12">
            <div class="apartment-title">
               <h5 class="alegraya col-black">   <span> Price </span> </h5>
            </div>
            <div class="description-field" >
               <h5> Description </h5>
               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
               </p>
            </div>
            <div class="block-element text-right">
               <a   data-toggle="modal" data-target="#exampleModal" class="custom-btn6"> Order Now </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- accommodation Entry Details Section Ends Here -->
<!-- What We Offer Section Starts Here -->
<section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="sec-head2">
         <h3 class="col-black alegraya"> Similar Customized Portrait You May Like </h3>
      </div>
      <div class="row margin-1">
         <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="art-multiple-box arrows-1">
               <div class="art-item-box">
                  <div class="art-item-image">
                     <img src="images/painting-16.jpg">
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
                      <img src="images/painting-16.jpg">
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
                     <img src="images/painting-16.jpg">
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
                     <img src="images/painting-17.jpg">
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
                      <img src="images/painting-17.jpg">
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
                     <img src="images/painting-17.jpg">
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
                     <img src="images/painting-18.jpg">
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
                      <img src="images/painting-18.jpg">
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
                     <img src="images/painting-18.jpg">
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

@endsection
