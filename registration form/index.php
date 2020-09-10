<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>

	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
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
	<div class="container">
		<h1 class="text-center">Registration form</h1>
		<div class=" form col-md-8 m-auto ">
		<form action="upload.php" method="post" >

			First Name: <input type="text" name="username" value=""><br>

			Email: <input type="text" name="email" value="" ><br>

	 	Division:<select>
			<option value="Dhaka">dhakak</option>
			<option value="comilla">comilla</option>
			<option value="barishal">barishal</option>
		</select>

		Distric: <select>
			<option value="Dhaka">dhakak</option>
			<option value="comilla">comilla</option>
			<option value="barishal">barishal</option>
		</select>

		upozila: <select>
			<option value="Dhaka">dhakak</option>
			<option value="comilla">comilla</option>
			<option value="barishal">barishal</option>
		</select><br>

		Address: <input type="text" name="address" value="" ><br>

		language: <input type="checkbox" value="English"> English 
		 <input type="checkbox" value="Bangla"> Bangla <br>


		 	Exam Name <select>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 	</select>

		 		university <select>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 	</select>

		 		board <select>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 	</select>

		 			Result <select>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 	</select>


		 	<div class="form-group">
				<label for="file"> profile pic </label>
				<input type="file" name="file" id="file" class="form-control">

				<input type="submit" name="submit" value="submit" class="btn btn-success">
					
					
				</label>
				
			</div>

			<table border="1" cellspacing="5" cellpadding="5" width="100%">
				
					<th>exam</th>
					<th>exam</th>
					<th>exam</th>
					
				<tbody>
					<tr>
						<td><select >
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 		<option value="bsc">bsc</option>
		 	</select></td>
						<td>1</td>
						<td>1</td>

					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1</td>
						
					</tr>
					<tr>
						<td>1</td>
						<td>1</td>
						<td>1</td>
						
					</tr>

				</tbody>

				
			</table>




</form>
</div>
</body>

</html>