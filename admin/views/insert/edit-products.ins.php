<?php
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
  if ($msg) {
    echo $msg;
  }
  else{
    $ext = checkExt("picture");
    $results = $db->view("*", "products", "", ['id'=>$_GET['id']]);
    while ($d = $results->fetch_object()) {
      $old_ext = $d->default_picture;
    }
    if($ext){
      if(file_exists("img/product/{$_GET['id']}.{$old_ext}")){
        unlink("img/product/{$_GET['id']}.{$old_ext}");
      }
      move_uploaded_file($_FILES['picture']['tmp_name'], "img/product/{$_GET['id']}.{$ext}");
    }
    else{
      $ext = $old_ext;
    }

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

    #die();

    if ($db->Update('products',$arr, $_GET['id'])) {
      
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
            $db->Update('product_stock',$arr,$_GET['id']);
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
          $db->Update('product_stock',$arr,$_GET['id']);
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
          $db->Update('product_stock',$arr,$_GET['id']);
        }
      }
      else{
        $arr = [
          'product_id' => $id,
          'size_id' => 0,
          'color_id' => 0,
          'stock' => 0
        ];
        $db->Update('product_stock',$arr,$_GET['id']);
      }
      

    }

    Redirect('index.php?v=view-products');
  }

}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Update Product</h2>
      <?php
      $results = $db->view("*", "products", "", ['id'=>$_GET['id']]);
      while ($data = $results->fetch_object()) {
       ?>
       <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name"> Product Title :</label>
          <input type="text" class="form-control"  name="title" value="<?php echo $data->title ?>">
        </div>
        <div class="form-group">
          <label for="name">  Price:</label>
          <input type="text" class="form-control"  value="<?php echo $data->price ?>" name="price">
        </div>
        <div class="form-group">
          <label for="name">  Discount:</label>
          <input type="text" class="form-control"  value="<?php echo $data->discount ?>" name="discount">
        </div>
        <div class="form-group">
          <label for="name">  Vat:</label>
          <input type="text" class="form-control"  value="<?php echo $data->vat ?>" name="vat">
        </div>
        <div class="form-group">
          <label for="name"> Unite :</label>
          <select name="untid" class="form-control">
            <option value="0"> Select Unite</option>
            <?php
            $sql = $db->view("*","units","","");
            while ($v = $sql->fetch_object()) {
              $selected = ($v->id == $data->unit_id)?" selected":"";
              echo "<option {$selected} value='{$v->id}'>{$v->name}</option>";
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
              $selected = ($v->id == $data->brand_id)?" selected":"";
              echo "<option {$selected} value='{$v->id}'>{$v->name}</option>";
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
              $selected = ($v->id == $data->subcategory_id)?" selected":"";
              echo "<option {$selected} value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">

          <?php
          $colorList = array();
          $sizeList = array();

          $sql = $db->view("*","product_stock","",['product_id'=>$data->id]);
          while ($v = $sql->fetch_object()) {
            if($v->color_id){
              $colorList[] = $v->color_id;
            }
            if($v->size_id){
              $sizeList[] = $v->size_id;
            }
          }
          $colorList = array_unique($colorList);
          $sizeList = array_unique($sizeList);
          ?>
          <select name="color_id[]" id="color" multiple="multiple" class="form-control">
           <?php
           $sql = $db->view("*","colors","","");
           while ($v = $sql->fetch_object()) {
            $selected = in_array($v->id, $colorList)?" selected":"";
            echo "<option {$selected} value='{$v->id}'>{$v->name}</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
       <select name="size_id[]" id="size" multiple="multiple"class="form-control">
         <?php
         $sql = $db->view("*","sizes","","");
         while ($v = $sql->fetch_object()) {
          $selected = in_array($v->id, $sizeList)?" selected":"";
          echo "<option {$selected} value='{$v->id}'>{$v->name}</option>";
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
  <?php
}

?>
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
