 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{route('landlord.dashboard')}}">
            <h2><font>M</font>ICAHHA</h2>
            <span>Landlord</span>
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="list_divider"></li>
        <li class="">
            <a class=""  href="{{route('landlord.dashboard')}}">
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
              <span>Listing</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('landlord.listing.add')}}">Add Listing</a>
                </li>
                <li>
                    <a href="{{route('landlord.listing.pending')}}">Pending </a>
                </li>
                <li>
                    <a href="{{route('landlord.listing.approved')}}">Approved </a>
                </li>
                <li>
                    <a href="{{route('landlord.listing.published')}}">Published</a>
                </li>
                <li>
                    <a href="{{route('landlord.listing.rejected')}}">Rejected</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
              <div class="icon_menu">
                  <img src="{{URL::to('/public/user/')}}/img/menu-icon/2.svg" alt="">
              </div>
              <span>Reservation</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('landlord.reservation.add')}}">Add Reservation</a>
                </li>
                <li>
                    <a href="{{route('landlord.reservation.all','pending')}}">Pending</a>
                    <a href="{{route('landlord.reservation.all','approve')}}">Approved</a>
                    <a href="{{route('landlord.reservation.all','rejected')}}">Rejected</a>
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


