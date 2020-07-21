<?php 
$id="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['title']=='') {
    $msg.="Product title Requried <br>";
  }
  if ($_POST['price']=='') {
    $msg.="Product price  Requried <br>";
  }
  if ($_POST['discount']=='') {
    $msg.="Product discount Requried <br>";
  }
  if ($_POST['vat']=='') {
    $msg.="Product vat Requried <br>";
  }
  if ($_POST['untid']=='') {
    $msg.="Product untid Requried <br>";
  }
  if ($_POST['bndid']=='') {
    $msg.="Product bndid Requried <br>";
  }
  if ($_POST['scatid']=='') {
    $msg.="Product scatid Requried <br>";
  }
  if ($_POST['description']=='') {
    $msg .="Product Description Requried <br>";
  }
  if ($msg) {
    echo $msg;
  }
  else{
   
    $ext = checkExt("picture");
    
    $arr =array(
      "title"=>$_POST['title'],
      "price"=>$_POST['price'],
      "discount"=>$_POST['discount'],
      "vat"=>$_POST['vat'],
      "unit_id "=>$_POST['untid'],
      "brand_id "=>$_POST['bndid'],
      "subcategory_id"=>$_POST['scatid'],
      "default_picture"=>$ext
    );

    if ($db->Insert('products',$arr)) {
      $id = $db->id;
      $file = fopen("pdt_text/{$id}.txt", "w") or die("file not open");
      fwrite($file, $_POST['description']) or die();
      fclose($file);
      if ($ext) {
        move_uploaded_file($_FILES['picture']['tmp_name'], "../images/picture/{$id}.{$ext}");
      }
      $colorList = $_POST['color_id'];
      $sizeList = $_POST['size_id'];
      if($colorList && $sizeList){
        foreach($colorList as $color){
          foreach($sizeList as $size){
            $arr = [
              'product_id' => $id,
              'size_id' => $size,
              'color_id' => $color,
              'stock' => 0
            ];
            $db->Insert('product_stock',$arr);    
          }
        }
      }
      else if($colorList){
        foreach($colorList as $color){
          $arr = [
            'product_id' => $id,
            'size_id' => 0,
            'color_id' => $color,
            'stock' => 0
          ];
          $db->Insert('product_stock',$arr);    
        }
      }
      else if($sizeList){
        foreach($sizeList as $size){
          $arr = [
            'product_id' => $id,
            'size_id' => $size,
            'color_id' => 0,
            'stock' => 0
          ];
          $db->Insert('product_stock',$arr);    
        }
      }
      else{
        $arr = [
          'product_id' => $id,
          'size_id' => 0,
          'color_id' => 0,
          'stock' => 0
        ];
        $db->Insert('product_stock',$arr);    
      }


    }

    Redirect('index.php?v=view-products');
  }

}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Product</h2>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name"> Product Title :</label>
          <input type="text" class="form-control"  placeholder="Enter Product title " name="title">
        </div>
        <div class="form-group">
          <label for="name">  Price:</label>
          <input type="text" class="form-control"  placeholder="Enter Product Price" name="price">
        </div>
        <div class="form-group">
          <label for="name">  Discount:</label>
          <input type="text" class="form-control"  placeholder="Enter Product   discount" name="discount">
        </div>
        <div class="form-group">
          <label for="name">  Vat:</label>
          <input type="text" class="form-control"  placeholder="Enter Product Vat" name="vat">
        </div>
        <div class="form-group">
          <label for="name">  Product Description :</label>
          <textarea cols="30" rows="5" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="name"> Unite :</label>
          <select name="untid" class="form-control">
            <option value="0"> Select Unite</option>
            <?php 
            $sql = $db->view("*","units","","");
            while ($v = $sql->fetch_object()) {
              echo "<option value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="name"> Brand :</label>
          <select name="bndid" class="form-control">
            <option value="0"> Select Brand</option>
            <?php 
            $sql = $db->view("*","brands","","");
            while ($v = $sql->fetch_object()) {
              echo "<option value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label> Sub-category :</label>
          <select name="scatid" class="form-control">
            <option value="0"> Select Sub-categories</option>
            <?php 
            $sql = $db->view("*","subcategories","","");
            while ($v = $sql->fetch_object()) {
              echo "<option value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">

         <select name="color_id[]" id="color" multiple="multiple" class="form-control">
           <?php 
           $sql = $db->view("*","colors","","");
           while ($v = $sql->fetch_object()) {
            echo "<option value='{$v->id}'>{$v->name}</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
       <select name="size_id[]" id="size" multiple="multiple"class="form-control">
         <?php 
         $sql = $db->view("*","sizes","","");
         while ($v = $sql->fetch_object()) {
          echo "<option value='{$v->id}'>{$v->name}</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label> Select Picture :</label>
      <input type="file" class="form-control"  name="picture">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
<script>
  (function($) {
    $(function() {
      $('#color, #size').fSelect();
    });
  })(jQuery);
</script>
</body>

