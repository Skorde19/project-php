<?php 
 
 if(isset($_POST["resetpwd_btn"]))
 {

$connect= mysqli_connect("localhost","root","","project4");

$un = $_POST["username"];
$cont = $_POST["contact"];

$qry =" SELECT * FROM `user` WHERE username ='$un' AND contact ='$cont'";
$result = mysqli_query($connect, $qry);
$data= mysqli_fetch_assoc($result);
$id =$data["id"];

$row = mysqli_num_rows($result);

if($row>0)
{
	$pwd = randomPassword();
	$qry = "UPDATE `user` SET `password`='$pwd' WHERE id ='$id'";

	$result =mysqli_query($connect, $qry);
	echo "Password Reset Successfull!";
}
else
{
	echo "Invalid username or contact number";
}
 }

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#$%';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
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
			<div class="col-md-4 mx-auto">
				<div class="card">
					<div class="card-header bg-primary d-flex justify-content-between align-items-center">
						<h4><b>Reset Password</b></h4>
						<button class="close">&times;</button> 
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact </label>
								<input type="tel" name="contact" class="form-control">
							</div>
							
							
							<div class="form-group">
								<button type="submit" name="resetpwd_btn" class="btn btn-primary"> Reset Password</button>
								<p><span class="text-danger"><?php echo $pwd ?></span> -kindly copy password, change password</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>