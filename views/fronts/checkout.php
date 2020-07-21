      <?php 
if (!isset($_SESSION['type']) && $_SESSION['type']!=3) {
    Redirect('index.php?f=login-register');
}
else{
  ?>                             
                                                           
<!-- End Header Style -->

<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container" >
            <div class="row" >
                <div class="col-md-12" >
                    <div class="search__inner">
                        <form action="#" method="get">
                            <input placeholder="Search here... " type="text">
                            <button type="submit"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->
    <!-- Start Offset MEnu -->
    <div class="offsetmenu">
        <div class="offsetmenu__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="off__contact">
                <div class="logo">
                    <a href="index.php?f=home">
                        <img src="images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <ul class="sidebar__thumd">
                <li><a href="#"><img src="images/sidebar-img/1.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/2.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/3.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/4.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/5.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/6.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/7.jpg" alt="sidebar images"></a></li>
                <li><a href="#"><img src="images/sidebar-img/8.jpg" alt="sidebar images"></a></li>
            </ul>
            <div class="offset__widget">
                <div class="offset__single">
                    <h4 class="offset__title">Language</h4>
                    <ul>
                        <li><a href="#"> Engish </a></li>
                        <li><a href="#"> French </a></li>
                        <li><a href="#"> German </a></li>
                    </ul>
                </div>
                <div class="offset__single">
                    <h4 class="offset__title">Currencies</h4>
                    <ul>
                        <li><a href="#"> USD : Dollar </a></li>
                        <li><a href="#"> EUR : Euro </a></li>
                        <li><a href="#"> POU : Pound </a></li>
                    </ul>
                </div>
            </div>
            <div class="offset__sosial__share">
                <h4 class="offset__title">Follow Us On Social</h4>
                <ul class="off__soaial__link">
                    <li><a class="bg--twitter" href="#"  title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                    
                    <li><a class="bg--instagram" href="#" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                    <li><a class="bg--facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                    <li><a class="bg--googleplus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                    <li><a class="bg--google" href="#" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Offset MEnu -->
    <!-- Start Cart Panel -->
    <div class="shopping__cart">
        <div class="shopping__cart__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="shp__cart__wrap">
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="images/product/sm-img/1.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.php">BO&Play Wireless Speaker</a></h2>
                        <span class="quantity">QTY: 1</span>
                        <span class="shp__price">$105.00</span>
                    </div>
                    <div class="remove__btn">
                        <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="images/product/sm-img/2.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.php">Brone Candle</a></h2>
                        <span class="quantity">QTY: 1</span>
                        <span class="shp__price">$25.00</span>
                    </div>
                    <div class="remove__btn">
                        <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Subtotal:</li>
                <li class="total__price">$130.00</li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="index.php?f=cart">View Cart</a></li>
                <li class="shp__checkout"><a href="index.php?f=checkout">Checkout</a></li>
            </ul>
        </div>
    </div>
    <!-- End Cart Panel -->
</div>
<!-- End Offset Wrapper -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/2.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Checkout</h2>
                        <nav class="bradcaump-inner">
                          <a class="breadcrumb-item" href="index.php?f=home">Home</a>
                          <span class="brd-separetor">/</span>
                          <span class="breadcrumb-item active">Checkout</span>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Checkout Area -->
<section class="our-checkout-area ptb--120 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="ckeckout-left-sidebar">
                    <!-- Start Checkbox Area -->
                    <div class="checkout-form">
                        <h2 class="section-title-3">Billing details</h2>
                        <div class="checkout-form-inner">
                            <form method="post"  action="index.php?f=order-confirm" >
                            <div class="single-checkout-box">
                                <input type="text" name='name' placeholder=" Name*">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="single-checkout-box">
                                <input type="text" name="phone" placeholder="Phone*">
                            </div>
                            <div class="single-checkout-box">
                                <textarea name="address" placeholder="Address*"></textarea>
                            </div>
                            <div class="single-checkout-box select-option mt--40">
                                <select name="cntid" >
                                    <option value="0"> Select Contry</option>
                                    <?php 
                                    $sql = $db->view("*","countries","","");
                                    while ($v = $sql->fetch_object()) {
                                      echo "<option value='{$v->id}'>{$v->name}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End Checkbox Area -->
                    <!-- Start Payment Box -->
                    <div class="payment-form">
                        <h2 class="section-title-3">payment details</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p>
                        <div class="payment-form-inner">
                            <div class="single-checkout-box">
                                <select name="pmid" >
                                    <option value="0"> Select Payment method</option>
                                    <?php 
                                    $sql = $db->view("*","payment_method","","");
                                    while ($v = $sql->fetch_object()) {
                                      echo "<option value='{$v->id}'>{$v->name}</option>";
                                    }
                                    ?>
                                </select>
                                <input type="text"  name='tid' placeholder="Transaction id*">
                            </div>
                        </div>
                    </div>
                    <!-- End Payment Box -->
                    <!-- Start Payment Way -->
                    <div class="our-payment-sestem">
                        <h2 class="section-title-3">We  Accept :</h2>
                        <ul class="payment-menu">
                            <li><a href="#"><img src="images/payment/1.jpg" alt="payment-img"></a></li>
                            <li><a href="#"><img src="images/payment/2.jpg" alt="payment-img"></a></li>
                            <li><a href="#"><img src="images/payment/3.jpg" alt="payment-img"></a></li>
                            <li><a href="#"><img src="images/payment/4.jpg" alt="payment-img"></a></li>
                            <li><a href="#"><img src="images/payment/5.jpg" alt="payment-img"></a></li>
                        </ul>
                        <div class="checkout-btn">
                            <input type="submit" class="btn btn-success" name="submit" value="CONFIRM & BUY NOW">
                        </div>    
                    </div>

                    <!-- End Payment Way -->
                </div>
            </div>
             </form>
            <div class="col-md-4 col-lg-4">
                <div class="checkout-right-sidebar">
                    <div class="our-important-note">
                        <h2 class="section-title-3">Note :</h2>
                        <p class="note-desc">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut laborekf et dolore magna aliqua.</p>
                        <ul class="important-note">
                            <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                            <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                            <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet, consectetur nipabali</a></li>
                            <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>Lorem ipsum dolor sit amet</a></li>
                        </ul>
                    </div>
                    <div class="puick-contact-area mt--60">
                        <h2 class="section-title-3">Quick Contract</h2>
                        <a href="phone:+8801722889963">+012 345 678 102 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
}
?>


