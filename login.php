<?php
 session_start();
 if(isset($_SESSION['username']))
 {
   header('location:admin/admindash.php');
 }
  ?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Admin Login</title>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
  <style>
  html
  {
    position: relative;
    min-height: 100%;
  }

  body {
    background-image: url(image4.jpg);
    background-repeat: no-repeat;
  background-position: center center;
    background-size: cover;

    width: 100%;

  }
  .footer
  {
    position: absolute;

    bottom: 0px;

    text-align: center;

    width:auto;
    background-color: #000000;

  }

  </style>

  <ul class="nav navbar-nav navbar-left">


<h4>

<li><a href="index.php"><span class="glyphicon glyphicon-user"></span>Back to Dashboard</a></li>
</ul><br>

<div class="container"  style="margin-top:100px; color:white;">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">
  <panel class="panel-header panel-primary">
    <div class="col-xs-12">

  <form method="post" action="login.php">

    <div class="table-responsive">
      <div class="form-group">
        Username<input type="text" class="form-control" name="username" required>
      </div>
      <div class="form-group">


        Password<input type="password" class="form-control" name="password" required>

      </div>
      <div class="form-group">
        <button type="submit "class="form-control btn btn-primary" placeholder="Submit" name="submit" required="true">Login
        </button>
  </div>
</form>
</div>
</panel>
</div>
</div>
</body>
 <?php include ('admin/footer.php'); ?>
</html>

<?php
include ('dbcon.php');
if (isset($_POST['submit'])) {
  // code...



   $username=$_POST['username'];
   $password=$_POST['password'];

   $query= "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
   $result=mysqli_query($con,$query)or die($mysqli_error($con));
   $row=mysqli_num_rows($result);
   if ($row==0)
   {

     ?>
     <script>alert ("Username or Password does not match");
     windows.open('login.php','self');
     </script>
     <?php

   }
   else {
     $data=mysqli_fetch_array($result);
     $id=$data['id'];



     $_SESSION['username'] = $id;
     header('location: admin/admindash.php');
   }
 }

?>
