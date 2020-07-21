<?php 

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Size Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
    );
    if ($db->Insert('sizes',$arr)) {
      Redirect('index.php?v=view-sizes');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Size</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Size Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Size Name" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
<?php include 'inc/footer.php';?>
