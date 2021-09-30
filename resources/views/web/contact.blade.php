@extends('web.includes.master')
@section('title', 'Contact Us')
@section('content')


<section class="pad-top-60 pad-bot-60">
   <div class="container" >
      <div class="sec-head1">
         <h3>{{ __('content.Contact Us') }} </h3>
      </div>
      <div class="row">
         <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <div class="contact-form-head">
               <h3>{{ __('content.Get In Touch') }} </h3>
            </div>
            <div class="cont-form">
               <form>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper">{{ __('content.First Name') }} </p>
                           <input type="text" name="first-name" required="">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper">{{ __('content.Last Name') }} </p>
                           <input type="text" name="first-name" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper">{{ __('content.Email Address') }} </p>
                           <input type="email" name="Email Address" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper">{{ __('content.Enquiry Type') }} </p>
                           <select class="select-bg">
                              <option>Please Select</option>
                              <option>Please Select</option>
                              <option>Please Select</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper">{{ __('content.How May We Help') }} </p>
                           <textarea placeholder="{{ __('content.Type Here') }}"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <input type="submit" class="submit-btn1 rounded1" value="{{ __('content.Send') }}" name="">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <div class="contact-image">
               <img src="{{URL::to('/public/website')}}/images/contact-image.jpg">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Section Ends Here -->
<!-- FAQ Section Starts Here -->
<section class="pad-bot-60">
   <div class="container">
      <div class="sec-head1">
         <h3 class="alegraya">{{ __('content.Frequently Asked Question') }} </h3>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.Why should I use Micahha?') }} <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.A one stop shop for Home is what Micahha is all about! We offer services from finding a place to live, leasing a place you have available, finding the perfect item for your home sweet home, both physical or digital. All hosts are criminal background checked and all tenants are tenancy checked so you are always interacting with a genuine customer from the start.') }} 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.I want to be a host or tenant, what should I do?') }} <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.Please create an account and complete the criminal check as a host and tenancy check as a tenant. Once completed and passed, you will gain access to the accommodation dashboard which allows you to post to lease or contact the landlord. If you are an agent or posting on behalf of landlord, we will need to receive a consent form that you have the right to lease on behalf of the landlord.') }} 
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.I want to sell my artwork, what should I do?') }} <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.Please create an account and go through our background check to become an artist. Once completed, you will be able to access the artist dashboard and upload your artwork for sell. You may also apply to become a portrait customisation artist by submitting your artwork for assessment and receive customer requests.') }}
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.How long do I have to wait before my post become live?') }} <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.Once you have posted an advertisement it will go into pending status. It will go through the review progress and it will become live once approved. You will receive a notification once your advertisement become live.') }} 
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.What happened when my submission is rejected?') }} <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.Do not worry as it may mean the submission did not meet our Terms and Conditions. If you believe it was an error please re-submit and we will gladly review again.') }}
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a>{{ __('content.Can I request a refund?') }}  <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p>{{ __('content.Subject to the investigation of the refund request, a store credit may be provided to your account.') }}
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection