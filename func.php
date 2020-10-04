<?php
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{  
	header("Location:admin panel.php");
}
else
{
	echo "<script>alert('Enter correct details.');</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
}


if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$appt=$_POST['appt'];
    $query="insert into appo(fname,lname,email,contact,appt)values('$fname','$lname','$email','$contact','$appt')";
    $result=mysqli_query($con,$query);
    if($result)
    {
    	echo "<script>alert('Appointment Registered.');</script>";
	    echo "<script>window.open('admin panel.php','_self')</script>";
}
    }



function get_patient_details(){
global $con;
$query="select * from appo";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)) {
    $fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$appt=$row['appt'];
 echo "<tr>
       <td>$fname</td>
       <td>$lname</td>
       <td>$email</td>
       <td>$contact</td>
       <td>$appt</td>
       </tr>";

}





}
?>