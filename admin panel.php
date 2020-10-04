<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="pushpjain" style="background:url('images/3.jpg') no-repeat;background-size:cover;height:300px"></div>
<div class="container-fluid">
	<div class="row">
		
        <div class="col-md-3">
        	<div class="list-group">
        		<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">PATIENTS</a>
        		<a href="patient details.php" class="list-group-item">Patient Details</a>
                <a href="" class="list-group-item">Add new Patient</a>
                <a href="" class="list-group-item">Payment/Checkout</a>   
        	</div>
        <hr>
        <div class="list-group">
        		<a href="" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">STAFF</a>
        		<a href="" class="list-group-item">Staff Details</a>
                <a href="" class="list-group-item">Add new Staff</a>
                <a href="" class="list-group-item">Remove Staff Member</a>   
        	</div>
        	<hr>
<div class="list-group">
        		<a href="" class="list-group-item" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">EMERGENCY</a>
        		<a href="hospi.php" class="list-group-item">Hospitals Near You</a>
</div>
<hr>
<div class="list-group">
        		<a href="" class="list-group-item" style="background-color:#3498DB;color:#ffffff;border-color:#3498DB">SERVICIES PROVIDED</a>
        		<a href="" class="list-group-item">OPD(Allopathy & Homeopathy)</a>
<a href="" class="list-group-item">Dental Facility</a>
<a href="" class="list-group-item">Ward Facility</a>
<a href="" class="list-group-item">Minor OT/Dressing Room</a>
<a href="" class="list-group-item">Physiotherapy</a>
<a href="" class="list-group-item">Laboratory</a>
<a href="" class="list-group-item">ECG Services</a>
<a href="" class="list-group-item">Pharmacy</a>
<a href="" class="list-group-item">Ambulance Services</a>
<a href="" class="list-group-item">Radiology/X-ray facility</a>
</div>


        </div>
        <br>	   
	    <div class="col-md-8">
	    	<div class="card">
	    		<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	    			BOOK AN APPOINTMENT
	    		</div>
	    		<div class="card-body">
	    			<form class="form-group" action="func.php" method="post">
	    				<label>First Name: </label>
	    				<input type="text" name="fname" class="form-control"><br>
	    				<label>Last Name: </label>
	    				<input type="text" name="lname" class="form-control"><br>	    
	    				<label>E-Mail ID: </label>
	    				<input type="email" name="email" class="form-control"><br>	 
	    				<label>Contact: </label>
	    				<input type="number" name="contact" class="form-control"><br>
	    				<label>Doctor's Appointment: </label>
	    				<select class="form-control" name="docapp">
	    					<option value="Dr. Sharma from 6PM to 8PM">Dr. Sharma from 6PM to 8PM</option>
	    					<option value="Dr. Shetty from 4PM to 6PM">Dr. Shetty from 4PM to 6PM</option>
	    				</select><br>   								
	    				<input type="submit" class="btn btn-primary" name="pat_submit" value="Book Appointment">
                        <p align="right"></p> 
	    			</form>
 







	    		</div>
	    	</div>
	    </div>
	    <div class="col-md-1"></div>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>