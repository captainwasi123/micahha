@extends('web.includes.master')
@section('title', 'Home')
@section('content')

<section class="pad-top-40 pad-bot-20">
    <div class="container">
       <div class="row margin-1">
           @foreach ($listing as $item)
            <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                <div class="image-slider arrows-3">
                <div class="prop-box">
                    <div>
                        <div class="prop-box-image">
                            <img src="{{URL::to('/public')}}/storage/listing/main/{{$item->feature_img}}">
                        </div>
                        <div class="prop-box-text">
                            <h4> $450 per week </h4>
                            <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                            <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                        </div>
                        <div class="prop-box-text">
                            <h4> $450 per week </h4>
                            <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
           @endforeach

          {{-- <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          </div> --}}
       </div>
       <div class="row margin-1">
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
 <!-- What We Offer Section Ends Here -->
 <!-- List Your Property Section Starts Here -->
 <section class="pad-top-20 pad-bot-40">
    <div class="container">
       <div class="list-property">
          <h3 class="col-black alegraya"> List Your Property On Micahha &
             Open The Door To Rental Income
          </h3>
          <a href="" class="custom-btn3"> LIST YOUR PROPERTY </a>
       </div>
    </div>
 </section>
 <!-- List Your Property Section Ends Here -->
 <!-- What We Offer Section Starts Here -->
 <section class="pad-top-40 pad-bot-20">
    <div class="container">
       <div class="row margin-1">
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
       <div class="row margin-1">
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/art-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
       <div class="row margin-1">
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-2.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
          <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
             <div class="image-slider arrows-3">
                <div class="prop-box">
                   <div>
                      <div class="prop-box-image">
                         <img src="{{URL::to('/public/website')}}/images/accomodation-3.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
                         <img src="{{URL::to('/public/website')}}/images/accomodation-1.jpg">
                      </div>
                      <div class="prop-box-text">
                         <h4> $450 per week </h4>
                         <p> 10/42-50 Hampstead Road, Homebush West, NSW 2140 </p>
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
