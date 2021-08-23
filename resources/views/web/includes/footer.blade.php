<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-lg-5 col-sm-12 col-12">
            <div class="footer-form">
               <form>
                  <input type="email" placeholder="Email"  name="">
                  <input type="submit" value="Subscribe" name="">
               </form>
            </div>
         </div>
         <div class="col-md-7 col-lg-7 col-sm-12 col-12">
            <div class="footer-menu">
               <a href="{{route('web.terms_condition')}}" class="col-black"> Terms & Conditions </a>
               <a href="{{route('web.privacy_policy')}}" class="col-black"> Privacy </a>
               <a href="{{route('web.portrait')}}" class="col-black"> Portrait Customization </a>
               <a href="{{route('web.contact')}}" class="col-black"> Contact Us </a>
               <a href="javascript::void(0)" class="col-black" data-toggle="modal" data-target="#languages">
                  <span class="fa fa-globe"></span> English 
               </a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-lg-12 col-sm-12">
            <p class="col-black copyrights-text"> © All Rights Reserved. Micahha  </p>
         </div>
      </div>
   </div>
</footer>

<div class="modal fade" id="languages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Choose a language</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                     <ul class="languages_list">
                        <li>
                           <a href="">
                              English
                              <span class="fa fa-check"></span>
                           </a>
                        </li>
                        <li><a href="">Chinese</a></li>
                        <li><a href="">Spanish</a></li>
                        <li><a href="">Japanese</a></li>
                        <li><a href="">French</a></li>
                     </ul>
                 </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>