<table  class="tbl">
	<tr>
		<th width='10%'>Id</th>
		<th width='10%'>Title</th>
		<th width='10%'>Price</th>
		<th width='10%'>Discount</th>
		<th width='10%'>Vat</th>
		<th width='10%'>Unit</th>
		<th width='10%'>Brand</th>
		<th width='1o%'>Subcategory </th>
		<th width='1o%'>Total Quntity</th>
		<th width='1o%'>Total Sale</th>
		<th width='10%'>Action</th>
		<th width='10%'>Modify</th>
	</tr>
	<?php
	$rel = [
		'units.id' => 'products.unit_id',
		'brands.id' => 'products.brand_id',
		'subcategories.id' => 'products.subcategory_id',
		'categories.id' => 'subcategories.categorie_id',
	];
	$select = "products.*, units.name uname, brands.name bname, subcategories.name scname, categories.name cname , 
			(select sum(product_stock.stock) from product_stock where product_stock.product_id=products.id) as totalStock,
			(select sum(order_dtails.quantity) from order_dtails, product_stock where order_dtails.product_stock_id=product_stock.id and product_stock.product_id=products.id) as totalSale
		";
	$table = 'products, product_stock, units, brands, subcategories, categories';
	if ($sql = $db->view($select, $table, ['totalSale'=>'desc'], "", $rel, " group by products.id")) {
		while ($v =$sql->fetch_object()) {
			$stock = $v->totalStock - $v->totalSale;
			echo "<tr>";
			echo "<td>{$v->id}</td>";
			echo "<td>{$v->title}</td>";
			echo "<td>{$v->price}</td>";
			echo "<td>{$v->discount}</td>";
			echo "<td>{$v->vat}</td>";
			echo "<td>{$v->uname}</td>";
			echo "<td>{$v->bname}</td>";
			echo "<td>{$v->scname}</td>";
			echo "<td>{$stock}</td>";
			echo "<td>{$v->totalSale}</td>";
			echo "<td><a href='index.php?i=manage-stock&id={$v->id}'>Manage Stock</a></td>";
			echo "<td><a href='index.php?i=edit-products&id={$v->id}'>Edit</a></td>";
			echo "</tr>";
		}
	}

	?>

</table>
