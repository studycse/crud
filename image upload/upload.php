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
</head>
<body>

	<div class="container">
		<h1 class="text-center text-white bg-dark">
			Register name with profile
		</h1>
		<br>

		<div class="table-responsive"> 
		<table class="table table-bordered table-striped table-hover text-center">
<!-- table-border= its show border , tb-striped= zebra crossing design -->

			<thead class="bg-dark text-white">
				<th>Id</th>
				<th>Username</th>
				<th>Profile Pic</th>
				</thead>

				<tbody> <!-- this table will show from the database -->

					<!-- DATABASE CONNECTION-->

					<?php
					$con = mysqli_connect('localhost','root');
					mysqli_select_db($con, 'picupload');

					if(isset($_POST['submit'])){

						$username =$_POST['username'];
						$files = $_FILES['file'];

						print_r($username);
						echo "<br>";
						//print_r($files);


						// FILE ACCESSING
						$filename =$files['name']; //file name 3.jpg can show
						$fileerror = $files['error'];
						$filetmp = $files['tmp_name']; //file temporay upload file a save korar jonno

						

						$fileext = explode('.', $filename); //jekhane . pabo 3.jpg duita separate kore dibo
						$filecheck = strtolower(end($fileext)); //jgp extention lower part kore nite hobe

						$fileextstored = array ('png','jpg', 'jpeg');
						// jei file paisi tar jpg match korse kina
						if(in_array($filecheck, $fileextstored )){
							//upload file pc te save hove
							$destinationfile ='upload/'.$filename;
							move_uploaded_file($filetmp, $destinationfile);
							//if condition er vitor
							$q ="insert into pictable (username, image) values ('$username','$destinationfile')";
							mysqli_query($con,$q);

							$displayquery ="select * from pictable";
							$querydisplay = mysqli_query($con, $displayquery);
							//$row = mysqli_num_rows($querydisplay);
							while( $result = mysqli_fetch_array($querydisplay)) {
								
								?> <!--closed-->

								<tr> <!-- tablr row loop-->
									<td><?php echo $result ['id']; ?></td>
									<td><?php echo $result ['username']; ?></td>
									<td><img src=" <?php echo $result ['image']; ?>" height="100px" width="100px" ></td>
									
								</tr>

								<?php 
							}

						}
					}

					?>
					
				</tbody>
		</table>

	</div>
		
	</div>

</body>
</html>