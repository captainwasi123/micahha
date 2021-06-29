@extends('web.includes.master')
@section('title', 'Cart')
@section('content')

<section class="pad-top-60 pad-bot-60">
   <div class="container" >
      <div class="sec-head3 m-b-20">
         <h3 class="col-black"> Cart</h3>
      </div>
      <div class="row">
         <div class="col-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
         </div>
         <div class="col-md-12 col-lg-12 col-12">
            <div class="cart-table">
               <table>
                  <thead>
                     <th class="off-1"> . </th>
                     <th> Image </th>
                     <th> Products </th>
                     <th> Price </th>
                     <th> Quantity </th>
                     <th> Total </th>
                  </thead>
                  <tbody id="cart_tray">
                     @php
                        $subtotal = 0;
                        $gst = $saleSetting->gst;
                     @endphp
                     <input type="hidden" name="gst" value="{{$gst}}" id="gst">
                     @if(Session::get('cart') !== null)
                        @foreach(Session::get('cart') as $val)
                           <tr>
                              <td class="text-center"> 
                                 <a href="javascript:void(0)" data-price="{{$val['price']}}" data-qty="{{$val['quantity']}}" class="col-black removeItemCart" data-id="{{$val['id']}}"> <i class="fa fa-trash"> </i> </a> 
                              </td>
                              <td> <img src="{{URL::to('/public/storage/'.$val['photo'])}}"> </td>
                              <td> <b> {{$val['title']}} </b> <span> {{$val['type']}} -> by: {{$val['by']}} </span> </td>
                              <td class="col-blue"> ${{number_format($val['price'], 2)}} </td>
                              <td>
                                 <div class="counting-number">
                                    <button data-decreaseCart="" class="minusItem" data-id="{{base64_decode($val['id'])}}" data-price="{{$val['price']}}" data-method="{{$val['type'] == 'Art' ? '1' : '0'}}">-</button>
                                    <input data-valueCart="" type="text" id="cart_qty{{base64_decode($val['id'])}}" value="{{$val['quantity']}}" disabled="">
                                    <button data-increaseCart="" class="plusItem" data-id="{{base64_decode($val['id'])}}" data-price="{{$val['price']}}" data-method="{{$val['type'] == 'Art' ? '1' : '0'}}">+</button>
                                 </div>
                              </td>
                              <td class="col-black"> $<font id="item_total{{base64_decode($val['id'])}}">{{$val['price']*$val['quantity']}}</font> </td>
                           </tr>
                           @php $subtotal += $val['price']*$val['quantity']; @endphp
                        @endforeach
                        @if(count(Session::get('cart')) == 0)
                           <tr>
                              <td colspan="6">No Items Found.</td>
                           </tr>
                        @endif
                     @else
                        <tr>
                           <td colspan="6">No Items Found.</td>
                        </tr>
                     @endif
                  </tbody>
               </table>
            </div>
            <div class="row m-b-30">
               <div class="col-md-12 col-lg-12 col-12 text-right">
                  <br>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7 col-lg-7 col-12">
               </div>
               <div class="col-md-5 col-lg-5 col-12">
                  <div class="cart-total">
                     <h3> Cart Total </h3>
                     <table>
                        <tbody>
                           <tr>
                              <td> Sub Total </td>
                              <td> $<span id="cart_subtotal">{{$subtotal}}</span> </td>
                           </tr>
                           <tr>
                              <td> GST </td>
                              <td> {{$gst}}% </td>
                           </tr>
                           <tr>
                              <th> Total </th>
                              <th> $<span id="cart_total">{{((($subtotal/100)*$gst)+$subtotal)}}</span> </th>
                           </tr>
                        </tbody>
                     </table>
                     <a href="{{route('web.cart.checkout')}}" class="custom-btn6"> Process to Checkout </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
