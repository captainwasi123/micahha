<header>
   <div class="header-top">
      <div class="container">
         <div class="header-actions">
            <div class="search-icon">
               <button class="search-toggle"> <i class="fa fa-search"> </i> </button> 
               <div class="search-form">
                  <input type="text" placeholder="Search" name="">
                  <button type="submit"> <i class="fa fa-search"> </i> </button>
               </div>
            </div>
            <div class="user-dropdown">
               <a title="Login" href="{{route('user.login')}}">
                  <i class="fa fa-user"> </i>
               </a>
            </div>
            <!-- <div class="user-dropdown">
               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user"> </i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </div>
            </div> -->
            <div class="cart-dropdown">
               <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-shopping-cart"> </i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="logo">
            <a href="{{URL::to('/')}}"> <img src="{{URL::to('/public/website')}}/images/logo.jpg"> </a>
         </div>
         <div class="navbar-handler">
            <img src="{{URL::to('/public/website')}}/images/hamburger.png">
         </div>
      </div>
   </div>
   <div class="header-menu">
      <div class="container">
         <div class="menu-item">
            <a href=""> Accomodation </a>
         </div>
         <div class="menu-item">
            <a href=""> Art </a>
         </div>
         <div class="menu-item">
            <a href=""> Collectibles </a>
         </div>
      </div>
   </div>
   <div class="header-bottom">
   </div>
</header>