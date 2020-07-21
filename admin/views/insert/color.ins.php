<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Color Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
    );
    if ($db->Insert('colors',$arr)) {
      echo "Color create successfully";
      Redirect('index.php?v=view-color');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Color</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Color Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Color Name" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

