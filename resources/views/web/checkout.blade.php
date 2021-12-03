@extends('web.includes.master')
@section('title', 'Checkout')
@section('content')

<section class="pad-top-60 pad-bot-60">
   <div class="container" >
      <div class="row">
         <div class="col-md-5 col-lg-5 col-12">
            <div class="sec-head1 text-left">
               <h3 class="alegraya"> Checkout </h3>
            </div>
            <div class="checkout-form">
               <form method="post">
                  @csrf
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
                           <input type="text" placeholder="Address" name="address" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-12">
                        <div class="checkout-field1">
                           <input type="text" placeholder="CITY" name="city" required>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-12">
                        <div class="checkout-field1">
                           <input type="text" placeholder="STATE" name="state" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-12">
                        <div class="checkout-field1">
                           <input type="text" placeholder="POSTCODE" name="post_code" required>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-12">
                        <div class="checkout-field1">
                           <input type="number" placeholder="PHONE NUMBER" name="phone" required>
                        </div>
                     </div>
                  </div>
                  <div class="row m-t-10">
                     <div class="col-12">
                        <div class="checkout-textual1">
                           <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="col-md-7 col-lg-7 col-12">
            <div class="row">
               <div class="col-md-12">
                  <div class="order-summary">
                     <h3 class="alegraya"> Order Summary <a href="{{route('web.cart')}}"> Edit Cart </a> </h3>
                     <div class="cart-table">
                        <table>
                           <thead>
                              <th> Item </th>
                              <th> Products </th>
                              <th> Quantity </th>
                              <th> Price </th>
                           </thead>
                           <tbody id="cart_tray_checkout">
                              @php
                                 $subtotal = 0;
                                 $gst = $saleSetting->gst;
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
            </form>
         </div>
      </div>
   </div>
   </div>
</section>


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
@endsection
