<?php 
if (isset($_SESSION['type']) && ($_SESSION['type']==1 || $_SESSION['type']==2)) {

	?>
	<li class="ic-dashboard"><a href="index.php?=home"><span>Dashboard</span></a> </li>
	<li class="ic-form-style"><a href="index.php"><span>User Profile</span></a></li>
	<li class="ic-typography"><a href="index.php?i=changepassword"><span>Change Password</span></a></li>
	<li class="ic-grid-tables"><a href="index.php"><span>Inbox</span></a></li>
	<!-- <li class="ic-charts"><a href="index.php?f=home"><span>Visit Website</span></a></li> -->
	<li class="ic-charts"><a href="index.php?i=add"><span>Add</span></a></li>
	<li class="ic-charts"><a href="index.php?v=view"><span>View</span></a></li>
	<?php 
}
if (isset($_SESSION['type']) && $_SESSION['type']==1) {

	?>
	<li class="ic-charts"><a href="index.php?s=create-admin"><span>Create Admin</span></a></li>
	<li class="ic-charts"><a href="index.php?s=view-admin"><span>View  Admins</span></a></li>
	<?php 
}
?>