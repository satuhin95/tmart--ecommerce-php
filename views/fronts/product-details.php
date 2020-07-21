<?php
// $pdtid = $_SESSION['pdtid'];
// $qtyid = $_SESSION['qtyid'];
// $colorid = $_SESSION['colorid'];
// $sizeid = $_SESSION['sizeid'];


// echo "<pre>";
// print_r($pdtid);
// print_r($qtyid);
// print_r($colorid);
// print_r($sizeid);
// echo "</pre>";

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
            <h2 class="bradcaump-title">Product Details</h2>
            <nav class="bradcaump-inner">
              <a class="breadcrumb-item" href="index.php?f=home">Home</a>
              <span class="brd-separetor">/</span>
              <span class="breadcrumb-item active">Product Details</span>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Product Details -->
<?php
$sql = "
select product_stock.id, products.title,products.price,products.vat,products.discount ,products.id, colors.name as cname, sizes.name as sname
from products, product_stock left join colors on product_stock.color_id = colors.id left join sizes on product_stock.size_id = sizes.id
where product_stock.product_id = products.id and product_stock.product_id = '".$_GET['pdtid']."'";

$result = $db->rawQuery($sql);
if ($v =$result->fetch_object()) {
  ?>

  <section class="htc__product__details pt--120 pb--100 bg__white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <div class="product__details__container">
            <!-- Start Small images -->
            <ul class="product__small__images" role="tablist">
              <li role="presentation" class="pot-small-img active">
                <a href="#img-tab-1" role="tab" data-toggle="tab">
                  <img src="images/product-details/small-img/1.jpg" alt="small-image">
                </a>
              </li>
              <li role="presentation" class="pot-small-img">
                <a href="#img-tab-2" role="tab" data-toggle="tab">
                  <img src="images/product-details/small-img/2.jpg" alt="small-image">
                </a>
              </li>
              <li role="presentation" class="pot-small-img hidden-xs">
                <a href="#img-tab-3" role="tab" data-toggle="tab">
                  <img src="images/product-details/small-img/3.jpg" alt="small-image">
                </a>
              </li>
              <li role="presentation" class="pot-small-img hidden-xs hidden-sm">
                <a href="#img-tab-4" role="tab" data-toggle="tab">
                  <img src="images/product-details/small-img/2.jpg" alt="small-image">
                </a>
              </li>
            </ul>
            <!-- End Small images -->
            <div class="product__big__images">
              <div class="portfolio-full-image tab-content">
                <div role="tabpanel" class="tab-pane fade in active product-video-position" id="img-tab-1">
                  <img src="images/picture/<?php echo $v->id ?>.jpg" alt="full-image">
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
          <div class="htc__product__details__inner">
            <div class="pro__detl__title">
              <h2><?php echo $v->title; ?></h2>
            </div>
            <div class="pro__dtl__rating">
              <ul class="pro__rating">
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
              </ul>
              <span class="rat__qun">(Based on 0 Ratings)</span>
            </div>
            <div class="pro__details">
              <p>
                <?php
                $file = fopen("admin/pdt_text/{$v->id}.txt", "r") or die("file not open");
                echo fread($file,filesize("admin/pdt_text/{$v->id}.txt"));
                fclose($file);

                ?>
              </p>
            </div>
            <ul class="pro__dtl__prize">
              <lable> Price = </lable>
              <li>$<?php echo $v->price; ?></li>
            </ul>
            <ul class="pro__dtl__prize">
              <lable> Discount = </lable>
              <li><?php echo $v->discount; ?>%</li>
            </ul>

            <ul class="pro__dtl__prize">
              <lable> Vat = </lable>
              <li><?php echo $v->vat; ?>%</li>
            </ul>
            <ul class="pro__dtl__prize">
              <lable> Total Price = </lable>
              <li>$<?php echo priceCal($v->price ,$v->vat, $v->discount ); ?></li>
            </ul>
            <?php
            $colorList = array();
            $sql = " select colors.id, colors.name from colors ,product_stock
            where product_stock.product_id = '".$_GET['pdtid']."' and
            product_stock.color_id = colors.id ";
            $result = $db->rawQuery($sql);
            while ($d =$result->fetch_object()) {
              $colorList[]=$d->id . "###" . $d->name;
            }
            if($colorList){
              $colorList = array_unique($colorList);
              ?>
              <div class="pro__dtl__color">
                <h2 class="title__5">Choose Colour</h2>
                <select name="colorid">
                  <option value="0">Choose Color</option>
                  <?php
                  foreach ($colorList as $col) {
                    $col = explode("###", $col);
                    echo "<option value='{$col[0]}'>{$col[1]}</option>";
                  }
                  ?>
                </select>
              </div>
              <?php
            }
            ?>

            <?php
            $sizeList = array();
            $sql = " select sizes.id,sizes.name from sizes ,product_stock
            where product_stock.product_id = '".$_GET['pdtid']."' and
            product_stock.size_id = sizes.id ";
            $result = $db->rawQuery($sql);
            while ($d =$result->fetch_object()) {
              $sizeList[]=$d->id . "###" . $d->name;
            }
            if($sizeList){
              $sizeList = array_unique($sizeList);
              ?>
              <div class="pro__dtl__color">
                <h2 class="title__5">Choose Size</h2>
                <select name="sizeid">
                  <option value="0">Choose Color</option>
                  <?php
                  foreach ($sizeList as $col) {
                    $col = explode("###", $col);
                    echo "<option value='{$col[0]}'>{$col[1]}</option>";
                  }
                  ?>
                </select>
              </div>
              <?php
            }
            ?>

                 <div class="product-action-wrap">
              <div class="prodict-statas"><span>Quantity :</span></div>
              <div class="product-quantity">
                <form id='myform' method='POST' action='#'>
                  <div class="product-quantity">
                    <div class="cart-plus-minus">
                      <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                      <input type="hidden" name="pdtid" value="<?php echo $_GET['pdtid'] ?>">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <ul class="pro__dtl__btn">
              <li class="buy__now__btn"><a href="index.php?f=cart" id="buy_now">buy now</a></li>
              <li><a href="#"><span class="ti-heart"></span></a></li>
              <li><a href="#"><span class="ti-email"></span></a></li>
            </ul>
            <div class="pro__social__share">
              <h2>Share :</h2>
              <ul class="pro__soaial__link">
                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>
<!-- End Product Details -->
<!-- Start Product tab -->
<section class="htc__product__details__tab bg__white pb--120">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <ul class="product__deatils__tab mb--60" role="tablist">
          <li role="presentation" class="active">
            <a href="#description" role="tab" data-toggle="tab">Description</a>
          </li>
          <li role="presentation">
            <a href="#sheet" role="tab" data-toggle="tab">Data sheet</a>
          </li>
          <li role="presentation">
            <a href="#reviews" role="tab" data-toggle="tab">Reviews</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="product__details__tab__content">
          <!-- Start Single Content -->
          <div role="tabpanel" id="description" class="product__tab__content fade in active">
            <div class="product__description__wrap">
              <div class="product__desc">
                <h2 class="title__6">Details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
              </div>
              <div class="pro__feature">
                <h2 class="title__6">Features</h2>
                <ul class="feature__list">
                  <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                  <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                  <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                  <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Single Content -->
          <!-- Start Single Content -->
          <div role="tabpanel" id="sheet" class="product__tab__content fade">
            <div class="pro__feature">
              <h2 class="title__6">Data sheet</h2>
              <ul class="feature__list">
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
                <li><a href="#"><i class="zmdi zmdi-play-circle"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
              </ul>
            </div>
          </div>
          <!-- End Single Content -->
          <!-- Start Single Content -->
          <div role="tabpanel" id="reviews" class="product__tab__content fade">
            <div class="review__address__inner">
              <!-- Start Single Review -->
              <div class="pro__review">
                <div class="review__thumb">
                  <img src="images/review/1.jpg" alt="review images">
                </div>
                <div class="review__details">
                  <div class="review__info">
                    <h4><a href="#">Gerald Barnes</a></h4>
                    <ul class="rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star-half"></i></li>
                      <li><i class="zmdi zmdi-star-half"></i></li>
                    </ul>
                    <div class="rating__send">
                      <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                      <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                  </div>
                  <div class="review__date">
                    <span>27 Jun, 2016 at 2:30pm</span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                </div>
              </div>
              <!-- End Single Review -->
              <!-- Start Single Review -->
              <div class="pro__review ans">
                <div class="review__thumb">
                  <img src="images/review/2.jpg" alt="review images">
                </div>
                <div class="review__details">
                  <div class="review__info">
                    <h4><a href="#">Gerald Barnes</a></h4>
                    <ul class="rating">
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star"></i></li>
                      <li><i class="zmdi zmdi-star-half"></i></li>
                      <li><i class="zmdi zmdi-star-half"></i></li>
                    </ul>
                    <div class="rating__send">
                      <a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
                      <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                  </div>
                  <div class="review__date">
                    <span>27 Jun, 2016 at 2:30pm</span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                </div>
              </div>
              <!-- End Single Review -->
            </div>
            <!-- Start RAting Area -->
            <div class="rating__wrap">
              <h2 class="rating-title">Write  A review</h2>
              <h4 class="rating-title-2">Your Rating</h4>
              <div class="rating__list">
                <!-- Start Single List -->
                <ul class="rating">
                  <li><i class="zmdi zmdi-star-half"></i></li>
                </ul>
                <!-- End Single List -->
                <!-- Start Single List -->
                <ul class="rating">
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                </ul>
                <!-- End Single List -->
                <!-- Start Single List -->
                <ul class="rating">
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                </ul>
                <!-- End Single List -->
                <!-- Start Single List -->
                <ul class="rating">
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                </ul>
                <!-- End Single List -->
                <!-- Start Single List -->
                <ul class="rating">
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                  <li><i class="zmdi zmdi-star-half"></i></li>
                </ul>
                <!-- End Single List -->
              </div>
            </div>
            <!-- End RAting Area -->
            <div class="review__box">
              <form id="review-form">
                <div class="single-review-form">
                  <div class="review-box name">
                    <input type="text" placeholder="Type your name">
                    <input type="email" placeholder="Type your email">
                  </div>
                </div>
                <div class="single-review-form">
                  <div class="review-box message">
                    <textarea placeholder="Write your review"></textarea>
                  </div>
                </div>
                <div class="review-btn">
                  <a class="fv-btn" href="#">submit review</a>
                </div>
              </form>
            </div>
          </div>
          <!-- End Single Content -->
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function(){
    $("#buy_now").click(function(e){
      $.ajax({
        type: 'POST',
        data: {
          ids: $("input[name='pdtid']").val(),
          qty: $("input[name='qtybutton']").val(),
          color: $("select[name='colorid']").val(),
          size: $("select[name='sizeid']").val()
        },
        // url:  "http://localhost/saif/PROJECT/tmart/library/add-to-cart.php",
        url: $("meta[name='url']").attr('content') + '/library/add-to-cart.php',
        success: function(data){
          alert(data);
        }
      });
      e.preventDefault();
    });
  });
</script>
<!-- End Product tab -->
<!-- Start Footer Area -->
