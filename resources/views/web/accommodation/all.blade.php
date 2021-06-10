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

<div class="all-filters">
            <div class="container">
               <div class="btn-group">
                  <button class="btn btn-lg" >
                  <img src="{{URL::to('/public/website')}}/images/filter-icon.jpg"> Filters
                  </button>
                  <div class="dropdown-menu">
                     <div class="filters-wrapper">
                        <!-- Property Types Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Property Types </h4>
                           </div>
                           <div class="checkbox-filter">
                              <p> <label> <input type="checkbox" > House </label> </p>
                              <p> <label> <input type="checkbox" > Apartment and Unit </label> </p>
                              <p> <label> <input type="checkbox"> Town house </label> </p>
                              <p> <label> <input type="checkbox"> Villa </label> </p>
                           </div>
                        </div>
                        <!-- Property Types Filter Ends Here -->
                        <!-- Price Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Price </h4>
                              <h6> Above $50k </h6>
                           </div>
                           <div class="price-filter">
                              <div class="price-range-slider">
                                 <p class="range-value">
                                    <input type="text" id="amount" readonly>
                                 </p>
                                 <div id="slider-range" class="range-bar"></div>
                              </div>
                           </div>
                        </div>
                        <!-- Price Filter Ends Here -->
                        <!-- Bedroom Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Bedrooms </h4>
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
                        <!-- Bedroom Filter Ends Here -->
                        <!-- Bathroom Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Bathrooms </h4>
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
                        <!-- Bathroom Filter Ends Here -->
                        <!-- Parking Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Parking </h4>
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
                        <!-- Parking Filter Ends Here -->
                        <!-- Features Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Features </h4>
                           </div>
                           <div class="checkbox-filter3">
                              <p> <label> <input type="checkbox" name=""> Pets Allowed </label> </p>
                              <p> <label> <input type="checkbox" name=""> Internal Laundary </label> </p>
                              <p> <label> <input type="checkbox" name=""> Gas </label> </p>
                              <p> <label> <input type="checkbox" name=""> Swimming Pool </label> </p>
                              <p> <label> <input type="checkbox" name=""> Balcony / deck </label> </p>
                              <p> <label> <input type="checkbox" name=""> Built & wardrobes </label> </p>
                              <p> <label> <input type="checkbox" name=""> Air Conditioning </label> </p>
                              <p> <label> <input type="checkbox" name=""> Garden / courtyard </label> </p>
                           </div>
                        </div>
                        <!-- Features Filter Ends Here -->
                        <!-- Calendar Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Calendar </h4>
                           </div>
                           <div class="checkbox-filter3">
                              <img src="images/calendar.jpg">
                           </div>
                        </div>
                        <!-- Calendar Filter Ends Here -->
                        <!-- Guest Filter Starts Here -->
                        <div class="filter-box no-border">
                           <div class="filter-box-head">
                              <h4> Guest </h4>
                           </div>
                           <div class="counting-filter">
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Adults </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Children </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Infants </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Guest Filter Ends Here -->
                        <!-- Filter Actions Starts Here -->
                        <div class="filter-actions">
                           <button class="cancel-btn"> Cancel </button>
                           <button class="results-btn"> See Results </button>
                        </div>
                        <!-- Filter Actions Ends Here -->
                     </div>
                  </div>
               </div>
               <div class="btn-group">
                  <button class="btn btn-lg">
                  Rooms <i class="fa fa-angle-down"> </i>
                  </button>
                  <div class="dropdown-menu">
                     <div class="filters-wrapper">
                        <!-- Bedroom Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Bedrooms </h4>
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
                        <!-- Bedroom Filter Ends Here -->
                        <!-- Filter Actions Starts Here -->
                        <div class="filter-actions">
                           <button class="cancel-btn"> Cancel </button>
                           <button class="results-btn"> See Results </button>
                        </div>
                        <!-- Filter Actions Ends Here -->
                     </div>
                  </div>
               </div>
               <div class="btn-group">
                  <button class="btn btn-lg">
                  Price <i class="fa fa-angle-down"> </i>
                  </button>
                  <div class="dropdown-menu">
                     <div class="filters-wrapper">
                        <!-- Price Filter Starts Here -->
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
                        <!-- Price Filter Ends Here --> 
                        <!-- Filter Actions Starts Here -->
                        <div class="filter-actions">
                           <button class="cancel-btn"> Cancel </button>
                           <button class="results-btn"> See Results </button>
                        </div>
                        <!-- Filter Actions Ends Here -->
                     </div>
                  </div>
               </div>
               <div class="btn-group">
                  <button class="btn btn-lg dropdown-toggle">
                  Property Types <i class="fa fa-angle-down"> </i>
                  </button>
                  <div class="dropdown-menu">
                     <div class="filters-wrapper">
                        <!-- Property Types Filter Starts Here -->
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Property Types </h4>
                           </div>
                           <div class="checkbox-filter">
                              <p> <label> <input type="checkbox" > House </label> </p>
                              <p> <label> <input type="checkbox" > Apartment and Unit </label> </p>
                              <p> <label> <input type="checkbox"> Town house </label> </p>
                              <p> <label> <input type="checkbox"> Villa </label> </p>
                           </div>
                        </div>
                        <div class="filter-box">
                           <div class="filter-box-head">
                              <h4> Type of Place </h4>
                           </div>
                           <div class="checkbox-filter">
                              <p> <label> <input type="checkbox" > Entire Place </label> </p>
                              <p> <label> <input type="checkbox" > Shared Place </label> </p>
                              <p> <label> <input type="checkbox"> Private Room </label> </p>
                              <p> <label> <input type="checkbox"> Shared Room  </label> </p>
                              <p> <label> <input type="checkbox"> Hotel Room  </label> </p>
                           </div>
                        </div>
                        <!-- Property Types Filter Ends Here -->
                        <!-- Filter Actions Starts Here -->
                        <div class="filter-actions">
                           <button class="cancel-btn"> Cancel </button>
                           <button class="results-btn"> See Results </button>
                        </div>
                        <!-- Filter Actions Ends Here -->
                     </div>
                  </div>
               </div>
               <div class="btn-group">
                  <button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Check In/Out <i class="fa fa-angle-down"> </i>
                  </button>
                  <div class="dropdown-menu keep-open">
                     <div class="filters-wrapper">
                        <!-- Calendar Filter Starts Here -->
                        <div class="filter-box no-border">
                           <div class="filter-box-head">
                              <h4> Calendar </h4>
                           </div>
                           <div class="checkbox-filter3">
                              <div id="pageContentArea" class="pageSection">
                                 <form>
                                    <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField" placeholder="Select a date-range" data-from-field="txtDateFrom" data-to-field="txtDateTo" />
                                    <input type="hidden" id="txtDateFrom" value="" />
                                    <input type="hidden" id="txtDateTo" value="" />
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Calendar Filter Ends Here -->
                     <!-- Filter Actions Starts Here -->
                     <div class="filter-actions">
                        <button class="cancel-btn"> Cancel </button>
                        <button class="results-btn"> See Results </button>
                     </div>
                     <!-- Filter Actions Ends Here -->
                  </div>
               </div>
               <div class="btn-group">
                  <button class="btn btn-lg">
                  Guest <i class="fa fa-angle-down"> </i>
                  </button>
                  <div class="dropdown-menu">
                     <div class="filters-wrapper">
                        <!-- Guest Filter Starts Here -->
                        <div class="filter-box no-border">
                           <div class="filter-box-head">
                              <h4> Guest </h4>
                           </div>
                           <div class="counting-filter">
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Adults </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Children </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-7">
                                    <div class="counting-name">
                                       <h5> Infants </h5>
                                       <p> Ages 13 or above </p>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-5">
                                    <div class="counting-number">
                                       <button data-decrease>-</button>
                                       <input data-value type="text" value="1" disabled />
                                       <button data-increase>+</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Guest Filter Ends Here -->
                        <!-- Filter Actions Starts Here -->
                        <div class="filter-actions">
                           <button class="cancel-btn"> Cancel </button>
                           <button class="results-btn"> See Results </button>
                        </div>
                        <!-- Filter Actions Ends Here -->
                     </div>
                  </div>
               </div>
            </div>
         </div>

@endsection
@section('content')

<!-- What We Offer Section Starts Here -->
<section class="pad-top-40 pad-bot-20">
         <div class="container">
            <div class="row margin-1">
            @foreach($list_data as $list_val)
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
            @foreach($list_data as $list_val)
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