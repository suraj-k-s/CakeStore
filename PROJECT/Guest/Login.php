<?php
include("../Assets/Connection/Connection.php");
session_start();


if(isset($_POST["btnLogin"]))
{
  $uname = $_POST["txtusername"];
  $password = $_POST["txtpassword"];
  
  $selQry = "select * from tbl_user where user_email='".$uname."' and user_password='".$password."'";
  $row=$conn->query($selQry);
  echo $selQry;
  
  $selAdmin = "select * from tbl_admin where admin_email='".$uname."' and admin_password='".$password."'";
  $rowAdmin=$conn->query($selAdmin);
  
  
  if($data=$row->fetch_assoc())
  {
   $_SESSION["lgid"]=$data["user_id"];
   $_SESSION["lgname"]=$data["user_name"];
   $_SESSION["email"]=$data["user_email"];
   header("location:../User/HomePage.php");
  }
  
   else if($dataAdmin=$rowAdmin->fetch_assoc())
  {
   $_SESSION["lgid"]=$dataAdmin["admin_id"];
   $_SESSION["lgname"]=$dataAdmin["admin_name"];
   
   header("location:../Admin/HomePage.php");
  }
  
  
  else
  {
?>
    <script>
           alert("Invalid Username or Password");
     
   </script>
            
            <?php
  }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Assets/Template/Login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../Assets/Template/Login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/Template/Login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../Assets/Template/Login/css/style.css">
</head>

<body>
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('../Assets/Template/Login/images/cupcake.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Deepz Cakes House</strong></h3>
           
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" name="txtusername" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="txtpassword" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="RecoveryPassword.php" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" name="btnLogin" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="../Assets/Template/Login/js/jquery-3.3.1.min.js"></script>
    <script src="../Assets/Template/Login/js/popper.min.js"></script>
    <script src="../Assets/Template/Login/js/bootstrap.min.js"></script>
    <script src="../Assets/Template/Login/js/main.js"></script>
  </body>
</html>