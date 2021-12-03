@php
   $subtotal = 0;
   $gst = $saleSetting->gst;
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
<input type="hidden" id="valid" value="{{$valid}}">