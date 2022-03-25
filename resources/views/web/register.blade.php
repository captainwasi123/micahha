@extends('web.includes.master')
@section('title', 'Register')
@section('content')

<section class="pad-top-60 pad-bot-60">
   <div class="container" style="max-width: 900px;">
      <div class="sec-head1">
         <h3>{{ __('content.Create An Account') }} </h3>
         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
      </div>
      <div class="create-account-form">
         <form method="post" autocomplete="off" action="{{route('user.register')}}">
            @csrf
            <input type="hidden" name="refer_by" value="{{isset($refer_by) ? base64_encode(base64_encode($refer_by)) : '0'}}">
            <div class="row">
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.First Name *') }} </p>
                     <input type="text" name="first-name" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.Last Name *') }} </p>
                     <input type="text" name="last-name" required="">
                  </div>
               </div>
               <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.Email Address *') }} <span id="email_error"></span></p>
                     <input type="email" name="email" id="email" autocomplete="false" required="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.Username *') }} <span id="user_error"></span></p>
                     <input type="text" name="username" id="username" autocomplete="false" required>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.Country *') }} </p>
                     <select name="Country" id="country_input" required>
                        <option value="">{{ __('content.Select') }}</option>
                        @foreach($countries as $val)
                           <option value="{{$val->id}}" data-code="{{'+'.$val->phonecode}}">{{$val->country}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1 phoneField">
                     <p>{{ __('content.Phone *') }} </p>
                     <input type="number" name="phone" required="">
                     <input type="hidden" name="phonecode" id="phonecode_input">
                     <span id="phonecode_span"></span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-field1" style="margin-bottom: 3px;">
                           <p>{{ __('content.New password *') }} </p>
                           <input type="password" name="password" id="passwordField" required="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-field1" style="margin-bottom: 3px;">
                           <p>{{ __('content.Confirm New Password *') }} </p>
                           <input type="password" name="password_confirmation" required="">
                        </div>
                     </div>
                  </div>
                  <div class="progress">
                     
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p>{{ __('content.Newsletter Subscription') }} </p>
                     <h6 class="checkbox1"> <input type="checkbox" name="newsletter">{{ __('content.I agree to receive the Micahha newsletter.') }}  </h6>
                  </div>
                  <div class="form-field1">
                  <br><br>
                     <button class="custom-btn1">{{ __('content.Create an account') }} </button>
                     <a href="{{route('user.login')}}" class="custom-btn2">{{ __('content.Back to Login') }} </a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>

@endsection