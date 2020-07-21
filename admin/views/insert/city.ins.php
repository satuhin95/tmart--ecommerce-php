<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="City Name Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
      "country_id "=>$_POST['cntid']
    );

    if ($db->Insert('cities',$arr)) {
      Redirect('index.php?v=view-cities');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New City</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Country Name:</label>
          <select name="cntid" class="form-control">
            <option value="0"> Select Contry</option>
            <?php 
            $sql = $db->view("*","countries","","");
            while ($v = $sql->fetch_object()) {
              echo "<option value='{$v->id}'>{$v->name}</option>";
            }
            ?>
          </select>
        </div><div class="form-group">
          <label for="name"> City Name:</label>
          <input type="text" class="form-control"  placeholder="Enter City Name" name="name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
<?php include 'inc/footer.php';?>
