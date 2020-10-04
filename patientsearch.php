<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
<body>
	<?php
include("func.php");
if(isset($_POST['patient search submit']))
{
    $contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid' style='margin-top=:50px; '><div class'card'>
     <img src='images/1.jpg' class='card-img-top'>
     <div class='card-body'></div>
    <table class='table table-hover' style='background-color:#3498DB;color:#ffffff;'>
  <thead>
    <tr>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Email ID</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Doctor's Appointment</th>    
    </tr>
  </thead>
  <tbody>";
     while ($row=mysqli_fetch_array($result))
    {
      $fname=$row['fname'];
      $lname=$row['lname'];
	  $email=$row['email'];
	  $contact=$row['contact'];
	  $docapp=$row['docapp'];
      echo " <tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$contact</td>
      <td>$email</td>
      <td>$docapp</td>
    </tr>";    
    }
      echo "</tbody></table></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>







