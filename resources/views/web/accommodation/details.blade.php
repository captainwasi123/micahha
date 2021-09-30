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
 <div class="accommodation-tags">
    <div class="container">
       <a href="{{URL::to('/')}}">{{ __('content.Home') }} </a>  
       <i class="fa fa-angle-right"> </i>
       <a href="{{route('accommodation')}}">{{ __('content.Accommodation') }} </a>
       <i class="fa fa-angle-right"> </i>
       <a href="javascript:void(0)"> {{ $list_data->title }} </a>
    </div>
 </div>
@endsection
@section('content')
   <!-- Accomodation Entry Details Section Starts Here -->
      <section class="pad-top-40">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                    @if ($message = Session::get('success'))<div class="alert alert-success alert-block">	<button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>@endif
                    @if ($message = Session::get('error'))<div class="alert alert-danger alert-block">	<button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                 </div>
             </div>
            <div class="row">
               <div class="col-md-7 col-lg-8 col-sm-12 col-12">
                  <div class="apartment-name m-b-10">
                     <h3 class="col-black"> {{ $list_data->title }} </h3>
                     <p> <img width="20px" src="{{asset('public/website/images/marker.png')}}" alt="marker"> {{$list_data->address->accommodation_id}}, {{$list_data->address->city}}, {{$list_data->address->state}}, {{$list_data->address->post_code}}, {{$list_data->address->country->nicename}} </p>
                  </div>
                    <div class="image-slider arrows-2">

                     <div class="rel-1">
                        <a class="wishlist-icon"> <i class="fa fa-heart"> </i>  <span>{{ __('content.Save') }} </span> </a>
                        <img src="{{URL::to('/public/storage/listing/main/')}}/{{$list_data->feature_img}}">
                     </div>
                     @foreach($list_data->galleryImages as $gallery_images)
                         <div class="rel-1">
                            <img src="{{URL::to('/public/storage/listing/gallery/'.$gallery_images->id.'-'.$gallery_images->image)}}">
                         </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-md-5 col-lg-4 col-sm-12 col-12">
                  <div class="apartment-title">
                     <h5 class="alegraya col-black"> {{$list_data->type->name}} <span> {{'$'.number_format($list_data->price, 2)}} </span> </h5>
                  </div>
                  <div class="apartment-features">
                     <h6 class="alegraya">{{ __('content.Amenities') }} </h6>
                     <div class="alegraya m-b-20">
                        @foreach($list_data->amenities as $amenities)
                        <span> <img src="{{URL::to('/public/website')}}/images/apartment-icon1.jpg"> {{$amenities->amenities->name}} </span>
                        @endforeach
                     </div>
                  </div>
                  <div class="apartment-actions">
                     <a href="" class="custom-btn4">{{ __('content.Request a Tour') }} </a>
                     <a href="javascript: void(0)" class="custom-btn4" data-toggle="modal" data-target="#booK_now">{{ __('content.Book Now') }} </a>
                     <a href="javascript: void(0)" class="custom-btn4" data-toggle="modal" data-target="#enquiry">{{ __('content.Enquiry') }} </a>
                  </div>
                  <div class="description-field">
                     <h5>{{ __('content.Description') }} </h5>
                     <p>{{$list_data->description}}</p>
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
               <h3 class="col-black alegraya">{{ __('content.Similar Properties You May Like') }} </h3>
            </div>
            <div class="row margin-1">
            @foreach($rendom_list as $list_val)
               <div class="col-md-4 col-lg-4 col-sm-6 col-12 padding-1 m-b-20">
                 <div class="item-box">
                  <div class="image-slider arrows-3">
                     <div> <img src="{{URL::to('/public/storage/listing/main/')}}/{{$list_val->feature_img}}"> </div>
                     @foreach($list_val->galleryImages as $gallery_images)
                        <div> <img src="{{URL::to('/public/storage/listing/gallery/'.$gallery_images->id.'-'.$gallery_images->image)}}"> </div>
                     @endforeach
                  </div>
                     <a href="{{route('accommodation.details',base64_encode($list_val->id))}}">
                     <div class="prop-box-text">
                        <h4> {{'$'.number_format($list_val->price, 2)}} {{$list_val->unit}} </h4>
                        <p> {{$list_val->address->accommodation_id}}, {{$list_val->address->city}}, {{$list_val->address->state}}, {{$list_val->address->post_code}}, {{$list_val->address->country->nicename}} </p>
                        @if(Auth::id() && count($list_val->wishlist) == 0)
                           <a href="javascript:void(0)" data-id="{{base64_encode($list_val->id)}}" class="feature-star accomAddWishlist"> 
                              <i class="fa fa-heart"> </i> 
                           </a>
                        @endif
                     </div>
                     </a>
                  </div>
               </div>
            @endforeach
            </div>
         </div>
         </div>
      </section>
      <!-- What We Offer Section Ends Here -->


      {{-- Book Now Modal --}}

      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booK_now">
        Launch demo modal
      </button> --}}

      <!-- Modal -->
      <div class="modal fade" id="booK_now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="booK_nowLabel">{{ __('content.Book Now') }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                    <form method="post" action="{{route('web.add_reservation_modal')}}">
                        @csrf
                        <input type="hidden" name="list_id" value="{{ @$list_data->id }}">
                        <input type="hidden" name="landlord_id" value="{{ base64_encode(@$list_data->landlord_id) }}">
                        <input type="hidden" name="user_id" value="{{@$user->id}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">{{ __('content.User Name') }}</label>
                                <input type="text" class="form-control"name="user_name" value="{{@$user->first_name ." ". @$user->last_name}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">{{ __('content.Phone Number') }}</label>
                                <input type="number" class="form-control" value="{{@$user->phone}}" name="ph_number" required>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label for="">{{ __('content.No of People') }}</label>
                                <input type="number" class="form-control" name="no_of_people" required>
                            </div> --}}
                            <div class="form-group col-md-12">
                                <label for="">{{ __('content.Check-In | Check-Out') }}</label>
                                <input type="text" class="form-control datepicker-here  digits"  name="check_id_date" required>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-7">
                                       <div class="counting-name">
                                          <h5>{{ __('content.Adults') }} </h5>
                                          <p>{{ __('content.Ages 18 or above') }} </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-5">
                                            {{-- <button type="button" data-decrease>-</button> --}}
                                          <input class="form-control" type="number" name="adults_qty" required />
                                          {{-- <button type="button" data-increase>+</button> --}}
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 col-7">
                                       <div class="counting-name">
                                          <h5>{{ __('content.Children') }} </h5>
                                          <p>{{ __('content.Ages 13 or above') }} </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-5">

                                             {{-- <button type="button" data-decrease>-</button> --}}
                                             <input class="form-control" type="number" name="children" value="0" />
                                             {{-- <button type="button" data-increase>+</button> --}}

                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 col-7">
                                       <div class="counting-name">
                                          <h5>{{ __('content.Infants') }} </h5>
                                          <p>{{ __('content.Ages 13 or above') }} </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-5">
                                            {{-- <button type="button" data-decrease>-</button> --}}
                                            <input class="form-control" type="number" name="infants" value="0" />
                                            {{-- <button type="button" data-increase>+</button> --}}
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('content.Submit') }}</button>
                    </form>
                       </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      {{-- end Book Now Modal --}}

      {{-- Benquiry Modal --}}

      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiry">
        Launch demo modal
      </button> --}}

      <!-- Modal -->
      <div class="modal fade" id="enquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enquiryLabel">{{ __('content.Enquiry') }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                    <form method="post" action="{{route('web.add_enquiry')}}">
                        @csrf
                        <input type="hidden" name="list_id" value="{{ @$list_data->id }}">
                        <input type="hidden" name="user_id" value="{{ @$user->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">{{ __('content.Name') }}</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">{{ __('content.Email') }}</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">{{ __('content.Subject') }}</label>
                                <select class="form-control" name="enquiry_type_id" required>
                                    <option value="">Select...</option>
                                    @foreach ($enquiry_type as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="details" id="" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('content.Submit') }}</button>
                    </form>
                       </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      {{-- end enquiry Modal --}}

@endsection
@section('addScript')
<script type="text/javascript">
    $(function() {

        $('input[name="check_id_date"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="check_id_date"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="check_id_date"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });
    </script>

@endsection
