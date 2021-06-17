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
<div class="accomodation-tags">
   <div class="container">
      <a href="{{route('collectibles')}}"> Collectibles </a>  
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
               <p> {{$data->category->name}}, {{$data->subCategory->name}}</p>
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
               <h5> Description </h5>
               <p>
                  {{$data->description}}
               </p>
            </div>
            <div class="block-element text-right">
               <a href="" class="custom-btn6"> Add to Cart </a>
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
         <h3 class="col-black alegraya"> Similar Collectibles You May Like </h3>
      </div>
      <div class="row margin-1">
         @foreach($similar as $val)
            <div class="col-md-4 col-lg-4 col-sm-4 col-12 padding-1">
               <div class="image-slider img-mob-margin arrows-1 m-b-20">
                   <div class="feature-box1">
                     <img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}">
                     <div class="feature-title1">
                     <h5> {{$val->title}} </h5>
                     <p> {{empty($val->category) ? '' : $val->category->name}}<small>,</small> {{empty($val->subCategory) ? '' : $val->subCategory->name}} </p>
                     <h6> ${{number_format($val->price, 1)}} </h6>
                     </div>
                     <a href="" class="feature-star"> <i class="fa fa-star"> </i> </a>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>


@endsection
