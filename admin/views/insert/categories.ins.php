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
    if ($db->Insert('categories',$arr)) {
      echo "Category create successfully";
      Redirect('index.php?v=view-categories');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Category</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Category Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Category Name" name="name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
<?php include 'inc/footer.php';?>
