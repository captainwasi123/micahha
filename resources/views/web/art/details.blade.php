@extends('web.includes.master')
@section('title', 'Details | Art')
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
      <a href="{{route('art')}}">{{ __('content.Art') }} </a>  
      <i class="fa fa-angle-right"> </i>
      <a href="{{URL::to('/art')}}/{{$data->cat->name}}"> {{ __('content.'.$data->cat->name) }} </a>
      <i class="fa fa-angle-right"> </i>
      <a href="javascript:void(0)"> {{$data->title}} </a>
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
               <p> Art by: <strong>{{empty($data->artist) ? '' : $data->artist->username}}</strong> </p>
            </div>
            <div class="image-zoomer">
               <div class="zoom-area">
                  <div class="large"></div>
                  <img class="small" src="{{URL::to('/public/storage/art/main/thumbnail/')}}/{{$data->image}}"  />
               </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-12">
            <div class="apartment-title">
               <h5 class="alegraya col-black">  <span> {{'$'.number_format($data->price, 2)}} </span> </h5>
            </div>
            <div class="description-field" >
               <h5>{{ __('content.Description:') }} </h5>
               <p>{{ __('content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod') }}
                  {{$data->description}}
               </p>
            </div>
            <div class="block-element text-right">
               <div id="cart_load">
                  
               </div>
               <a href="javascript:void(0)" class="custom-btn6 addtocartArt" data-id="{{base64_encode($data->id)}}">{{ __('content.Add to Cart') }} </a>
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
         <h3 class="col-black alegraya">{{ __('content.Similar Arts You May Like') }} </h3>
      </div>
      <div class="row margin-1">
         @foreach($similar as $val)
            <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
               <div class="art-multiple-box arrows-1">
                   <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/storage/art/main/thumbnail/')}}/{{$val->image}}">
                     </div>
                     <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label>
                           <a href="{{URL::to('/art')}}/{{$val->cat->name}}" class="art-btn1"> 
                              <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> 
                              <span>{{ __('content.Similar') }} </span> 
                           </a>
                        </label>
                        <label class="wishlist-icon"> 
                           <i class="fa fa-heart"> </i>  
                           <span>{{ __('content.Save') }} </span> 
                        </label>
                        </div>
                        <a href="{{URL::to('/art/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                           <div class="feature-title1">
                              <h5> {{$val->title}} </h5>
                              <p> Made By: 
                                 <strong>{{empty($val->artist) ? '' : $val->artist->username}}</strong>
                              </p>
                              <h6> {{'$'.number_format($val->price, 2)}} </h6>
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