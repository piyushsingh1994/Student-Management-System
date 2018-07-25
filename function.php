<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">



<?php
function   showdetails($standard,$rollno)
{
  include('dbcon.php');
  $sql="SELECT * FROM `student` WHERE rollno='$rollno' AND standard='$standard'";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
    $data=mysqli_fetch_assoc($run);
    ?>
    <div class="container"
    <div class="col-xs-12">

    <div class="table-responsive">
    <table class="table table-inverse ;" border="2" style="width:50%" align="center">
    <tr>
   <th colspan="3">Student Detail</th>
    </tr>
    <tr>
     <td rowspan="5"> <img src="dataimg/<?php echo $data['image'];  ?>" style="max-height:150px; max-width:120px; padding-left:30px;"/></td>
     <th> Roll No </th>
     <td><?php echo $data['rollno']; ?>  </td>
    </tr>

    <tr>

     <th> Name</th>
     <td><?php echo $data['name']; ?>  </td>
    </tr>
    <tr>

     <th>standard</th>
     <td><?php echo $data['standard']; ?>  </td>
    </tr>
    <tr>

     <th>Parents contact number</th>
     <td><?php echo $data['pcont']; ?>  </td>
    </tr>
    <tr>

     <th>City</th>
     <td><?php echo $data['city']; ?>  </td>
    </tr>
    </table>
  </div>
</div>
</div>

    <?Php

  }
  else {
    echo "<script>alert('No Student found');</script>";
  }
}
?>
