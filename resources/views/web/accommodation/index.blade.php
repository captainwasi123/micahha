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
         <img src="{{URL::to('/public/website')}}/images/filter-icon.jpg">{{ __('content.Filters') }} 
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <!-- Property Types Filter Starts Here -->
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> {{ __('content.FEATURES') }}  </h4>
                  </div>
                  @foreach($amenity_type as $val)
                     <div class="checkbox-filter checkbox-filter4">
                        <h6> {{ __('content.'.$val->name) }}<i class="fa fa-caret-right"> </i> </h6>
                        @foreach($val->amenities as $vall)
                           <p> <label> <input type="checkbox" name="amenities" value="{{$vall->id}}"> {{ __('content.'.$vall->name) }} </label> </p>
                        @endforeach
                     </div>
                  @endforeach
               </div>
               <!-- Property Types Filter Ends Here -->
               <!-- Filter Actions Starts Here -->
               <div class="filter-actions">
                  <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
                  <button class="results-btn"> {{ __('content.See Results') }} </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-lg">
         {{ __('content.Rooms') }}  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <!-- Bedroom Filter Starts Here -->
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Bedrooms') }} </h4>
                  </div>
                  <div class="checkbox-filter2">
                     <button class="active-1"> <input type="checkbox" checked="checked" name=""> {{ __('content.Any') }} </button>
                     <button> <input type="checkbox" name=""> 1+ </button>
                     <button> <input type="checkbox" name=""> 2+ </button>
                     <button> <input type="checkbox" name=""> 3+ </button>
                     <button> <input type="checkbox" name=""> 4+ </button>
                     <button> <input type="checkbox" name=""> 5+ </button>
                  </div>
                  <div class="extract-value">
                     <p> <label> <input type="checkbox" name="">  {{ __('content.Use extract value') }} </label> </p>
                  </div>
               </div>
               <!-- Bedroom Filter Ends Here -->
               <!-- Filter Actions Starts Here -->
               <div class="filter-actions">
                  <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
                  <button class="results-btn"> {{ __('content.See Results') }} </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-lg">
         {{ __('content.Price') }}  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <!-- Price Filter Starts Here -->
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Price') }} </h4>
                     <h6> {{ __('content.Above') }} $50k </h6>
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
                  <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
                  <button class="results-btn"> {{ __('content.See Results') }} </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-lg dropdown-toggle">
         {{ __('content.Property Types') }}  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <!-- Property Types Filter Starts Here -->
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Property Types') }} </h4>
                  </div>
                  <div class="checkbox-filter">
                     <p> <label> <input type="checkbox" > {{ __('content.apartment') }} </label> </p>
                     <p> <label> <input type="checkbox" > {{ __('content.bed and breakfast') }} </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.boutique hotel') }} </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.bungalow') }} </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.cabin') }} </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.chalet') }}   </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.cottage') }}  </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.condominium') }}   </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.guest suite') }}  </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.guesthouse') }}  </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.house') }}   </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.hotel') }}  </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.loft') }}   </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.resort') }}    </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.serviced apartment') }}  </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.townhouse') }}   </label> </p>
                     <p> <label> <input type="checkbox">  {{ __('content.villa') }}  </label> </p>
                  </div>
               </div>
               <div class="filter-box">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Type of Place') }} </h4>
                  </div>
                  <div class="checkbox-filter">
                     <p> <label> <input type="checkbox" > {{ __('content.Entire Place') }} </label> </p>
                     <p> <label> <input type="checkbox" > {{ __('content.Shared Place') }} </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.Private Room') }} </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.Shared Room') }}  </label> </p>
                     <p> <label> <input type="checkbox"> {{ __('content.Hotel Room') }}  </label> </p>
                  </div>
               </div>
               <!-- Property Types Filter Ends Here -->
               <!-- Filter Actions Starts Here -->
               <div class="filter-actions">
                  <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
                  <button class="results-btn"> {{ __('content.See Results') }} </button>
               </div>
               <!-- Filter Actions Ends Here -->
            </div>
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ __('content.Check In/Out') }}  
         </button>
         <div class="dropdown-menu keep-open">
            <div class="filters-wrapper">
               <!-- Calendar Filter Starts Here -->
               <div class="filter-box no-border">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Calendar') }} </h4>
                  </div>
                  <div class="checkbox-filter3">
                     <div id="pageContentArea" class="pageSection">
                        <form>
                           <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField" placeholder="{{ __('content.Select a date-range') }}" data-from-field="txtDateFrom" data-to-field="txtDateTo" />
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
               <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
               <button class="results-btn"> {{ __('content.See Results') }} </button>
            </div>
            <!-- Filter Actions Ends Here -->
         </div>
      </div>
      <div class="btn-group">
         <button class="btn btn-lg">
         {{ __('content.Guest') }}  
         </button>
         <div class="dropdown-menu">
            <div class="filters-wrapper">
               <!-- Guest Filter Starts Here -->
               <div class="filter-box no-border">
                  <div class="filter-box-head">
                     <h4> {{ __('content.Guest') }}  </h4>
                  </div>
                  <div class="counting-filter">
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-7">
                           <div class="counting-name">
                              <h5> {{ __('content.Adults') }} </h5>
                              <p> {{ __('content.Ages 13 or above') }} </p>
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
                              <h5> {{ __('content.Children') }} </h5>
                              <p> {{ __('content.Ages 8 or above') }} </p>
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
                              <h5> {{ __('content.Infants') }} </h5>
                              <p> {{ __('content.Ages 7 or below') }} </p>
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
               <button class="cancel-btn"> {{ __('content.Cancel') }} </button>
               <button class="results-btn"> {{ __('content.See Results') }} </button>
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
            <div class="sec-head2">
               <h3 class="col-blue alegraya">{{ __('content.Start Exploring') }}</h3>
            </div>
             <div class="row margin-1">
               
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">

               <?php $i = 1; $count = 1; for($x = 0; $x < count($rendom_list); $x++){  ?>   
                    
                     <div class="prop-box">
                        <div>
                           <div class="prop-box-image">
                              <img src="{{URL::to('/public/storage/listing/main/')}}/{{$rendom_list[$x]['feature_img']}}">
                           </div>
                           <div class="prop-box-text">
                              @if(Auth::id() && count($rendom_list[$x]->wishlist) == 0)
                                 <a href="javascript:void(0)" class="wishlist-icon accomAddWishlist" data-id="{{base64_encode($rendom_list[$x]['id'])}}"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                              @endif
                              <h4> {{'$'.number_format($rendom_list[$x]['price'], 2)}} {{$rendom_list[$x]['unit']}}</h4>
                              <p> {{@$rendom_list[$x]['address']['city']}}, {{@$rendom_list[$x]['address']['state']}}, {{@$rendom_list[$x]['address']['post_code']}}, {{@$rendom_list[$x]['address']['country']['nicename']}} </p>
                              <a href="{{route('accommodation.details',base64_encode(@$rendom_list[$x]['id']))}}"> {{ __('content.View Detail') }}</a>
                           </div>
                        </div>
                     </div>
              
               <?php  if ($i == 5) { $i = 0  ?>
                 </div>
               </div>
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
                  <div class="item-multiple-box arrows-3">
             <?php  }elseif($count == count($rendom_list)){ ?>
             </div>
               </div>
             <?php }else{ 
               $i++; }  $count++;
            } ?>       
                  
               
            </div>
         </div>
      </section>
      <!-- What We Offer Section Ends Here -->
      <!-- Quote Section Starts Here -->
      <section class="pad-bot-20 pad-top-40">
         <div class="container">
            <div class="quote-sec quote-bg2">
               <h4 class="alegraya col-white">{{ __('content.What Makes Micahha Rental') }} <br>{{ __('content.Property Perfect for YOU') }} </h4>
               <p class="col-white alegraya">{{ __('content.Selected Accommodations') }} <br>{{ __('content.Checks done') }} <br>{{ __('content.One Stop, Easy Steps, hassle free') }} <br>{{ __('content.Short term long term, your pick') }} </p>
            </div>
         </div>
      </section>
      <!-- Quote Section Ends Here -->
      <!-- Get Inspired Section Starts Here -->
      <section class="pad-top-40 pad-bot-40">
         <div class="container">
            <div class="sec-head2">
               <h3 class="col-black alegraya upper">{{ __('content.Get inspired') }} </h3>
            </div>
            <div class="row margin-1">
            <?php  for($i=0; $i < count($amenities_data) ; $i++) { 
               if ($i == 0) { ?>
                  <div class="col-md-6 col-lg-6 col-sm-6 col-12 padding-1">
                     <div class="offer-box overlay-tag inspire-large">
                        <img src="{{URL::to('/public/website')}}/images/inspire-1.jpg">
                        <h4> {{$amenities_data[$i]['name']}}</h4>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-sm-6 col-12 padding-1">
                     <div class="row margin-1">
            <?php }else{ ?>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12 padding-1 m-b-20 ">
                        <div class="offer-box  overlay-tag inspire-small">
                           <img src="{{URL::to('/public/website')}}/images/inspire-3.jpg">
                           <h4> {{$amenities_data[$i]['name']}}</h4>
                        </div>
                     </div>
            <?php if ($i ==  4) { ?>
                     </div>
                  </div>
            <?php } }  } ?>   
            </div>
         </div>
      </section>
      <!-- Get Inspired Section Ends Here -->
      <!-- List Your Property Section Starts Here -->
      <section class="pad-top-20 pad-bot-40">
         <div class="container">
            <div class="list-property">
               <h3 class="col-black alegraya">{{ __('content.List Your Property On Micahha & Open The Door To Rental Income') }}   
               </h3>
               <a href="{{route('user.login')}}" class="custom-btn3">{{ __('content.LIST YOUR PROPERTY') }} </a>
            </div>
         </div>
      </section>
      <!-- List Your Property Section Ends Here -->
      <!-- Art Section Starts Here -->
      <section class="pad-bot-40">
         <div class="container">
         <div class="sec-head2">
         <h3 class="col-blue alegraya">{{ __('content.Featured Properties') }}  </h3>
         </div>
         <div class="row margin-1">
         @foreach($list_data as $list_val)    
             <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1">
               <div class="item-box">
                  <div class="image-slider arrows-3">
                     <div> <img src="{{URL::to('/public/storage/listing/main/')}}/{{$list_val->feature_img}}"> </div>
                     @foreach($list_val->galleryImages as $gallery_images)
                        <div> <img src="{{URL::to('/public/storage/listing/gallery/'.$gallery_images->id.'-'.$gallery_images->image)}}"> </div>
                     @endforeach
                  </div>
                  <div class="prop-box-text">
                        @if(Auth::id() && count($list_val->wishlist) == 0)
                           <a href="javascript:void(0)" class="wishlist-icon accomAddWishlist" data-id="{{base64_encode($list_val->id)}}"> <i class="fa fa-heart"> </i>  <span> Save </span> </a>
                        @endif
                     <h4> {{'$'.number_format($list_val->price, 2)}} {{$list_val->unit}} </h4>
                        <p>{{@$list_val->address->city}}, {{@$list_val->address->state}}, {{@$list_val->address->post_code}}, {{@$list_val->address->country->nicename}} </p>
                     <a href="{{route('accommodation.details',base64_encode($list_val->id))}}"> {{ __('content.View Detail') }} </a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         <div class="row">
         <div class="col-lg-12 text-center">
         <a href="{{route('feature.list')}}" class="custom-btn6">{{ __('content.VIEW MORE') }}</a>
         </div>
         </div>
     </div>
      </section>
      <!-- Art Section Ends Here -->
      <!-- Textual Content Section Starts Here -->
      
      <!-- Textual Content Section Ends Here -->
      <!-- Locations Section Starts Here -->
      
      <section class="bg-silver pad-top-20  m-b-30">
         <div class="container">
            <div class="locations-text">
               <ul>
                  <li> Sydney </li>
                  <li> Melbourne </li>
                  <li> Brisbane </li>
                  <li> Perth </li>
               </ul>
               <ul>
                  <li> Adelaide </li>
                  <li> Newcastle </li>
                  <li> Central Coast </li>
                  <li> Sunshine Coast </li>
               </ul>
               <ul>
                  <li> Sydney </li>
                  <li> Melbourne </li>
                  <li> Brisbane </li>
                  <li> Perth </li>
               </ul>
               <ul>
                  <li> Wollongong </li>
                  <li> Geelong </li>
                  <li> Hobart </li>
                  <li> Bunbury </li>
               </ul>
               <ul>
                  <li> Adelaide </li>
                  <li> Newcastle </li>
                  <li> Central Coast </li>
                  <li> Sunshine Coast </li>
               </ul>
               <ul>
                  <li> Sydney </li>
                  <li> Melbourne </li>
                  <li> Brisbane </li>
                  <li> Perth </li>
               </ul>
               <ul>
                  <li> Wollongong </li>
                  <li> Geelong </li>
                  <li> Hobart </li>
                  <li> Bunbury </li>
               </ul>
            </div>
         </div>
      </section>
      <!-- Locations Section Ends Here -->
@endsection
