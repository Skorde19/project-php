<?php 

if(isset($_POST["register_btn"]))
{

$connect = mysqli_connect("localhost","root","","project2");

$un = $_POST["username"];
$pwd = md5($_POST["password"]);
$pn = $_POST["phone"];

$qry ="INSERT INTO `register`(`id`, `username`, `password`, `phone`) VALUES (NULL,'$un','$pwd','$pn')";

$result =mysqli_query($connect, $qry);

if($result)
{
	echo "Registration Successfull!";
}
else
{
	echo "Something went wrong.";
}
}






 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-success d-flex justify-content-between align-items-center">
						<h3>Registration form</h3>
						<button class="close" >&times;</button>

					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>username</label>
								<input type="text" name="username" placeholder="username" class="form-control">	
							</div>
							
							
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="password" class="form-control">	
							</div>
							<div class="form-group">
								<label>phone number</label>
								<input type="tel" name="phone" placeholder="phone" class="form-control">	
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success" name="register_btn" >Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>