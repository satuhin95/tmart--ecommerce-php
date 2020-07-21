<table  class="tbl">
	<tr>
		<th width='25%'>Id</th>
		<th width='25%'>Name</th>
		<th width='25%'>Action</th>
		<th width='25%'>Modify</th>
	</tr>	
	<?php
	if ($sql = $db->view("*","countries","","")) {
		while ($v =$sql->fetch_object()) {
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td><a href='index.php?i=delete-country&id={$v->id}'>Delete</a></td>";
			echo "<td><a href='index.php?i=edit-countries&id={$v->id}'>Edit</a></td>";
			echo "</tr>";
		}
	}	 

	?>

</table>
