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

<section class="pad-bot-40 pad-top-60">
   <div class="container">
      <div class="row margin-1">
         @foreach($data as $val)
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="image-slider img-mob-margin arrows-1 m-b-20">
                   <div class="feature-box1">
                     <img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}">
                     <a href="{{URL::to('/collectibles/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                        <div class="feature-title1">
                           <h5> {{$val->title}} </h5>
                           <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}} </p>
                           <h6> ${{number_format($val->price, 1)}} </h6>
                        </div>
                     </a>
                     <a href="" class="feature-star"> <i class="fa fa-heart"> </i> </a>
                  </div>
                  @foreach($val->gallery as $gal)
                   <div class="feature-box1">
                     <img src="{{URL::to('/public/storage/products/gallery/'.$gal->id.'-'.$gal->image)}}">
                     <a href="{{URL::to('/collectibles/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                        <div class="feature-title1">
                           <h5> {{$val->title}} </h5>
                           <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}} </p>
                           <h6> ${{number_format($val->price, 1)}} </h6>
                        </div>
                     </a>
                  </div>
                  @endforeach
               </div>
            </div>
         @endforeach
      </div>
      <div class="row">
         <div class="col-md-12 col-12 col-lg-12">
            {{$data->links()}}
         </div>
      </div>
   </div>
</section>
@endsection
