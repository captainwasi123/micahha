@extends('web.includes.master')
@section('title', 'Contact Us')
@section('content')


<section class="pad-top-60 pad-bot-60">
   <div class="container" >
      <div class="sec-head1">
         <h3> Contact Us </h3>
      </div>
      <div class="row">
         <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <div class="contact-form-head">
               <h3> Get In Touch </h3>
            </div>
            <div class="cont-form">
               <form>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper"> First Name </p>
                           <input type="text" name="first-name" required="">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper"> Last Name </p>
                           <input type="text" name="first-name" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper"> Email Address </p>
                           <input type="email" name="Email Address" required="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <p class="col-black upper"> Enquiry Type </p>
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
                           <p class="col-black upper"> How May We Help </p>
                           <textarea placeholder="Type Here"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="form-field1">
                           <input type="submit" class="submit-btn1 rounded1" value="Send" name="">
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
         <h3 class="alegraya"> Frequently Asked Question </h3>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> I want to be host what should I do? <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> What heppend when my sumbission rejected? <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> I want to sell my artwork, what should I do? <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> Can I request a refund? <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> How Long do I Have to wait before it comes Live? <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-6 col-12">
            <div class="set">
               <a> Abc  <i class="fa fa-caret-right"></i> </a>
               <div class="content">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection