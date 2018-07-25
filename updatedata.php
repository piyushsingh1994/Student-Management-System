<?php

include('../dbcon.php');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcont=$_POST['pcont'];
$standard=$_POST['standard'];
$id=$_POST['sid'];
$image=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$image");

$query="UPDATE `student` SET `rollno` = '$standard', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$standard', `image` = '$image' WHERE `id` = $id;";
$run=mysqli_query($con,$query) or die(mysqli_error($con));
if ($run==true) {
  ?>
  <script>
  alert( 'Data updated successfully');

  window.open ('updateform.php?sid=<?php echo $id;?>','_self');

  </script>
  <?php
}








 ?>
