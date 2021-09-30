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
<div class="accommodation-tags">
   <div class="container">
      <a href="{{route('collectibles')}}">{{ __('content.Collectibles') }} </a>  
      <i class="fa fa-angle-right"> </i>
      <a href="{{route('collectibles').'/'.$data->category->name}}"> {{$data->category->name}} </a>
      <i class="fa fa-angle-right"> </i>
      <a href="{{route('collectibles').'/'.$data->category->name.'/'.$data->subCategory->name}}"> {{$data->subCategory->name}} </a>
      <i class="fa fa-angle-right"> </i>
      <a href="javascript:void(0)" disabled> {{$data->title}} </a>
   </div>
</div>
@endsection
@section('content')

<section class="pad-top-40">
   <div class="container">

     
      <div class="row">
         <div class="col-md-7 col-lg-8 col-sm-12 col-12">
            <div class="apartment-name m-b-10">
               <h3 class="col-black"> {{$data->title}} </h3> 
                  <a href="{{route('collectibles').'/'.$data->category->name}}"> 
                     <p> {{$data->category->name}} </p>
                  </a>, 
                  <a href="{{route('collectibles').'/'.$data->category->name.'/'.$data->subCategory->name}}"> 
                     <p> {{$data->subCategory->name}} </p>
                  </a>
            </div>
            <div class="image-slider arrows-3">
               <div>
                  <img src="{{URL::to('/public/storage/products/feature/'.$data->feature_img)}}" width="100%">
               </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-12">
            <div class="apartment-title">
               <h5 class="alegraya col-black">   <span> ${{number_format($data->price, 1)}} </span> </h5>
            </div>
            <div class="description-field"  >
               <h5>{{ __('content.Description') }} </h5>
               <p>
                  {{$data->description}}
               </p>
            </div>
            <div class="block-element text-right">
               <div id="cart_load">
                  
               </div>
               <a href="javascript:void(0)" data-id="{{base64_encode($data->id)}}" class="custom-btn6 addtocartColl">{{ __('content.Add to Cart') }} </a>
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
         <h3 class="col-black alegraya">{{ __('content.Similar Collectibles You May Like') }} </h3>
      </div>
      <div class="row margin-1">
         @foreach($similar as $val)

            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1 m-b-20">
                <div class="art-multiple-box arrows-1">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                           @if(Auth::id() && count($val->wishlist) == 0)
                              <label class="wishlist-icon white-heart collAddWishlist" data-id="{{base64_encode($val->id)}}"> 
                                 <i class="fa fa-heart"> </i>  <span>{{ __('content.Save') }} </span> 
                              </label>
                           @endif
                        </div>
                        <a href="{{URL::to('/collectibles/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                           <div class="feature-title1">
                              <h5> {{$val->title}} </h5>
                              <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}} </p>
                              <h6> ${{number_format($val->price, 1)}} </h6>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>


@endsection
