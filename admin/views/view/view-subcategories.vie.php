<table  class="tbl">
	<tr>
		<th width='10%'>Id</th>
		<th width='20%'>Subcategory Name</th>
		<th width='20%'>Category id</th>
		<th width='20%'>Action</th>
		<th width='20%'>Modify</th>
	</tr>	
	<?php
	if ($sql = $db->view("*","subcategories","","")) {
		while ($v =$sql->fetch_object()) {
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td>{$v->categorie_id}</td>";
			echo "<td><a href='index.php?i=delete-subcategories&id={$v->id}'>Delete</a></td>";
			echo "<td><a href='index.php?i=edit-subcategories&id={$v->id}'>Edit</a></td>";
			echo "</tr>";
		}
	}	 

	?>

</table>
