<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $msg='';
  if ($_POST['name']=='') {
    $msg.="Name Requried <br>";
  }
  if ($_POST['email']=='') {
    $msg.=" email Requried <br>";
  }
  if ($_POST['contact']=='') {
    $msg.=" contact Requried <br>";
  }
  if ($_POST['type']=='') {
    $msg.=" type Requried <br>";
  }
  if ($_POST['password']=='') {
    $msg .="Password Requried<br>";
  }
  if ($msg) {
    echo $msg;
  }
  else{
    $arr =array(
      "name"=>$_POST['name'],
      "email"=>$_POST['email'],
      "contact"=>$_POST['contact'],
      "type"=>$_POST['type'],
      "password"=> md5($_POST['password']) 
    );
    if ($db->Insert('admins',$arr)) {
      echo "Account create successfully";
      Redirect('index.php?s=view-admin');
    }
    else{
      echo "Email already Existe";
    }
    
  }
}
?>

<body>
  <div class="container">
    <div class="content mt-5 bg-light p-3">
      <h2>Create New Admin</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="contact">Contact:</label>
          <input type="text" class="form-control"  placeholder="Enter contact" name="contact">
        </div>
        <div class="form-group">
          <label for="type">Type:</label>
          <select name="type" class="form-control">
            <option value="1">Admin</option>
            <option value="2">Moderator</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control"  placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>
