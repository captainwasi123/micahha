@extends('web.includes.master')
@section('title', 'Login')
@section('content')

<section class="pad-top-60 pad-bot-60">
     <div class="container">
        <div class="row">
           <div class="col-md-6 col-lg-6 col-12 col-sm-12">
              <div class="image-type1">
                 <img src="{{URL::to('/public/website')}}/images/dressing-table.jpg">
              </div>
           </div>
           <div class="col-md-6 col-lg-6 col-12 col-sm-12">
              <div class="login-form">
                 <h3> Login </h3>
                 <form>
                    <div class="form-field1">
                       <p> Email Address </p>
                       <input type="email" name="email-field" required="">
                    </div>
                    <div class="form-field1">
                       <p> Password </p>
                       <input type="password" name="password-field" required="">
                       <a href="" class="reset-password">  Reset Password </a>
                    </div>
                    <div class="form-field1 no-margin">
                       <input type="submit" class="submit-btn1" value="Login" name="" style="margin-top: -25px !important;">	
                    </div>
                 </form>
              </div>
              <div class="login-form">
                 <h3> Create An Account </h3>
                 <p class="para-1"> Receive exclusive access to sale previews. </p>
                 <p class="para-1"> Enjoy special offers throughout the year. </p>
                 <p class="para-1"> Easy order management and quick checkout. </p>
                 <a href="{{route('user.register')}}" class="custom-btn1 m-t-20"> Create an account </a>
              </div>
           </div>
        </div>
     </div>
  </section>

@endsection