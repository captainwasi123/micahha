@extends('web.includes.master')
@section('title', 'Home')
@section('content')


   <!-- Banner Section Starts Here -->
   <section class="banner-sec">
      <div class="banner-video">
         <video autoplay loop muted>
            <source src="{{URL::to('/public/website')}}/images/lorem-ipsum-video.mp4" type="video/mp4">
         </video>
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
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-1.jpg">
                        </div>
                        <div class="prop-box-text">
                           <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $450 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-1.jpg">
                        </div>
                        <div class="prop-box-text">
                              <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $550 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-2.jpg">
                        </div>
                        <div class="prop-box-text">
                           <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $450 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-2.jpg">
                        </div>
                        <div class="prop-box-text">
                              <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $550 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-3.jpg">
                        </div>
                        <div class="prop-box-text">
                           <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $450 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
                  <div class="prop-box">
                     <div>
                        <div class="prop-box-image">
                           <img src="{{URL::to('/public/website')}}/images/accommodation-3.jpg">
                        </div>
                        <div class="prop-box-text">
                              <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                           <h4> $550 per week </h4>
                           <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
                           <a href="accommodation-3.html"> View Detail </a>
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
               </div>
            </div>
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
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="art-multiple-box arrows-1">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
              <div class="art-multiple-box arrows-1">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="art-multiple-box arrows-1">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                          <label   class="art-btn1"> <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> <span> Similar </span> </label>
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="art-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Made By Ali  </p>
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
   <!-- Art Section Ends Here -->
   <!-- Art Section Starts Here -->
   <section class="pad-bot-40">
      <div class="container">
         <div class="sec-head2">
            <h3 class="col-blue alegraya"> COLLECTIBLES </h3>
         </div>
         <div class="row margin-1">
            <div class="col-md-6 col-lg-6  col-sm-6 col-12 padding-1">
                  <div class="art-multiple-box arrows-1 feature-large">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/collectibles-1.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                         <img src="{{URL::to('/public/website')}}/images/collectibles-1.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                         <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/collectibles-1.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 col-12 padding-1">
                  <div class="art-multiple-box arrows-1 feature-large">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/collectibles-2.jpg">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                         <img src="{{URL::to('/public/website')}}/images/collectibles-2.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                         <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
                     <h6> 159$ </h6>
                     </div>
                  </a>
                     </div>
                  </div>
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/website')}}/images/collectibles-2.jpg">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
                        </div>
                        <a href="collectibles-3.html">
                       <div class="feature-title1">
                     <h5> Title of Image </h5>
                     <p> Category  </p>
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