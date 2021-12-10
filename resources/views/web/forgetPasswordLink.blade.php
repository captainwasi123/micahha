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
                 <h3>Recover Password </h3>
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

                 <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">

                   
                    <div class="form-field1">
                        <p>{{ __('content.New password *') }} </p>
                         <input type="password"  id="password"   name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                       <div class="form-field1">
                     <p>{{ __('content.Confirm New Password *') }} </p>
                         <input type="password" id="confirmation_password"   name="confirmation_password"   required>
                           @if ($errors->has('confirmation_password'))
                              <span class="text-danger">{{ $errors->first('confirmation_password') }}</span>
                           @endif
                    </div>
                    <div class="form-field1 no-margin">
                       <input type="submit" class="submit-btn1" value="Resert Password" name="" style="margin-top: -25px !important;">	
                    </div>
                 </form>
              </div>
              <div class="login-form">
                 <h3>{{ __('content.Create An Account') }} </h3>
                 <p class="para-1">{{ __('content.Receive exclusive access to sale previews.') }} </p>
                 <p class="para-1">{{ __('content.Enjoy special offers throughout the year.') }}  </p>
                 <p class="para-1">{{ __('content.Easy order management and quick checkout.') }} </p>
                  <a href="{{route('user.login')}}" class="custom-btn2">{{ __('content.Back to Login') }} </a>
              </div>
           </div>
        </div>
     </div>
  </section>

@endsection