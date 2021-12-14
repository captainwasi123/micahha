@extends('web.includes.master')
@section('title', 'Checkout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'> -->

<form method="post">
   @csrf
   <section class="pad-top-60 pad-bot-60">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="sec-head1 no-margin">
                  <h3 class="alegraya no-margin"> Checkout </h3>
               </div>
               <div class="container" style="padding: 0px !important;">
                  

                  <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                     <div class="controls-top">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev">
                           <i class="fas fa-chevron-left"></i>
                        </a>
                     </div>
                     <div class="main" style="margin-top: 50px;margin-bottom:  10px;">

                        <div class="slider slider-nav">
                           @foreach(Auth::user()->addresses as $val)
                              <div>
                                 <label class="address-box" for="demo{{$val->id}}">
                                    <input type="radio" name="savedAddress" class="card-input-element d-none" id="demo{{$val->id}}" value="{{$val->id}}">
                                       <div class="card card-body">
                                          <h4 class="card-title alegraya no-margin">{{@$val->country->nicename}}</h4>
                                          <p class="card-text alegraya no-margin cut-line">{{$val->address}}</p>
                                          <p class="card-text alegraya no-margin">Post Code:{{$val->postcode}}</p>
                                       </div>
                                 </label>
                              </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="controls-top" style="right: 0px;">
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-5 col-lg-5 col-12">
               <div class="checkout-form">
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="FIRST NAME" name="first_name" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="LAST NAME" name="last_name" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                           <div class="checkout-field1">
                              <input type="email" placeholder="ENTER YOUR EMAIL" name="email" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                           <div class="checkout-field1">
                              <select name="country" id="country" required>
                                 <option value="">Country</option>
                                 @foreach($countries as $val)
                                    <option value="{{$val->country_id}}">{{@$val->country->country}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="Address" name="address" id="address" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="CITY" name="city" id="city" required>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="STATE" name="state" id="state" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-12">
                           <div class="checkout-field1">
                              <input type="text" placeholder="POSTCODE" name="post_code" id="post_code" required>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                           <div class="checkout-field1">
                              <input type="number" placeholder="PHONE NUMBER" name="phone" id="phone" required>
                           </div>
                        </div>
                     </div>
                     <div class="row m-t-10">
                        <div class="col-12">
                           <div class="checkout-textual1">
                              <p> <input type="checkbox" name="save_address"> Save shipping address. </p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <div class="col-md-7 col-lg-7 col-12">
               <div class="row" id="cart_tray_checkout">
                  <div class="col-md-12">
                     <div class="order-summary">
                        <h3 class="alegraya no-margin"> Order Summary <a href="{{route('web.cart')}}"> Edit Cart </a> </h3>
                        <div class="cart-table">
                           <table>
                              <thead>
                                 <th> Item </th>
                                 <th> Products </th>
                                 <th> Quantity </th>
                                 <th> Price </th>
                              </thead>
                              <tbody>
                                 @php
                                    $subtotal = 0;
                                    $gst = 0;
                                    $s=1;
                                 @endphp
                                 @if(Session::get('cart') !== null)
                                    @foreach(Session::get('cart') as $val)
                                       <tr>
                                          <td class="text-center"> {{$s}} </td>
                                          <td class="img-basket"> <img src="{{URL::to('/public/storage/'.$val['photo'])}}"> <b> {{$val['title']}} </b> <span> {{$val['type']}} -> by: {{$val['by']}} </span> </td>
                                          <td class="col-black"> {{$val['quantity']}}x </td>
                                          <td class="col-black"> ${{$val['price']*$val['quantity']}} </td>
                                       </tr>
                                       @php $subtotal += $val['price']*$val['quantity']; $s++ @endphp
                                    @endforeach
                                    @if(count(Session::get('cart')) == 0)
                                       <tr>
                                          <td colspan="4">No Items Found.</td>
                                       </tr>
                                    @endif
                                 @endif
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-8">
                     <div class="cart-total2">
                        <table>
                           <tbody>
                              <tr>
                                 <td> Sub Total </td>
                                 <td class="text-right"> ${{$subtotal}} </td>
                              </tr>
                              <tr>
                                 <td> GST </td>
                                 <td class="text-right"> {{$gst}}% </td>
                              </tr>
                              @php $discount = 0; @endphp
                              @if(!empty($coupon->id))
                                 <tr>
                                    <td>Referral Discount</td>
                                    <td class="text-right">{{'- $'.number_format($coupon->amount)}}</td>
                                 </tr>
                                 @php $discount = $coupon->amount; @endphp
                              @endif
                              <tr>
                                 <th> Total </th>
                                 <th class="text-right"> ${{(((($subtotal/100)*$gst)+$subtotal)-$discount)}} </th>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <br><br><br>
                     <div>
                        <button class="submit-btn2 alegraya" id="order_btn"> PLACE YOUR ORDER </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </section>
</form>

<!-- Modal -->
<div id="unableShipping" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body text-center">
         <h1>Unable to proceed</h1>
        <p>Please remove disabled products</p>
        <br>
        <a href="{{route('web.cart')}}" class="submit-btn2 "> Edit Cart </a>
        <br><br><br>
        <a href="javascript:void(0)" class="dismiss_btn" data-dismiss="modal">&times; Dismiss</a>
      </div>
    </div>

  </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script type="text/javascript">
 
 $('.slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 1,
   dots: false,
   prevArrow: $('a[data-slide="prev"]'),
   nextArrow: $('a[data-slide="next"]'),
   focusOnSelect: true,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 700,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
 });
</script>
@endsection
