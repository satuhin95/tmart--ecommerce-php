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
      'name'=>$_POST['name']
    );
    if ($db->Update('subcategories',$arr,$_GET['id'])) {
      Redirect('index.php?v=view-subcategories');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Update New Color</h2>
      <?php 
      $result = $db->view("*","subcategories","",['id'=>$_GET['id']],"");
      while ($v = $result->fetch_object()) {
        ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="name"> Subcategories Name:</label>
            <input type="text" class="form-control"   name="name" value="<?php echo $v->name ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php 
      }
      ?>
    </div>
  </div>
</body>

