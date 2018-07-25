<?php
session_start();
if($_SESSION['username'])
{
  echo $_SESSION['username'];
}
else {
  header('location:../login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="index.css">
  <title> Admin Dashboard</title>
</head>
<body>

  <style>
  body {
    background-image: url(../image10.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;

  }
  .header2
  {
    position: fixed;
    left: 0;
    top: -30px;
    width: 100%;
    text-align: center;

  }
  .footer
  {
    position: absolute;
    margin-left: 0;

    bottom: 0px;

    text-align: center;

    width: 100%;
    background-color: #000000;

  }

  </style>
  <?php include ('header2.php'); ?>

 <div class="container">
   <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">

 <div class="admintitle" align="center" style="color:black;">
   <h1> Welcome to Admin Dashboard</h1>
 </div>
 </div>
  <div>
<table class="table table-inverse;" border="2" style=" color:red;">

<tr border="1">
  <td>1. </td><td align="center"  ><a href="addstudent.php"> Insert Student Details</a></td>
</tr>
<tr>
  <td>2. </td><td align="center"><a href="updatestudent.php"> Update Student Details</a></td>
</tr>
<tr>
  <td>3. </td><td align="center"><a href="deletestudent.php"> Delete Student Details</a></td>
</tr>
</table>
  </div>
</div>
</div>


</body>
 <?php include ('footer.php'); ?>
</html>
