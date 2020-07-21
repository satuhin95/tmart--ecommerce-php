<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Brands Name Requried <br>";
  }
  if ($msg) {
    echo $msg;
  }
  else{
   $ext = checkExt("logo");
   $results = $db->view("*", "brands", "", ['id'=>$_GET['id']]);
   while ($d = $results->fetch_object()) {
    $old_ext = $d->logo;
  }
  if($ext){
    if(file_exists("img/brand/{$_GET['id']}.{$old_ext}")){
      unlink("img/brand/{$_GET['id']}.{$old_ext}");
    }
    move_uploaded_file($_FILES['logo']['tmp_name'], "img/brand/{$_GET['id']}.{$ext}");
  }
  else{
    $ext = $old_ext;
  }
  
  $arr = array(
    "name"=>$_POST['name'],
    "logo"=>$ext
  );
  if ($db->Update('brands',$arr,$_GET['id'])) {
    Redirect('index.php?v=view-brands');
  }
  
}
}
?>

<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Update Brands</h2>
      <?php 
      $result = $db->view("*","brands","",['id'=>$_GET['id']],"");
      while ($v = $result->fetch_object()) {
        ?>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name"> Brands Name:</label>
            <input type="text" class="form-control" value="<?php echo $v->name ?>"  name="name">
          </div>
          <div class="form-group">
            <label for="Logo"> Brands Logo:</label>
            <input type="file" class="form-control"   name="logo">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php 
      }
      ?>
    </div>
  </div>
</body>

