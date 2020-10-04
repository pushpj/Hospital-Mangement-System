<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background:url('images/3.jpg') no-repeat;background-size:cover;height:300px;"></div>
<div class="container">
<div class="card">
	    		<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	    		<div class="row">
	    		<div class="col-md-1">	
	    			<a href="admin panel.php" class="btn btn-light">Back</a>
	    			</div>
	    			<div class="col-md-3"><h4>PATIENT DETAILS</h4></div>
	    			<div class="col-md-8">
	    				<form class="form-group" action="patientsearch.php" method="post">
	    					<div class="row">
	    					<div class="col-md-8"><input type="text" name="search" class="form-control" placeholder="Enter Contact To Search..." action="patientsearch.php" method="post"></div>
	    					<div class="col-md-1"><input type="submit" name="patientsearch submit" class="btn btn-light" value="Search"></div></div>
	    				</form>
	    			</div>
	    		</div></div>
	    		<div class="card-body"></div>
<table class="table table-hover" style="background-color:#3498DB;color:#ffffff;">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor's Appointment</th>    
      
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details(); ?>
</tbody>
</table>
</div>
	    	







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>