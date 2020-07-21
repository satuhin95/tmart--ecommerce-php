<li class="search search__open hidden-xs"><span class="ti-search"></span></li>
      <?php 
            if (!isset($_SESSION['type'])) {
           ?>
  <li><a href="index.php?f=login-register"><span class="ti-user"></span></a></li>
  <?php 
}
?>
    <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
        <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>