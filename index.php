<!DOCTYPE html>
<html>
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
    background-image: url(image6.jpg);
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

  <?php include ('header3.php'); ?>
  <div class="container">
   <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">



  <h1><center> Welcome to Student Management System </center> </h1>
</div>
  <form method="POST" action="index.php">
    <div class="col-xs-12">
    <div class="table-responsive">
  <table  class="table table-inverse;" border="2" style="width:50%" align="center" >
    <tr>
      <td>Choose Standard</td>
      <td>
        <select name="std">
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
        <option value="6">6th</option>
        <option value="7">7th</option>
        <option value="8">8th</option>
        <option value="9">9th</option>
        <option value="10">10th</option>
        </select>

      </td>

    </tr>
    <tr>
      <td>Enter Roll No. </td>
      <td><input type="text" name="rollno">  </td>
    </tr>
    <tr>
      <td colspan="2" align="center">  <button type="submit "class="form-control btn btn-primary" placeholder="Submit" name="submit" required="true">Show info </td>

    </tr>

  </table>
</div>
</div>
</form>
</div>
 <?php include ('admin/footer.php'); ?>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
  $standard=$_POST['std'];
  $rollno=$_POST['rollno'];

  include('dbcon.php');
  include('function.php');

  showdetails($standard,$rollno);
}
?>
