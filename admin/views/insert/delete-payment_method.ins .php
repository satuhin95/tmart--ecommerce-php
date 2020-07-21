<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Payment_method Name Requried <br>";
  }
  if ($_POST['details']=='') {
    $msg .="Payment_method details Requried <br>";
  }
  
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
      "details"=>$_POST['details'],
    );
    if ($db->Insert('payment_method',$arr)) {
      echo "Payment_method create successfully";
      Redirect('view-payment_method.php');
    }
  }
}
?>
<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Payment_method</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name"> Payment_method Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Payment_method Name" name="name">
        </div>
        <div class="form-group">
          <label for="Details"> Payment_method Details:</label>
          <input type="text" class="form-control"  placeholder="Enter Payment_method Details" name="details">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

