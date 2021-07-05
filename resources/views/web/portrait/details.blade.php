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
<div class="accommodation-tags">
   <div class="container">
      <a href="{{route('web.portrait')}}"> Customization </a>  
      <i class="fa fa-angle-right"> </i>
      <a href="{{route('web.portrait')}}/{{$data->portrait_type->name}}"> {{$data->portrait_type->name}} </a>
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
               <p> Art by: {{$data->artist->first_name.' '.$data->artist->last_name}} </p>
            </div>
            <div class="image-zoomer">
               <div class="zoom-area">
               <div class="large"></div>
               <img class="small" src="{{URL::to('/public/storage/art/portfolio/')}}/{{$data->image}}"  />
            </div>
            </div>
         </div>
         <div class="col-md-5 col-lg-4 col-sm-12 col-12">
            <div class="apartment-title">
               <h5 class="alegraya col-black">   <span> {{'$'.number_format($data->price, 2)}} </span> </h5>
            </div>
            <div class="description-field" >
               <h5> Description </h5>
               <p>
                  {{$data->description}}
               </p>
            </div>
            <div class="block-element text-right">

               @if(session()->has('success'))
                   <div class="alert alert-success">
                       {{ session()->get('success') }}
                   </div>
               @endif
            
               <a   data-toggle="modal" data-target="#exampleModal" class="custom-btn6"> Order Now </a>
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
         <h3 class="col-black alegraya"> Similar Customized Portrait You May Like </h3>
      </div>
      <div class="row margin-1">
         @foreach($similar as $val)
            <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                <div class="art-multiple-box arrows-1">
                  <div class="art-item-box">
                     <div class="art-item-image">
                        <img src="{{URL::to('/public/storage/art/portfolio/')}}/{{$val->image}}">
                     </div>
                      <div class="art-item-hover">
                        <div class="art-item-actions">
                        <label class="wishlist-icon white-heart"> <i class="fa fa-heart"> </i>  <span> Save </span> </label>
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
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>


<!-- Modal -->
      <div class="modal custom-modal1 fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form method="post" action="{{route('web.portrait.checkout')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="pid" value="{{base64_encode($data->id)}}">
                  <div class="modal-header no-border">
                     <h5 class="modal-title" id="exampleModalLabel"> Portrait Customization </h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body no-border">
                     <div class="pay-form">
                          <div class="pay-field1 filepond1">
                               <div class="avatar-upload">
                                   <div class="avatar-edit">
                                       <input type='file' id="imageUpload" name="attachment" accept=".png, .jpg, .jpeg" required />
                                       <label for="imageUpload"> Upload your picture here. </label>
                                   </div>
                                   <div class="avatar-preview">
                                       <div id="imagePreview" style="background-image: url('{{URL::to('/public/website')}}/images/cloud-icon.png');">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="pay-field1">
                              <h6> Requirement </h6>
                              <textarea class="pay-form-field" name="requirements" required></textarea>
                           </div>
                     </div>
                  </div>
                  <div class="modal-footer no-border">
                     <button type="reset" class="btn btn-secondary pay-btn bg-silver2 col-black" data-dismiss="modal">Cancel</button>
                     <button type="submit" class="btn bg-blue col-white pay-btn">Pay {{'$'.number_format($data->price, 2)}}</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
@endsection
