<div class="col-md-12">
   <div class="order-summary">
      <h3 class="alegraya no-margin"> {{$id.' '.$country->gst}} Order Summary <a href="{{route('web.cart')}}"> Edit Cart </a> </h3>
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
                  $gst = $country->gst;
                  $s=1;
                  $valid = 0;
               @endphp
               @if(Session::get('cart') !== null)
                  @foreach(Session::get('cart') as $val)
                     @php $validate = 1; @endphp
                     @if($val['type'] != 'Art')
                        @php $validate = 0; @endphp
                        @foreach($val['shipCountries'] as $sc)
                           @if($sc == $id)
                              @php $validate = 1; @endphp
                           @endif
                        @endforeach
                     @endif
                     <tr class="{{$validate == 0 ? 'disabled' : ''}}">
                        <td class="text-center"> {{$s}} </td>
                        <td class="img-basket"> 
                           <img src="{{URL::to('/public/storage/'.$val['photo'])}}"> <b> {{$val['title']}} </b> <span> {{$val['type']}} -> by: {{$val['by']}} </span> 
                           @if($validate == 0)
                              <p class="noti">Unable to ship this product to your country</p>
                           @endif
                        </td>
                        <td class="col-black"> {{$val['quantity']}}x </td>
                        <td class="col-black"> ${{$val['price']*$val['quantity']}} </td>
                     </tr>
                     @php 
                        $subtotal += $val['price']*$val['quantity']; 
                        $s++; 
                     @endphp
                     @if($validate == '0')
                        @php $valid = 1; @endphp
                     @endif
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
      <input type="hidden" id="valid" value="{{$valid}}">
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
               @php $gst = $subtotal >= $country->max_value ? $gst : 0; @endphp
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
      @if($valid == 0)
         <button class="submit-btn2 alegraya"> PLACE YOUR ORDER </button>
      @else
         <button type="button" class="submit-btn2 alegraya" data-toggle="modal" data-target="#unableShipping"> PLACE YOUR ORDER </button>
      @endif
   </div>
</div>