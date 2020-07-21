<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$ids = $_POST['id'];
	$stocks = $_POST['stock'];

	foreach ($ids as $key => $value) {
		$db->Update('product_stock', ['stock' => $stocks[$key]], $value); 
		
	}
	Redirect('index.php?v=view-products');
}
?>
<form method="post">
	<table  class="tbl">
		<tr>
			<th width='10%'>Id</th>  
			<th width='10%'>Title</th>
			<th width='10%'>Size</th>
			<th width='10%'>Color</th>
			<th width='10%'>Stock</th>
		</tr>
		<?php
		$sql = "
		select product_stock.id, products.title, colors.name as cname, sizes.name as sname , product_stock.stock
		from products, product_stock left join colors on product_stock.color_id = colors.id left join sizes on product_stock.size_id = sizes.id
		where product_stock.product_id = products.id and product_stock.product_id = '".$_GET['id']."'";

		$result = $db->rawQuery($sql);
		while ($v =$result->fetch_object()) {
			echo "<tr>";
			echo "<td><input type='hidden' name='id[]' value='{$v->id}' /></td>";
			echo "<td>{$v->title}</td>";
			echo "<td>{$v->sname}</td>";
			echo "<td>{$v->cname}</td>";
			echo "<td><input type='text' name='stock[]' value='{$v->stock}' /></td>";
			echo "</tr>";
		}
		?>

	</table>
	<input type="submit" name="">
</form>