<table  class="tbl">
	<tr>
		<th width='10%'>Id</th>
		<th width='20%'>Name</th>
		<th width='20%'>Details</th>
		<th width='20%'>Action</th>
		<th width='20%'>Modify</th>
	</tr>	
	<?php
	if ($sql = $db->view("*","payment_method","","")) {
		while ($v =$sql->fetch_object()) {
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td>{$v->details}</td>";
			echo "<td><a href='index.php?i=delete-payment_method&id={$v->id}'>Delete</a></td>";
			echo "<td><a href='index.php?i=edit-payment_method&id={$v->id}'>Edit</a></td>";
			echo "</tr>";
		}
	}	 

	?>

</table>
