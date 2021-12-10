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
                 <h3>Forget Password</h3>
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
                 <form action="{{ route('forget.password.post') }}" method="POST">
                     @csrf
                    <div class="form-field1">
                       <p>{{ __('content.Email Address') }} </p>
                          <input type="email" id="email_address"   name="email" required>
                           @if ($errors->has('email'))
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                           @endif

                    </div>
                
                    <div class="form-field1 no-margin">
                       <input type="submit" class="submit-btn1" value="Send Password Reset Link" name="" style="margin-top: -25px !important;">	
                        
                    </div>
                 </form>
              </div>
              <div class="login-form">
                 {{--  <h3>{{ __('content.Create An Account') }} </h3>
                 <p class="para-1">{{ __('content.Receive exclusive access to sale previews.') }} </p>
                 <p class="para-1">{{ __('content.Enjoy special offers throughout the year.') }}  </p>
                 <p class="para-1">{{ __('content.Easy order management and quick checkout.') }} </p>  --}}
                <a href="{{route('user.login')}}" class="custom-btn2">{{ __('content.Back to Login') }} </a>


              </div>
           </div>
        </div>
     </div>
  </section>

@endsection