<?php 
$id ="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Brands Name Requried <br>";
  }
  if ($msg) {
    echo $msg;
  }
  else{  
    $ext = checkExt('logo');
    $arr = array(
      "name"=>$_POST['name'],
      "logo"=>$ext
    );
    
    if ($db->Insert('brands',$arr)) {
     echo $db->id;
     if ($ext) {

       move_uploaded_file($_FILES['logo']['tmp_name'], "img/brand/{$id}.{$ext}");
     }
     
     Redirect('index.php?v=view-brands');
   }
 }
}
?>

<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Brands</h2>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name"> Brands Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Brands Name" name="name">
        </div>
        <div class="form-group">
          <label for="Logo"> Brands Logo:</label>
          <input type="file" class="form-control"   name="logo">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
<?php include 'inc/footer.php';?>
