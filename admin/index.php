<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>
<?php 
session_start();
// 	if (!isset($_SESSION['type'])  && (!($_SESSION['type']==1) || ($_SESSION['type']==1) )) {
// 	Redirect("index.php?i=login");
// }
include "../library/db.php";
include "../helper/our-helper.php";
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/saif.css">
    <link rel="stylesheet" type="text/css" href="css/fSelect.css">
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
   
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/fSelect.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                   <!--  <img src="img/logo-large.png" alt="Logo" /> -->
               </div>
               <div class="floatleft middle">
                 <h1>E-commerce</h1>
             </div>
             <div class="floatright">
                <div class="floatleft">
                    <!-- <img src="img/img-profile.jpg" alt="Profile Pic" /> --></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <?php
                            if (isset($_SESSION['id'])) {
                                ?>
                                
                                <li><?php echo $_SESSION['name'];   ?></li> 
                                <li><a href="index.php?i=logout">Logout</a></li>
                                <?php 
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <?php include "views/subpage/menu.php"; ?>
            </ul>
        </div>
        <div class="clear">
        </div>
        <?php include 'system/controller.php';?>
        <?php include 'inc/footer.php';?> 