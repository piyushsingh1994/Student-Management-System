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
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="index.css">
          <title>Delete Student</title></head>
<body>
  <style>
  {
    position: relative;
    min-height: 100%;
  }

  body {
    background-image: url(../image12.jpg);
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

   <h1> Welcome to Admin Dashboard</h1>
 </div>
<form method="POST" action="deletestudent.php">
<table  class="table table-inverse; " border="2" align="center">
  <tr>
    <th>Enter Standard</th>
  <td><input type="number" name="standard" placeholder="Enter standard" required="required"></td>
</tr>
<tr>
  <th>Enter Student Name</th>
  <td><input type="name" name="name" placeholder="Enter student name" required="required"></td>
</tr>
<td colspan="2">  <button type="submit "class="form-control btn btn-primary" placeholder="Submit" name="submit" required="true">Search</td>


</table>
</form>
</div>
<table align="center" width="80%" border="1" style="margin-top:10px">
  <tr style="background-color:#000; color:#fff">
    <th>No</th>
    <th>Image</th>
    <th>Name</th>
    <th>Rollno </th>
    <th>Edit</th>
  </tr>
  <?php
  if (isset($_POST['submit'])) {
  include('../dbcon.php');
  $standard=$_POST['standard'];
  $name=$_POST['name'];


  $sql= "SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";

  $run=mysqli_query($con,$sql) or die(mysqli_error($con));

  if(mysqli_num_rows($run)<1)
  {
    echo "<tr><td colspan='5'>No records found</td></tr>";
  }
  else {
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
      $count++;
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
        <td><?php echo $data['name'];   ?></td>
        <td><?php echo $data['rollno'];   ?> </td>
      <td><a href="deleteform.php?sid=<?php echo $data['id'] ?>">Delete</a></td>
      </tr>

      <?php
    }
  }
  }
  ?>
</table>
</body>
 <?php include ('footer.php'); ?>
</html>
