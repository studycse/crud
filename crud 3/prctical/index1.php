<?php

include 'dbcon.php';

if (isset($_POST['save'])) {
	
	//$username=$_POST['username'];
	//$password=$_POST['password'];
	$query="INSERT INTO samtable (firstname, lastname, email, mobile) VALUES ('$_POST[firstname]','$_POST[lastname]',
	'$_POST[email]','$_POST[mobile]')";

	$result= mysqli_query($connect,$query);

	echo "1 record added";
}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 

 
<div class="col-lg-5 m-auto">
	<form method="post">

		<br><br><div class="card" >

			<div class="card-header ">

				<h1 class=" text-center">INSERT OPERATION</h1>
				</div><br>
					
					<label>First name:</label>
					<input type="text" name="firstname" class="form-control"><br>

					<label>Last Name:</label>
					<input type="text" name="lastname" class="form-control"><br>

					<label>Email:</label>
					<input type="text" name="email" class="form-control"><br>

					<label>Mobile:</label>
					<input type="text" name="mobile" class="form-control"><br>

					<button type="submit" name="save">save</button>

</div>
				

			</div>
			

		</div>
		 
	</form>
	
</div>
</body>
</html>