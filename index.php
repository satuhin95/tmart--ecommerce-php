<?php
session_start();

include "library/db.php";
include "views/fronts/header.php";

$db = new Database();


?>
<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
 <?php 
    include "views/fronts/menu.php";
 ?>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-3">
    <ul class="menu-extra">
    	 <?php 
    include "views/fronts/extra-menu.php";
 ?>
        
    </ul>
</div>
</div>
<div class="mobile-menu-area"></div>
</div>
</div>
<!-- End Mainmenu Area -->
</header>
<?php
include "system/controller.php";
?>
<script type="text/javascript" src="assets/js/register.js"></script>

<?php
include "views/fronts/footer.php";
?>
