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
	
	<form action="display.php"  method="post">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="username" ></td>
			</tr>

			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td>Address:</td>
				<td><input type="text" name="address"></td>
			</tr>

			
				<td>Dvision:</td>
				<td><select name="division">
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select>
			</td>
				<tr>
			<td>District:</td>
				<td><select name="district">
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select></td>
				</tr>

			<tr>
			<td>Upozila:</td>
				<td><select name="upozila">
					<option value="Donia">Donia</option>
					<option value="Dhanmondi">Dhanmondi</option>
					<option value="Sonir">Sonir</option>
				</select></td>
				</tr>


				<tr>
				<td>Language</td>
				<td><input type="checkbox" name="language">English
				<input type="checkbox" name="language">Bangla
					
				</td>

				<tr>
			<td>Exam:</td>
				<td><select name="exam">
					<option value="BSC">BSC</option>
					<option value="HSC">HSC</option>
					<option value="SSC">SSC</option>
				</select>

				University:<select name="versity">
					<option value="DCC">DCC</option>
					<option value="UIU">UIU</option>
					<option value="MIST">MIST</option>
				</select>

				Board:<select name="board">
					<option value="Dhaka">Dhaka</option>
					<option value="comilla">comilla</option>
					<option value="Ctg">CTG</option>
				</select>

				Result:<select name="result">
					<option value="BSC">4.00</option>
					<option value="HSC">3.00</option>
					<option value="SSC">2.00</option>
				</select>

				</td>
</tr>

			<tr>
				<td>Photo:</td>
				<td><input type="file" name="image" value="" width="23" height="23"></td>
			</tr>

			<tr>
				<td>Cv:</td>
				<td><input type="file" name="file"></td>
			</tr>

			<tr>
				<td>Training:</td>
				<td><input type="radio" name="training" value="y">Yes
				<input type="radio" name="training" value="n">No
			</td>
			</tr>

			<tr>
				
				<td><input type="submit" name="submit" value="submit" class="btn btn-success">
				
			</td>
			</tr>






			
		</table>
	</form>

</body>
</html>