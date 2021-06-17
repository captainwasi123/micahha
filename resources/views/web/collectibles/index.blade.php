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
<div class="all-filters">
   <div class="container">
      <!-- New Arrivals Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         New Arrivals  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Seating </a>
                     <a href=""> Table Storage </a>
                     <a href=""> Lighting </a>
                     <a href=""> Home Decor </a>
                     <a href=""> Rugs </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- New Arrivals Filter Ends Here -->
      <!-- Furniture Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Furniture  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Chairs</a>
                     <a href=""> Sofa </a>
                     <a href=""> Tables </a>
                     <a href=""> Storage </a>
                     <a href=""> Mirrors </a>
                     <a href=""> Beds </a>
                     <a href=""> Ottomans, Benches & Stools </a>
                     <a href=""> Superluxe </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Furniture Filter Ends Here -->
      <!-- Lighting Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Lighting  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Ceiling </a>
                     <a href=""> Well </a>
                     <a href=""> Floor </a>
                     <a href=""> Table </a>
                     <a href=""> Outdoor </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Lighting Filter Ends Here -->
      <!-- Deco Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Deco  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Art </a>
                     <a href=""> Trays </a>
                     <a href=""> Vases </a>
                     <a href=""> Boxes </a>
                     <a href=""> Bowls </a>
                     <a href=""> Tableware </a>
                     <a href=""> Books </a>
                     <a href=""> Books </a>
                     <a href=""> Pet Accessories </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Deco Filter Ends Here -->
      <!-- Fabrics Filter Starts Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Fabrics  
         </button>
         <div class="dropdown-menu dropdown-small">
            <div class="filters-wrapper">
               <div class="filter-box no-border">
                  <div class="anchor-filter">
                     <a href=""> Wallpaper </a>
                     <a href=""> Texture </a>
                     <a href=""> Fabrics </a>
                     <a href=""> Outdoor </a>
                     <a href=""> Leather & Hides </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Fabrics Filter Ends Here -->
      <div class="btn-group">
         <button class="btn btn-lg">
         Price  
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
   </div>
</div>
@endsection
@section('content')

<section class="collectibles-sec">
   <div class="container">
      <h3 class="col-white alegraya"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  </h3>
   </div>
</section>
<!-- Collectibles Banner Section Ends Here -->
<!-- Collectibles Section Starts Here -->
<section class="pad-bot-40 pad-top-60">
   <div class="container">
      <div class="row margin-1">
         @php $c=1; $r=1; @endphp
         @foreach($data as $val)
            @if(($r%2) == 1)
               <div class=" col-sm-12 col-12 padding-1
                     {{$c==1 ? 'col-md-7 col-lg-7' : ''}}
                     {{$c==2 ? 'col-md-5 col-lg-5' : ''}}
                     {{$c>2 ? 'col-md-4 col-lg-4' : ''}}
                     ">
                  <div class="image-slider img-mob-margin arrows-1 m-b-20">
            @endif
                     <div class="feature-box1">
                        <img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}">
                        <a href="{{URL::to('/collectibles/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                           <div class="feature-title1">
                              <h5> {{$val->title}}</h5>
                              <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}}  </p>
                              <h6> ${{number_format($val->price, 1)}} </h6>
                           </div>
                        </a>
                        <a href="" class="feature-star"> <i class="fa fa-heart"> </i> </a>
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

@endsection
