@extends('web.includes.master')
@section('title', 'Art')
@section('addStyle')
<style type="text/css">
   .header-bottom {
      display: none;
   }
</style>
@endsection
@section('content')
<section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="sec-head2">
         <h3 class="col-blue alegraya"> Explore The World Of {{isset($is_cat) ? $is_cat : 'Arts'}}</h3>
      </div>
      <div class="row margin-1">
         @php $c=1; $r=1; @endphp
         @foreach($data as $val)
            @if(($r%2) == 1)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                  <div class="art-multiple-box arrows-1">
            @endif
                     <div class="art-item-box">
                        <div class="art-item-image">
                           <img src="{{URL::to('/public/storage/art/main/')}}/{{$val->image}}">
                        </div>
                        <div class="art-item-hover">
                           <div class="art-item-actions">
                              <label>
                                 <a href="{{URL::to('/art')}}/{{$val->cat->name}}" class="art-btn1"> 
                                    <img src="{{URL::to('/public/website')}}/images/similar-icon.png"> 
                                    <span> Similar </span> 
                                 </a>
                              </label>
                              <label class="wishlist-icon"> 
                                 <i class="fa fa-heart"> </i>  
                                 <span> Save </span> 
                              </label>
                           </div>
                           <a href="{{URL::to('/art/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
                              <div class="feature-title1">
                                 <h5> {{$val->title}} </h5>
                                 <p> Made By: 
                                    <strong>{{empty($val->artist) ? '' : $val->artist->first_name}}</strong>
                                 </p>
                                 <h6> {{'$'.number_format($val->price, 2)}} </h6>
                              </div>
                           </a>
                        </div>
                     </div>
            @if(($r%2) == 0)
                  </div>
               </div>
            @endif
            @php $r++; @endphp
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
