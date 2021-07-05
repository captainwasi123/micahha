@extends('web.includes.master')
@section('title', 'Art')
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
      <!-- Furniture Filter Starts Here -->
      @foreach($type as $val)
         <div class="btn-group">
            <a href="{{route('web.portrait').'/'.$val->name}}" class="btn btn-lg">
            {{$val->name}}  
            </a>
         </div>
      @endforeach
   </div>
</div>
@endsection
@section('content')

<section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="sec-head2">
         <h3 class="col-blue alegraya"> {{empty($portraitType) ? 'Digital' : $portraitType}} Portrait Customization </h3>
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
                           <img src="{{URL::to('/public/storage/art/portfolio/')}}/{{$val->image}}">
                        </div>
                         <div class="art-item-hover">
                           <div class="art-item-actions">
                              <label class="wishlist-icon white-heart"> 
                                 <i class="fa fa-heart"> </i>  <span> Save </span> 
                              </label>
                           </div>
                           <a href="{{URL::to('/portrait/details/'.base64_encode($val->id).'/'.str_replace(' ', '-', $val->title))}}">
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
               @php $c++; @endphp
            @endif
            @php $r++; @endphp
         @endforeach
         @if(count($data) == '0')
            <div class="col-12">
               <h4>No Customization Available.</h4>
            </div>
         @endif
      </div>
   </div>
   </section>
   <!-- What We Offer Section Ends Here -->
   <!-- What We Offer Section Starts Here -->
   <section class="pad-top-40 pad-bot-20">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-12 col-lg-12">
            {{$data->links()}}
         </div>
      </div>
   </div>
   </section>

@endsection
