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
      @foreach($categories as $val)
         <div class="btn-group">
            <a href="{{route('collectibles').'/'.$val->name}}" class="btn btn-lg">
            {{$val->name}}  
            </a>
            <div class="dropdown-menu dropdown-small">
               <div class="filters-wrapper">
                  <div class="filter-box no-border">
                     <div class="anchor-filter">
                        @foreach($val->sub as $sval)
                           <a href="{{route('collectibles').'/'.$val->name.'/'.$sval->name}}">{{$sval->name}}</a>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      @endforeach
   </div>
</div>
@endsection
@section('content')

<section class="collectibles-sec">
   <div class="container">
      <h3 class="col-white alegraya"> Comfort & Quality Range of Selections to Play Up or Down Your Place  </h3>
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
                  <div class="image-slider img-mob-margin arrows-1 m-b-20 {{$c>2 ? 'feature-small' : 'feature-large'}}">
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
               @php $c++; @endphp
            @endif
            @php $r++; @endphp
         @endforeach
      </div>
   </div>
</section>

@endsection
