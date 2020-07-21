<?php 

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Subcategories Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
      "categorie_id "=>$_POST['catid']
    );

    if ($db->Insert('subcategories',$arr)) {
      Redirect('index.php?v=view-subcategories');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Subcategories</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Category Name:</label>
          <select name="catid" class="form-control">
            <option value="0"> Select Category</option>
            <?php 
            $sql = $db->view("*","categories","","");
            while ($v = $sql->fetch_object()) {
              echo "<option value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="name"> Subcategories Name:</label>
          <input type="text" class="form-control"  placeholder="Enter subcategories Name" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
<?php include 'inc/footer.php';?>
