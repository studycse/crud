


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="container">
<div class="col-lg-12">

<br><br><h1 class="text-center text-primary">Display Table</h1>
<!-- search option -->

<div class="">
<nav class="navbar navbar-light bg-light">
<form  action="search.php" class="form-inline" method="post">

<center><table>
<tr>
	
	<td> <span class="text"> Search </span> <input type="text" name="username" > </td>
		<td> <span class="text"> Email Id </span> <input type="text" name="email" > </td>
	<td><input class="form-control"  type="submit" name="submit"></td>

</tr>
</table></center>
</form>

</nav>
</div>


<br><table  class="table table-striped table-hover text-center  ">
<tr class="text-white bg-dark">


				<th>ID</th>

				<th>Username</th>

				<th>Email ID</th>

				<th>Division</th>

				<th>District</th>

				<th>Upozila</th>

				<th>Delete</th>
				
				<th>Update</th>
				
				<th>Detail</th>

			</tr> 

			<?php

			include 'dbcon.php';
			include 'sql.php';

			
			$query="select registertable3.*,division_tab.division_name,district_tab.district_name,upozila_tab.upozila_name from registertable3 
		left join division_tab on division_tab.id=registertable3.division 
			left join district_tab on district_tab.id=registertable3.district 
			left join upozila_tab on upozila_tab.id=registertable3.upozila ";

       
	           
 			$result=mysqli_query($connect,$query) ;

           
             while ($test=mysqli_fetch_array($result)){


			?>

			<tr>
				<td><?php echo $test['id']; ?></td>
				<td><?php echo $test['username']; ?></td>
				<td><?php echo $test['email']; ?></td>
				<td><?php echo $test['division_name']; ?></td>
				<td><?php echo $test['district_name']; ?></td>
				<td><?php echo $test['upozila_name']; ?></td>

				<td><button class="btn-danger btn">
					<a href="delete.php?id=<?php echo $test['id']; ?>" class="text-white">Delete</a>
					<td><button class="btn-primary btn">
						<a href="update.php?id=<?php echo $test['id']; ?>" class="text-white">Update</a>
				</button></td>
				<td><button class="btn-success btn">
						<a href="detail.php?id=<?php echo $test['id']; ?>" class="text-white">Detail</a>
				</button></td>
				<td></td>
				<td></td>



			</tr>

			<?php


		}

	

		?>



				</table>
			
		</div>
		

	</div>

</body>
</html>

</body>
</html>