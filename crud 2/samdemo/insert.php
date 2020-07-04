<?php

include 'dbcon.php';

if (isset($_POST['save'])) {
	
	//$username=$_POST['username'];
	//$password=$_POST['password'];
	$query="INSERT INTO testtable (username, password) VALUES ('$_POST[username]','$_POST[password]')";

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

<div class="col-lg-6 m-auto">
	<form method="post">

		<br><br><div class="card">

			<div class="card-header bg-dark">

				<h1 class="text-white text-center">INSERT OPERATION</h1>
				</div><br>
					
					<label>Username:</label>
					<input type="text" name="username" class="form-control"><br>

					<label>Password:</label>
					<input type="text" name="password" class="form-control"><br>

					<button type="submit" name="save">save</button>

</div>
				

			</div>
			

		</div>
	</form>
	
</div>
</body>
</html>