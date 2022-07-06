<?php
// Include config file
require_once "config.php";
$email_msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $employee_id =  $_REQUEST['employee_id'];
  $employee_type = $_REQUEST['employee_type'];
  $email_id =  $_REQUEST['email_id'];
  $password = $_REQUEST['password'];
  $c_password = $_REQUEST['c_password'];
  
  // if(filter_var($email_id,FILTER_VALIDATE_EMAIL)){
    
  // }
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO users  VALUES ('','$employee_id',
      '$employee_type','$email_id','$password','$c_password')";
   
  if(mysqli_query($conn, $sql)){
      echo '
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Success</strong> Your Data Successfully Submit.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
  } else{
      echo "ERROR: Hush! Sorry $sql. "
          . mysqli_error($conn);
  }
   
  // Close connection
  mysqli_close($conn); 
  
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Login Page</title>
  <style>
    body{
        background: rgb(238,174,202);
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Sankey Business Solutions Pvt. Ltd.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

  <div class="container">
    <div class="container-fuild py-5">
    <form action="" method="post" class="row g-3">
<div class="col-md-6">
    <label for="employeeID" class="form-label">Employee ID</label>
    <input type="text" class="form-control" name="employee_id" id="employeeID">
    <span class="invalid-feedback"><?php echo $employee_id_err; ?></span>
  </div>
<div class="col-md-6">
    <label for="employeetype" class="form-label">Select Employee type</label></br>
    <select id="employeetype" name="employee_type" class="form-control">
      <option class="form-control" selected>Choose...</option>
      <option class="form-control" value="HR">HR</option>
      <option class="form-control" value="Developer">Developer</option>
      <option class="form-control" value="Admin">Admin</option>
    </select>
  </div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email_id" id="emailID" onkeypress="checkEmail()">
    <span id="message" style="color: red;"></span>
  </div>
<div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
    <span class="invalid-feedback"><?php echo $password_err; ?>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Conform Password</label>
    <input type="password" class="form-control" name="c_password" id="c_password">
    <span class="invalid-feedback"><?php echo $c_password_err; ?></span>
  </div>
  <div class="col-md-12 py-5">
    <input type="submit" class="btn btn-primary form-control" value="Submit">
  </div>
</form>
<p>Already have an account? <a href="index.php">Login here</a>.</p>
    </div>
  </div>

<script>
 function checkEmail(){
  var emailID = document.getElementById('emailID').value;
  var emailRegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(emailRegExp.test(emailID)){
    document.getElementById("message").innerHTML= "<span style='color:green;'><strong>**Valid Email**</strong></span>";
  }else{
    document.getElementById("message").innerHTML="Invalid email";
  }
 }
</script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>