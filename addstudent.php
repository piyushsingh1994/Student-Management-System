<?php
session_start();
if(isset($_SESSION ['username']))
{
  echo "";
}
else {
  header('location: ../login.php');
}
 ?>


<!DOCTYPE html>
<html>
<title>Add Student </title>
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
    background-image: url(../image7.jpg);
    background-repeat: no-repeat;
  background-position: center center;
    background-size: cover;

    width: 100%;

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
   <?php include ('header.php'); ?>
  <div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">

  <div class="admintitle" align="center">

   <h1> Welcome to Admin Dashboard</h1>
 </div>
   <form method="POST" action="addstudent.php" enctype="multipart/form-data">
   </div>
     <table class="table table-inverse;" border="1"  style="color:blue;">
       <tr>
         <th> Roll No</th>
         <td><input type="text" name="rollno" placeholder="Enter your Roll no" required> </td>
       </tr>
       <tr>
         <th> Name</th>
         <td><input type="text" name="name" placeholder="Enter your Name" required> </td>
       </tr>

       <tr>
         <th> City</th>
         <td><input type="text" name="city" placeholder="Enter your city" required> </td>
       </tr>

       <tr>
         <th> Pcontact</th>
         <td><input type="text" name="pcont" placeholder="Enter your Pcontact" required> </td>
       </tr>

       <tr>
         <th> standard</th>
         <td><input type="number" name="standard" placeholder="Enter your standard" required> </td>
       </tr>

       <tr>
         <th> Image</th>
         <td><input type="file" name="image" required> </td>
       </tr>

       <tr>
         <td colspan="2" align="center">  <button type="submit "class="form-control btn btn-primary" placeholder="Submit" name="submit" required="true">Submit
           </button></td>

       </tr>

     </table>

   </form>

</div>

</body>
 <?php include ('footer.php'); ?>

</html>

<?php
if (isset($_POST['submit'])) {
include('../dbcon.php');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcont=$_POST['pcont'];
$standard=$_POST['standard'];
$image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$image");

$query="INSERT INTO student(rollno, name, city, pcont, standard,image) VALUES ('$rollno','$name','$city','$pcont','$standard','$image')";
$run=mysqli_query($con,$query) or die(mysqli_error($con));
if ($run==true) {
  ?>
  <script>
  alert( "Data inserted");
  </script>
  <?php
}




}



 ?>
