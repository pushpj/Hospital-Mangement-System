<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css">
	#ab1:hover{cursor:pointer;}
</style>
<body style="background:url('images/1.jpg') no-repeat;background-size:cover;height:300px">
<div class="container" style="width:400px; margin-top:150px;">
<div class="card">
<div class="card-body">
	<form class="form-group" action="func.php" method="post">
		<label> USERNAME :</label><br>
		<input type="text" name="username" class="form-control" placeholder="Enter Username"><br>
		<label> PASSWORD :</label><br>
		<input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
		<input type="submit" name="login_submit" id="ab1" class="btn btn-primary" value="SUBMIT">
	    
	</form>
</div>
</div>
</div>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>