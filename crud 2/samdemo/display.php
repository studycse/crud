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

	<div class="container">
		<div class="col-lg-12">

			<br><br><h1 class="text-center text-primary">Display Table</h1>
			<br><table class="table table-striped table-hover text-center  ">
				
			<tr class="text-white bg-dark">


				<th>Id</th>

				<th>User Name</th>

				<th> Password</th>

				<th>Delete</th>
				
				<th>Update</th>

			</tr> 

<?php


    include 'dbcon.php';

	$query="select * from testtable";

	$result= mysqli_query($connect,$query);
	while ($test =mysqli_fetch_array($result)) {
	


	
?>

			  <tr >
			  	
			  	<td><?php echo $test['id']; ?></td>
			  	<td><?php echo  $test['username'];?></td>
			  	<td><?php echo $test['password']; ?></td>
			  	<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $test['id']; ?>" class="text-white" >Delete </a> </button></td>
			  	<td><button class="btn-primary btn "> <a href="update.php?id=<?php echo $test['id']; ?>" class="text-white">Update </a></button></td>


			  </tr>
<?php
			  
        }
			?>   
			</table>
			
		</div>
		

	</div>

</body>
</html>