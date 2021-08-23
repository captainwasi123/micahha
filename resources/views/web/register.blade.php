@extends('web.includes.master')
@section('title', 'Register')
@section('content')

<section class="pad-top-60 pad-bot-60">
   <div class="container" style="max-width: 900px;">
      <div class="sec-head1">
         <h3> Create An Account </h3>
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
                     <p> First Name * </p>
                     <input type="text" name="first-name" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Last Name *</p>
                     <input type="text" name="last-name" required="">
                  </div>
               </div>
               <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Email Address *</p>
                     <input type="email" name="email" required="">
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Username * <span id="user_error"></span></p>
                     <input type="text" name="username" id="username" autocomplete="false" required>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Country *</p>
                     <select name="Country" id="country_input" required>
                        <option value="">Select</option>
                        @foreach($countries as $val)
                           <option value="{{$val->id}}" data-code="{{'+'.$val->phonecode}}">{{$val->country}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-md-4 col-lg-4 col-12 col-sm-12">
                  <div class="form-field1 phoneField">
                     <p> Phone * </p>
                     <input type="number" name="phone" required="">
                     <input type="hidden" name="phonecode" id="phonecode_input">
                     <span id="phonecode_span"></span>
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> New password *</p>
                     <input type="password" name="password" required="">
                  </div>
               </div>
               <div class="col-md-3 col-lg-3 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Confirm New Password *</p>
                     <input type="password" name="password_confirmation" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Newsletter Subscription </p>
                     <h6 class="checkbox1"> <input type="checkbox" name="newsletter"> I agree to receive the Micahha newsletter.  </h6>
                  </div>
               </div>
               
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12 m-t-20">
                  <div class="form-field1">
                     <button class="custom-btn1"> Create an account </button>
                     <a href="{{route('user.login')}}" class="custom-btn2"> Back to Login </a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>

@endsection