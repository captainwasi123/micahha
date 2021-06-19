 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{route('landlord.dashboard')}}">
            <h2><font>M</font>ICAHHA</h2>
            <span>User</span>
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="list_divider"></li>
        <li class="">
            <a class=""  href="{{route('user.dashboard')}}">
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
              <span>My Orders</span>
            </a>
            <ul>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                      <span>Accommodation</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('user.orders.accommodation.pending')}}">Pending</a>
                        </li>
                        <li>
                            <a href="{{route('user.orders.accommodation.active')}}">Active</a>
                        </li>
                        <li>
                            <a href="{{route('user.orders.accommodation.history')}}">History</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                      <span>Art</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">Active</a>
                        </li>
                        <li>
                            <a href="">History</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                      <span>Portrait</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">Active</a>
                        </li>
                        <li>
                            <a href="">History</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow" href="#" aria-expanded="false">
                      <span>Collectibles</span>
                    </a>
                    <ul>
                        <li>
                            <a href="">Active</a>
                        </li>
                        <li>
                            <a href="">History</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <i class="ti-heart"></i>
              </div>
              <span>My Wishlist</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('user.wishlist.accommodation')}}">Accommodation</a>
                </li>
                <li>
                    <a href="">Art</a>
                </li>
                <li>
                    <a href="{{route('user.wishlist.collectibles')}}">Collectibles</a>
                </li>
            </ul>
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


