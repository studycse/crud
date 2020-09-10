<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container bg-gray"><br>
		<h1 class="text-success text-center">
			Registration form
		</h1><br>
<div class="col-lg-8 m-auto ">
	<form action="#"  method="post" onsubmit="return validation()">
		<table>

			<tr>
				<td>Name:</td>
				<td><input type="text" name="username" id="username" autocomplete="off">
				<span id="user" class="text-danger font-weight-bold"></span></td>	
				
			</tr>

			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" id="email" autocomplete="off">
			<span id="emailid" class="text-danger font-weight-bold"></span></td>
			</tr>

			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" id="address" autocomplete="off">
				<span id="add" class="text-danger font-weight-bold"></span></td>
			</tr>

			<tr>
				<td>Dvision:</td>
				<td><select name="division" id="division" >
					<option value="0" selected>Please select an option</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select><span id="divi" class="text-danger font-weight-bold"></span>	
			</td>
		</tr>
				<tr>
			<td>District:</td>
				<td><select name="district" id="district" >
						<option value="0" selected>Please select an option</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select><span id="dist" class="text-danger font-weight-bold"></span>
		</td>
				</tr>

			<tr>
			<td>Upozila:</td>
				<td><select name="upozila" id="upozila" >
					<option value="0" selected>Please select an option</option>
					<option value="Donia">Donia</option>
					<option value="Dhanmondi">Dhanmondi</option>
					<option value="Sonir">Sonir</option>
				</select><span id="upo" class="text-danger font-weight-bold"></span>
			</td>
				</tr>


				<tr>
				<td>Language</td>
				<td><input type="checkbox" name="language" id="language" autocomplete="off">English
				<input type="checkbox" name="language" id="language" autocomplete="off">Bangla
				
				</td>

				</tr>

				<tr>
			<td>Exam:</td>
				<td><select name="exam" id="exam">
					<option value="BSC">BSC</option>
					<option value="HSC">HSC</option>
					<option value="SSC">SSC</option>

				</select>
				</span>

				University:<select name="versity" id="versity">
					<option value="BSC">DCC</option>
					<option value="HSC">UIU</option>
					<option value="SSC">MIST</option>
				</select>
				

				Board:<select name="board" id="board">
					<option value="BSC">Dhaka</option>
					<option value="HSC">comilla</option>
					<option value="SSC">CTG</option>
				</select>
				

				Result:<select name="result" id="result">
					<option value="BSC">4.00</option>
					<option value="HSC">3.00</option>
					<option value="SSC">2.00</option>
				</select>
			
				</td>
</tr>

			<tr>
				<td>Photo:</td>
				<td><input type="file" name="image" id="image" value="" width="23" height="23">
					<span id="pic" class="text-danger font-weight-bold"></span>
				</td>
			</tr>

			<tr>
				<td>Cv:</td>
				<td><input type="file" name="file" id="file">
					<span id="cv" class="text-danger font-weight-bold"></span>
				</td>
			</tr>

			<tr>
				<td>Training:</td>
				<td><input type="radio" name="training" id="training" value="y">Yes
				<input type="radio" name="training" id="training" value="n">No
				<span id="train" class="text-danger font-weight-bold"></span>
				
				
			</td>
			</tr>

			<tr>
				
				<td><input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">
				
			</td>
			</tr>

</table>
	</form>
</div>
</div>

<script type="text/javascript">
	
	function validation(){

		var username = document.getElementById('username').value;
		var email = document.getElementById('email').value;
		var address = document.getElementById('address').value;
		var division = document.getElementById('division').value;
		var district = document.getElementById('district').value;
		var upozila = document.getElementById('upozila').value;
		var language = document.getElementById('language').value;
		var exam = document.getElementById('exam').value;
		var versity = document.getElementById('versity').value;
		var board = document.getElementById('board').value;
		var result = document.getElementById('result').value;
		var image = document.getElementById('image').value;
		var file = document.getElementById('file').value;
		var training = document.getElementById('training').value;

		
	 // id name same 

		if (username =="") {

			document.getElementById('user').innerHTML =" **please fill the username field"; //id name different
			return false;
		}

		if (email =="") {

			document.getElementById('emailid').innerHTML =" **please fill the email field"; //id name different
			return false;
		}

		if (address =="") {

			document.getElementById('add').innerHTML =" **please fill the address field"; //id name different
			return false;
		}

		if (division =="") {

			document.getElementById('divi').innerHTML =" **please fill the division field"; //id name different
			return false;
		}


		if (result =="") {

			document.getElementById('resulty').innerHTML =" **please fill the result field"; //id name different
			return false;
		}

		if (image =="") {

			document.getElementById('pic').innerHTML =" **please fill the image field"; //id name different
			return false;
		}

		if ( file=="") {

			document.getElementById('cv').innerHTML =" **please fill the file field"; //id name different
			return false;
		}

		if (training =="") {

			document.getElementById('train').innerHTML =" **please fill the training field"; //id name different
			return false;
		}


	

	

	}


</script>

</body>
</html>