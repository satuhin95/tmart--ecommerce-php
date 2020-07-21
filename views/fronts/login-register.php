<?php 
if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['login']) && $_POST['login'] == 'Login') {
    $msg = "";
    if (empty($_POST['email'])) {
        $msg .="Email is empty<br>";    
    }
    if (strlen(trim($_POST['password']) < 0)) {
        $msg .="password is empty<br>";
    }
    if ($msg) {
        echo $msg;
    }
    else{
        $arr=array(
            'email'=>$_POST['email'],
            'password'=>md5($_POST['password'])

        );
        $result = $db->view("*","customers","",$arr);
        if ($result->num_rows > 0) {
            while ($d = $result->fetch_object()) {
                $_SESSION['id'] = $d->id;
                $_SESSION['name'] = $d->name;
                $_SESSION['type'] = $d->type;
                Redirect('index.php?f=home');
            }
            
        }
        else{
            echo "Invalid email or password";
        }
        
    }
    
}

else if ($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['signup']) && $_POST['signup'] == 'Signup') {
    $msg="";
    if ($_POST['name']=="") {
        $msg .=" Name Required<br>";
    }
    if ($_POST['email']=="") {
        $msg .=" Email Required<br>";
    }
    if ($_POST['contact']=="") {
        $msg .=" Contact Required<br>";
    }
    if ($_POST['cntid']=="") {
        $msg .=" Country Required<br>";
    }if ($_POST['citid']=="") {
        $msg .=" City Required<br>";
    }
    if ($_POST['address']=="") {
        $msg .=" Address Required<br>";
    }
    if ($_POST['age']=="") {
        $msg .=" Age Required<br>";
    }
    if ($_POST['password']=="") {
        $msg .=" Password Required<br>";
    }
    if ($msg) {
        echo $msg;
    }
    else{
        $ext = checkExt('picture');
        $arr = array(
            "name"=>$_POST["name"],
            "email"=>$_POST["email"],
            "contact"=>$_POST["contact"],
            "country_id"=>$_POST["cntid"],
            "city_id"=>$_POST["citid"],
            "address"=>$_POST["address"],
            "age"=>$_POST["age"],
            "password"=>md5($_POST["password"]),
            "type"=>3,
            "picture"=>$ext
        );
        if($db->Insert('customers',$arr)){
            $id = $db->id;
            if ($ext) {

             move_uploaded_file($_FILES['picture']['tmp_name'], "images/customer/{$id}.{$ext}");
         }

         
     }
     
     
 }
 
}
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
<!-- Start Login Register Area -->
<div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url(images/bg/5.jpg) no-repeat scroll center center / cover ;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <ul class="login__register__menu" role="tablist">
                    <li role="presentation" class="login active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                    <li role="presentation" class="register"><a href="#register" role="tab" data-toggle="tab">Register</a></li>
                </ul>
            </div>
        </div>
        <!-- Start Login Register Content -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="htc__login__register__wrap">
                    <!-- Start Single Content -->
                    <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                        <form class="login" method="post" action="">
                            <input type="text" placeholder="email*" name="email">
                            <input type="password" placeholder="Password*" name="password">
                            <button type="submit" name="login" value="Login"  class="btn btn-success ">Login </button>
                        </form>
                               <!--  <div class="tabs__checkbox">
                                    <input type="checkbox">
                                    <span> Remember me</span>
                                    <span class="forget"><a href="#">Forget Pasword?</a></span>
                                </div> -->
                                <div class="htc__login__btn mt--30">
                                 <!--  <a href="#" name="login">Login</a> -->
                                 <!-- <input type="submit" name="submit" value="Login" class="btn btn-success"> -->
                             </div>
                             <div class="htc__social__connect">
                                <h2>Or Login With</h2>
                                <ul class="htc__soaial__list">
                                    <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>

                                    <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>

                                    <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>

                                    <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div id="register" role="tabpanel" class="single__tabs__panel tab-pane fade">
                            <form class="login" method="post" action="" enctype="multipart/form-data">
                                <input type="text" placeholder="Name*" name="name">
                                <input type="email" placeholder="Email*" name="email">
                                <input type="text" placeholder="Contact*" name="contact">
                                <select name='cntid' class="form-control">
                                    <option value="0">Select Country</option>
                                    <?php 
                                    $sql = $db->view("*","countries","","");
                                    while ($v = $sql->fetch_object()) {
                                        echo "<option value='{$v->id}'>{$v->name}</option>";
                                    }
                                    ?>
                                </select>
                                <select name="citid" class="form-control">
                                    <option value="0">Select Country First</option>
                                </select>
                                <input type="text" placeholder="Address*" name="address">
                                <input type="text" placeholder="Age*" name="age">
                                
                                <input type="password" placeholder="Password*" name="password">
                                <input type="file" name="picture">
                                <button type="submit" name="signup" value="Signup" class="btn btn-success ">Signup</button>
                            </form>
                            <div class="htc__social__connect">
                                <h2>Or Login With</h2>
                                <ul class="htc__soaial__list">
                                    <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a class="bg--facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="bg--googleplus" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- End Login Register Content -->
        </div>
    </div>
    <!-- End Login Register Area -->
    <!-- Start Footer Area -->
