@extends('web.includes.master')
@section('title', 'Register')
@section('content')

<section class="pad-top-60 pad-bot-60">
   <div class="container" style="max-width: 900px;">
      <div class="sec-head1">
         <h3> Create An Account </h3>
      </div>
      <div class="create-account-form">
         <form>
            <div class="row">
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> First Name * </p>
                     <input type="text" name="first-name" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Last Name </p>
                     <input type="text" name="last-name" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Email Address </p>
                     <input type="email" name="email-address" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Country </p>
                     <select name="Country" required="">
                        <option value="">Select</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> New password </p>
                     <input type="password" name="new-password" required="">
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Confirm New Password </p>
                     <input type="password" name="confirm-new-password" required="">
                  </div>
               </div>
               
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> User Type </p>
                     <h6 class="radiobuttons">
                        <input type="radio" name="user_type" id="typebutton1" checked> <label for="typebutton1">Buyer</label>
                        <input type="radio" name="user_type" id="typebutton2"> <label for="typebutton2">Landlord</label>
                        <input type="radio" name="user_type" id="typebutton3"> <label for="typebutton3">Artist</label>
                        <input type="radio" name="user_type" id="typebutton4"> <label for="typebutton4">Seller</label>
                     </h6>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                  <div class="form-field1">
                     <p> Newsletter Subscription </p>
                     <h6 class="checkbox1"> <input type="checkbox" name=""> I agree to receive the Micahha newsletter.  </h6>
                  </div>
               </div>
               <div class="col-md-6 col-lg-6 col-12 col-sm-12 m-t-20">
                  <div class="form-field1">
                     <a href="" class="custom-btn1"> Create an account </a>
                     <a href="" class="custom-btn2"> Back to Login </a>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>

@endsection