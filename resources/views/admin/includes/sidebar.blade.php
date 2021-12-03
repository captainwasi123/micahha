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

                <li class="nav-small-cap">General</li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.general.users')}}" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">All Users</span>
                    </a>
                </li>

                <li class="nav-small-cap">ACCOMMODATION</li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu"> Listing</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.accommodation.listing.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.accommodation.listing.due')}}">Payment Due</a></li>
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
                        <li><a href="{{route('admin.accommodation.booking.approved')}}">Approved</a></li>
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


                <li class="nav-small-cap">Art & Portrait Cust.</li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu"> Products</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.product.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.art.product.published')}}">Published</a></li>
                        <li><a href="{{route('admin.art.product.rejected')}}">Rejected</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu"> Portfolio</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.portfolio.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.art.portfolio.published')}}">Published</a></li>
                        <li><a href="{{route('admin.art.portfolio.rejected')}}">Rejected</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu"> Members</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.members.pending')}}">Pending </a></li>
                        <li><a href="{{route('admin.art.members.approved')}}">Approved</a></li>
                        <li><a href="{{route('admin.art.members.rejected')}}">Rejected</a></li>
                        <li><a href="{{route('admin.art.members.blocked')}}">Blocked</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-dollar"></i>
                        <span class="hide-menu">Withdraw</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.withdraw.new')}}">New Requests </a></li>
                        <li><a href="{{route('admin.art.withdraw.paid')}}">Paid Requests</a></li>
                        <li><a href="{{route('admin.art.withdraw.hold')}}">Hold Requests</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hide-menu">Art Orders</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.orders.new')}}">New Orders </a></li>
                        <li><a href="{{route('admin.art.orders.processing')}}">Processing</a></li>
                        <li><a href="{{route('admin.art.orders.delivered')}}">Delivered</a></li>
                    </ul>
                </li>

                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hide-menu">Portrait Orders</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.art.portrait.orders.new')}}">New Orders </a></li>
                        <li><a href="{{route('admin.art.portrait.orders.processing')}}">Processing</a></li>
                        <li><a href="{{route('admin.art.portrait.orders.delivered')}}">Delivered</a></li>
                    </ul>
                </li>


                <li class="nav-small-cap">Collectibles</li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span class="hide-menu"> Products</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.collectibles.products.add')}}">Add New </a></li>
                        <li><a href="{{route('admin.collectibles.products.published')}}">Published </a></li>
                        <li><a href="{{route('admin.collectibles.products.drafted')}}">Drafted</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu"> Suppliers</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.collectibles.suppliers.add')}}">Add New </a></li>
                        <li><a href="{{route('admin.collectibles.suppliers')}}">Suppliers list </a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hide-menu"> Sales</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.collectibles.sales.new')}}">New Orders <span class="badge badge-pill badge-primary" id="newOrders_badge">0</span></a></li>
                        <li><a href="{{route('admin.collectibles.sales.processing')}}">Processing </a></li>
                        <li><a href="{{route('admin.collectibles.sales.delivered')}}">Delivered</a></li>
                    </ul>
                </li>



                <li class="nav-small-cap">Settings</li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.settings.salesSetting')}}" aria-expanded="false">
                        <i class="fa fa-gears"></i>
                        <span class="hide-menu">Sales Settings</span>
                    </a>
                </li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{route('admin.settings.shippingCountries')}}" aria-expanded="false">
                        <i class="fa fa-plane"></i>
                        <span class="hide-menu">Shipping Countries</span>
                    </a>
                </li>
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
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="hide-menu"> Collectibles</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{route('admin.settings.collectibles.categories')}}">
                                Categories 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.settings.collectibles.subCategories')}}">
                                Sub Categories 
                            </a>
                        </li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="fa fa-paint-brush"></i>
                        <span class="hide-menu"> Art & Portrait Cust.</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{route('admin.settings.art.categories')}}">
                                Art Categories 
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.settings.art.portraitType')}}">
                                Portrait Type 
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>