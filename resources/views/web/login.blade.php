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
                 <h3>{{ __('content.Login') }} </h3>

                  @if(session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
                  @endif
                  @if(session()->has('error'))
                      <div class="alert alert-danger">
                          {{ session()->get('error') }}
                      </div>
                  @endif
                 <form method="post">
                     @csrf
                    <div class="form-field1">
                       <p>{{ __('content.Email Address') }} </p>
                       <input type="email" name="email" required="">
                    </div>
                    <div class="form-field1">
                       <p>{{ __('content.Password') }} </p>
                       <input type="password" name="password" required="">
                       <a href="{{URL::to('/forget-password')}}" class="reset-password">{{ __('content.Reset Password') }} </a>
                    </div>
                    <div class="form-field1 no-margin">
                       <input type="submit" class="submit-btn1" value="{{ __('content.Login') }}" name="" style="margin-top: -25px !important;">	
                    </div>
                 </form>
              </div>
              <div class="login-form">
                 <h3>{{ __('content.Create An Account') }} </h3>
                 <p class="para-1">{{ __('content.Receive exclusive access to sale previews.') }} </p>
                 <p class="para-1">{{ __('content.Enjoy special offers throughout the year.') }}  </p>
                 <p class="para-1">{{ __('content.Easy order management and quick checkout.') }} </p>
                 <a href="{{route('user.register')}}" class="custom-btn1 m-t-20">{{ __('content.Create an account') }} </a>
              </div>
           </div>
        </div>
     </div>
  </section>

@endsection