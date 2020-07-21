<table  class="tbl">
	<tr>
		<th width='20%'>Id</th>
		<th width='20%'>City Name</th>
		<th width='20%'>Country id</th>
		<th width='20%'>Action</th>
		<th width='20%'>Modify</th>
	</tr>	
	<?php
	if ($sql = $db->view("*","cities","","")) {
		while ($v =$sql->fetch_object()) {
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td>{$v->country_id}</td>";
			echo "<td><a href='index.php?i=delete-cities&id={$v->id}'>Delete</a></td>";
			echo "<td><a href='index.php?i=edit-cities&id={$v->id}'>Edit</a></td>";
			echo "</tr>";
		}
	}	 

	?>

</table>
