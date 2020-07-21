<table  class="tbl">
	<tr>
		<th width='10%'>Id</th>
		<th width='20%'>Name</th>
		<th width='20%'>Email</th>
		<th width='20%'>Password</th>
		<th width='10%'>Type</th>
		<th width='20%'>Action</th>
	</tr>	
	<?php
	if ($sql = $db->view("*","admins","","")) {
		while ($v =$sql->fetch_object()) {
			if ($v->type==1) {
				$v->type='Admin';
			}
			else {
				$v->type='Moderator';
			}
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td>{$v->email}</td>";
			echo "<td>{$v->password}</td>";
			echo "<td>{$v->type}</td>";
			echo "<td><a href='index.php?s=delete&id={$v->id}'>Delete</a></td>";
			echo "</tr>";
		}
	}	 

	?>

</table>
