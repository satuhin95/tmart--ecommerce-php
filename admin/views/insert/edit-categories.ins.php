<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Category Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
    );
    if ($db->Update('categories',$arr,$_GET['id'])) {
      Redirect('index.php?v=view-categories');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Update Category</h2>
      <?php 
      $result = $db->view("*","categories","",['id'=>$_GET['id']]);
      while ($v = $result->fetch_object()) {
        ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="name"> Category Name:</label>
            <input type="text" class="form-control" value="<?php echo $v->name ?>"   name="name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php 
      }
      ?>
    </div>
  </div>
</body>

