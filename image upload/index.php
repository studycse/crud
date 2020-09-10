<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap 4 CDN-->
	<!-- Latest compiled and minified CSS  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<!--REgistration form --->
	<div class="container">
		<br>

		<h1 class="text-white bg-dark text-center">
			Register form for events
		</h1>

		<div class="col-lg-8 m-auto display-block"> <!-- m-auto kore display block korle center a ase -->

		<form action="upload.php" method="post" enctype ="multipart/form-data">

			<div class="form-group">
				<label for="user">Username </label>
				<input type="text" name="username" id="user" class="form-control">
					
				</label>
				
			</div>

			<div class="form-group">
				<label for="file"> profile pic </label>
				<input type="file" name="file" id="file" class="form-control">

				<input type="submit" name="submit" value="submit" class="btn btn-success">
					
					
				</label>
				
			</div>

			
		</form>
		</div>
		
	</div>

</body>
</html>