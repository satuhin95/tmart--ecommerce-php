<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Unite Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name']
    );

    if ($db->Update('cities',$arr,$_GET['id'])) {
      Redirect('index.php?v=view-cities');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Update New City</h2>
      <?php 
      $result = $db->view("*","cities","",['id'=>$_GET['id']],"");
      while ($d = $result->fetch_object()) {
        ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="name"> Country Name:</label>
            <select name="cntid" class="form-control">
              <option value="0"> Select Country</option>
              <?php 
              $sql = $db->view("*","countries","","");
              while ($v = $sql->fetch_object()) {
                echo "<option value='{$v->id}'>{$v->name}</option>";
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="name"> City Name:</label>
            <input type="text" class="form-control"  name="name" value="<?php echo $d->name ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php 
      }
      ?>
    </div>
  </div>
</body>

