<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="{{URL::to('/public/user/')}}/img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="profile_info">
                            <img  src="{{URL::to('/public/storage/users/'.Auth::user()->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Artist Dashboard</p>
                                    <h5>{{substr(Auth::user()->first_name, 0, 1).'.'}} {{Auth::user()->last_name}}</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="{{route('landlord.profile.edit')}}">My Profile </a>
                                    <a href="{{route('landlord.change.password')}}">Change Password</a>
                                    <a href="{{route('user.logout')}}">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>