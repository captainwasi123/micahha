<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{URL::to('/public/admin/')}}/assets/images/dp-placeholder.jpg" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5>{{Auth::guard('admin')->user()->first_name}} {{Auth::guard('admin')->user()->last_name}}</h5>
                <p class="text-muted">{{Auth::guard('admin')->user()->email}}</p>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.dashboard')}}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="nav-small-cap">ACCOMMODATION</li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.accommodation.statistics')}}" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Statistics</span>
                    </a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu"> Listing</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.accommodation.listing.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.accommodation.listing.published')}}">Published</a></li>
                        <li><a href="{{route('admin.accommodation.listing.rejected')}}">Rejected</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-clipboard-check"></i>
                        <span class="hide-menu"> Bookings</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.accommodation.booking.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.accommodation.booking.completed')}}">Completed</a></li>
                        <li><a href="{{route('admin.accommodation.booking.cancelled')}}">Cancelled</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu"> Members</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.accommodation.members.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.accommodation.members.approved')}}">Approved</a></li>
                        <li><a href="{{route('admin.accommodation.members.rejected')}}">Rejected</a></li>
                        <li><a href="{{route('admin.accommodation.members.blocked')}}">Blocked</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.accommodation.inquiries')}}" aria-expanded="false">
                        <i class="mdi mdi-comment-question-outline"></i>
                        <span class="hide-menu">Inquiries</span>
                    </a>
                </li>




            <!--     <li class="nav-devider"></li>
                <li class="nav-small-cap">ART</li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Statistics</span>
                    </a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-store"></i>
                        <span class="hide-menu"> Store</span>
                    </a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="hide-menu"> Orders</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pending </a></li>
                        <li><a href="#">Completed</a></li>
                        <li><a href="#">Cancelled</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu"> Members</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pending </a></li>
                        <li><a href="#">Approved</a></li>
                        <li><a href="#">Rejected</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-comment-question-outline"></i>
                        <span class="hide-menu">Inquiries</span>
                    </a>
                </li>





                <li class="nav-devider"></li>
                <li class="nav-small-cap">COLLECTABLES</li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Statistics</span>
                    </a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-store"></i>
                        <span class="hide-menu"> Store</span>
                    </a>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-cart-outline"></i>
                        <span class="hide-menu"> Orders</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pending </a></li>
                        <li><a href="#">Completed</a></li>
                        <li><a href="#">Cancelled</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu"> Members</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Pending </a></li>
                        <li><a href="#">Approved</a></li>
                        <li><a href="#">Rejected</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-comment-question-outline"></i>
                        <span class="hide-menu">Inquiries</span>
                    </a>
                </li> -->



                <li class="nav-small-cap">Settings</li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-home"></i>
                        <span class="hide-menu"> Accommodation</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.settings.accommodation.propertyType')}}">Property Type </a></li>
                        <li><a href="{{route('admin.settings.accommodation.amenities')}}">Amenities </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>