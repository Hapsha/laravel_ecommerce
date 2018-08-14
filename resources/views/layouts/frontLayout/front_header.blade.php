<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
?>


<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('images/frontend_images/images/logo.png') }}" alt=""/></a>
            </div>
            <ul class="shopping_grid">
                  <a href="{{URL::to('/user-login')}}"><li>Join</li></a>
                  <?php 
                      $customer_id=Session::get('id');
                      $shipping_id=Session::get('id');
                ?>

                     <?php if($customer_id ==NULL && $shipping_id==NULL){?>
                            <li><a href="{{URL::to('/user-login')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <?php }if($customer_id !=NULL && $shipping_id==NULL){?>
                              <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                        <?php }if($customer_id !=NULL && $shipping_id!=NULL){?>
                               <li><a href="{{URL::to('/payment')}}">Checkout</a></li>
                        <?php }else{}?>
                           
                           <li><a href="{{URL::to('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                          
                            <?php if($customer_id != NULL){?>
                                <li><a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                          <?php  }else{?>
                            
                                <li><a href="{{URL::to('/user-login')}}"><i class="fa fa-lock"></i> Login</a></li>
                          <?php } ?>
                  
                  <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="h_menu4"><!-- start h_menu4 -->
        <div class="container">
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li class="active"><a href="{{ url('/') }}" data-hover="Home">Home</a></li>
                    <li><a href="{{url('/about')}}" data-hover="About Us">About Us</a></li>
                    <li><a href="" data-hover="Careers">Careers</a></li>
                    <li><a href="{{url('/contact')}}" data-hover="Contact Us">Contact Us</a></li>
                    <li><a href="{{url('/wishlist')}}" data-hover="Wish List">Wish List</a></li>
                 </ul>
                 <script type="text/javascript" src="js/nav.js"></script>
          </div><!-- end h_menu4 -->
     </div>
</div>