<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-lg-5 col-sm-12 col-12">
            <div class="footer-form">
               <form>
                  <input type="email" placeholder="{{ __('content.Email') }}"  name="">
                  <input type="submit" value="{{ __('content.Subscribe') }}" name="">
               </form>
            </div>
         </div>
         <div class="col-md-7 col-lg-7 col-sm-12 col-12">
            <div class="footer-menu">
               <a href="{{route('web.terms_condition')}}" class="col-black">{{ __('content.Terms & Conditions') }}</a>
               <a href="{{route('web.privacy_policy')}}" class="col-black">{{ __('content.Privacy') }} </a>
               <a href="{{route('web.portrait')}}" class="col-black">{{ __('content.Portrait Customization') }} </a>
               <a href="{{route('web.contact')}}" class="col-black">{{ __('content.Contact Us') }} </a>
               <a href="javascript::void(0)" class="col-black" data-toggle="modal" data-target="#languages">
                  <span class="fa fa-globe"></span> {{ __('content.language') }} 
               </a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-lg-12 col-sm-12">
            <p class="col-black copyrights-text">{{ __('content.© All Rights Reserved. Micahha') }} </p>
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
                           <a href="{{URL::to('/lang/en')}}">
                              English
                              @if(session()->has('locate'))
                                 @if(session()->get('locate') == 'en')
                                    <span class="fa fa-check"></span>
                                 @endif
                              @else
                                 <span class="fa fa-check"></span>
                              @endif
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('/lang/cn')}}">
                              简体中文
                              @if(session()->has('locate'))
                                 @if(session()->get('locate') == 'cn')
                                    <span class="fa fa-check"></span>
                                 @endif
                              @endif
                           </a>
                        </li>
                        <li>
                           <a href="{{URL::to('/lang/tcn')}}">
                              繁体中文
                              @if(session()->has('locate'))
                                 @if(session()->get('locate') == 'tcn')
                                    <span class="fa fa-check"></span>
                                 @endif
                              @endif
                           </a>
                        </li>
                        <!-- <li><a href="">Española</a></li>
                        <li><a href="">日本</a></li>
                        <li><a href="">français</a></li> -->
                     </ul>
                 </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>