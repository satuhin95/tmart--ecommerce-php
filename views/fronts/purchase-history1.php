
    <style type="text/css">
	.tbl{
		width: 90%;
	}
	.tbl th ,td{
		padding: 10px 0;
		text-align: center;
	}
</style>
<body>
<div class="container">
<table border="1" class="tbl">
		<tr>
			<th width="5%">Serial</th>
			<th width="10%">Name</th>
			<th width="10%">Email</th>
			<th width="10%">Contact</th>
			<th width="25%">Address</th>
			<th width="20%">Order Date</th>
			<th width="20%">Delivery Date</th>
			<th width="20%">Details</th>
		</tr>
		<?php 
		$i=1;
	$rel = [
		"orders.shippings_id"=>"shippings.id",
		"shippings.customer_id"=>$_SESSION['id']
	];
	if ($sql = $db->view("orders.orderdate , orders.delivery_date ,shippings.* ", "orders ,shippings", "", "",$rel)) {
		while ($v =$sql->fetch_object()) {
			echo "<tr>";
			echo "<td>{$i}</td>";
			echo "<td>{$v->name}</td>";
			echo "<td>{$v->email}</td>";
			echo "<td>{$v->contact}</td>";
			echo "<td>{$v->address}</td>";
			echo "<td>{$v->orderdate}</td>";
			echo "<td>{$v->delivery_date}</td>";
			echo "<td><a href='index.php?f=details&pid={$v->id}'>View</a></td>";
			echo "</tr>";
			$i++;
}
	}
	?>
		
	</table>       
</div>
</body>



