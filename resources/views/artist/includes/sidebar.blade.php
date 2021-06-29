 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{route('landlord.dashboard')}}">
            <h2><font>M</font>ICAHHA</h2>
            <span>Artist Dashboard</span>
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="list_divider mb-2"></li>
            <li class="" >
                <p class="balance_tray">Wallet Balance: <span>{{empty(Auth::user()->wallet) ? '0.0' : number_format(Auth::user()->wallet->balance, 2)}}</span>$</p>
                <a href="javascript:void(0)" class="withdraw_request_btn" title="Withdraw"><span class="fa fa-download"></span> Request Withdraw </a>
                <div id="withdraw_error">
                    
                </div>
            </li>
        <li class="list_divider mt-2"></li>
        <li class="">
            <a class=""  href="{{route('artist.dashboard')}}">
                <div class="icon_menu">
                    <i class="ti-dashboard"></i>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <img src="{{URL::to('/public/user/')}}/img/menu-icon/2.svg" alt="">
              </div>
              <span>Products</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('artist.product.add')}}">Add Product</a>
                </li>
                <li>
                    <a href="{{route('artist.product.pending')}}">Pending </a>
                </li>
                <li>
                    <a href="{{route('artist.product.published')}}">Published</a>
                </li>
                <li>
                    <a href="{{route('artist.product.rejected')}}">Rejected</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <i class="fa fa-shopping-cart"></i>
              </div>
              <span>Orders</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('artist.orders.new')}}">New Orders </a>
                </li>
                <li>
                    <a href="{{route('artist.orders.history')}}">History</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class=""  href="{{route('artist.withdraw.history')}}">
                <div class="icon_menu">
                    <i class="fa fa-history"></i>
                </div>
                <span>Withdraw History</span>
            </a>
        </li>
        <li class="list_divider"></li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <i class="ti-settings"></i>
              </div>
              <span>Settings</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('user.profile.edit')}}">Edit Profile</a>
                </li>
                <li>
                    <a href="{{route('user.change.password')}}">Change Password</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a class=""  href="{{route('user.logout')}}">
                <div class="icon_menu">
                    <i class="ti-key"></i>
                </div>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- sidebar part end -->


