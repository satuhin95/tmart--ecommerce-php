    <nav class="mainmenu__nav hidden-xs hidden-sm">
        <ul class="main__menu">
            <li class="drop"><a href="index.php?f=home">Home</a></li>
            <li class="drop"><a href="index.php?f=portfolio-card-box-2">portfolio</a>
                <ul class="dropdown">
                    <li><a href="index.php?f=portfolio-card-box-2">portfolio</a></li>
                    <li><a href="index.php?f=single-portfolio">Single portfolio</a></li>
                </ul>
            </li>
            <li class="drop"><a href="index.php?f=blog">Blog</a>
                <ul class="dropdown">
                    <li><a href="index.php?f=blog">blog 3 column</a></li>
                    <li><a href="index.php?f=blog-details">Blog details</a></li>
                </ul>
            </li>
            <li class="drop"><a href="index.php?f=shop">Shop</a>
                <ul class="dropdown mega_dropdown">
                    <!-- Start Single Mega MEnu -->
                    <li><a class="mega__title" href="index.php?f=shop">shop layout</a>
                        <ul class="mega__item">
                            <li><a href="index.php?f=shop">default shop</a></li>
                        </ul>
                    </li>
                    <!-- End Single Mega MEnu -->
                    <!-- Start Single Mega MEnu -->
                    <li><a class="mega__title" href="index.php?f=shop">product details layout</a>
                        <ul class="mega__item">
                            <li><a href="index.php?f=product-details">tab style 1</a></li>
                        </li>
                    </ul>
                </li>
                <!-- End Single Mega MEnu -->
                <!-- Start Single Mega MEnu -->
                <li>
                    <ul class="mega__item">
                        <li>
                            <div class="mega-item-img">
                                <a href="index.php?f=shop">
                                    <img src="images/feature-img/3.png" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- End Single Mega MEnu -->
            </ul>
        </li>
        <li class="drop"><a href="#">pages</a>
            <ul class="dropdown">
                <li><a href="index.php?f=about">about</a></li>
                <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                    <ul class="lavel-dropdown">
                        <li><a href="index.php?f=customer-review
                           ">customer review</a></li>
                       </ul>
                   </li>
                   <li><a href="index.php?f=shop">shop</a></li>
                   <li><a href="index.php?f=shop-sidebar">shop sidebar</a></li>
                   <li><a href="index.php?f=product-details">product details</a></li>
                   <li><a href="index.php?f=cart">cart</a></li>
                   <li><a href="index.php?f=wishlist">wishlist</a></li>
                   <li><a href="index.php?f=checkout">checkout</a></li>
                   <li><a href="index.php?f=team">team</a></li>
                    <?php 
            if (!isset($_SESSION['type'])) {
           ?>
                   <li><a href="index.php?f=login-register">login & register</a></li>
                   <?php 
                 }
                 ?>

               </ul>
           </li>
           <li><a href="index.php?f=contact">contact</a></li>
           <?php 
            if (isset($_SESSION['type']) && $_SESSION['type']==3) {
           ?>
           <li><a href="index.php?f=purchase-history">History</a></li>
           <li><a href="index.php?f=logout">Logout</a></li>
           <?php
       }
       ?>
       </ul>
   </nav>
   <div class="mobile-menu clearfix visible-xs visible-sm">
    <nav id="mobile_dropdown">
        <ul>
            <li><a href="index.php?f=home">Home</a></li>
            <li><a href="#">portfolio</a>
                <ul>
                    <li><a href="index.php?f=portfolio-card-box-2">portfolio</a></li>
                    <li><a href="index.php?f=single-portfolio">Single portfolio</a></li>
                </ul>
            </li>
            <li><a href="index.php?f=blog">blog</a>
                <ul>
                    <li><a href="index.php?f=blog">blog 3 column</a></li>
                    <li><a href="index.php?f=blog-details">Blog details</a></li>
                </ul>
            </li>
            <li><a href="#">pages</a>
                <ul>
                    <li><a href="index.php?f=about">about</a></li>
                    <li><a href="index.php?f=customer-review">customer review</a></li>
                    <li><a href="index.php?f=shop">shop</a></li>
                    <li><a href="index.php?f=shop-sidebar">shop sidebar</a></li>
                    <li><a href="index.php?f=product-details">product details</a></li>
                    <li><a href="index.php?f=cart">cart</a></li>
                    <li><a href="index.php?f=wishlist">wishlist</a></li>
                    <li><a href="index.php?f=checkout">checkout</a></li>
                    <li><a href="index.php?f=team">team</a></li>
                     <?php 
            if (!isset($_SESSION['type'])) {
           ?>
                    <li><a href="index.php?f=login-register">login & register</a></li>
                    <?php 
                  }
                  ?>
                  
                </ul>
            </li>
            <li><a href="index.php?f=contact">contact</a></li>
                  <?php 
            if (isset($_SESSION['type']) && $_SESSION['type']==3) {
           ?>
           <li><a href="index.php?f=purchase-history">History</a></li>
              <li><a href="index.php?f=logout">Logout</a></li>
           <?php
       }
       ?>
        </ul>
    </nav>