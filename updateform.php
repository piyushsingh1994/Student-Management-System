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
 <?php
  include('../dbcon.php');
  $sid=$_GET['sid'];
  $sql= "SELECT * FROM student WHERE id='$sid' ";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
   ?>
 <!DOCTYPE html>
 <html>
 <title> </title>
 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="index.css">
 </head>
 <body>
   <style>
   {
     position: relative;
     min-height: 100%;
   }

   body {
     background-image: url(../image11.jpg);
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

     width: auto;
     background-color: #000000;

   }
   </style>
   <?php include ('header.php'); ?>
   <div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">

   <div class="admintitle" align="center">

    <h1 align="center" > Welcome to Admin Dashboard</h1>
  </div>
    <form method="POST" action="updatedata.php" enctype="multipart/form-data">
      <table class="table table-inverse;" border="2" style="color:black;">
        <tr>
          <th> Roll No</th>
          <td><input type="text" name="rollno" value=<?php echo $data['rollno'];  ?> > </td>
        </tr>
        <tr>
          <th> Name</th>
          <td><input type="text" name="name"  value=<?php echo $data['name'];  ?>   > </td>
        </tr>

        <tr>
          <th> City</th>
          <td><input type="text" name="city"  value=<?php echo $data['city'];  ?>  > </td>
        </tr>

        <tr>
          <th> Pcontact</th>
          <td><input type="text" name="pcont"  value=<?php echo $data['pcont'];  ?>   > </td>
        </tr>

        <tr>
          <th> standard</th>
          <td><input type="number"name="standard"  value=<?php echo $data['standard'];  ?>   > </td>
        </tr>

        <tr>
          <th> Image</th>
          <td><input type="file" name="image" required> </td>
        </tr>

        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
            <button type="submit "class="form-control btn btn-warning" placeholder="Submit" name="submit" required="true">Submit</td>

        </tr>

      </table>

    </form>
  </div>
 </body>
  <?php include ('footer.php'); ?>

 </html>
