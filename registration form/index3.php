<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
<body>
	<div class="mainform">
		<div class="tittle">
			Registration Form
			</div>

			<div class="form">
				<div class="input-field">
					<label>Frist Name</label>
					<input type="text" name="usernamr" class="input">
					
				</div>

				<div class="input-field">
					<label>Email</label>
					<input type="text" name="usernamr" class="input">
					
				</div>

				<div class="input-field">
					<label>Address</label>
					<input type="text" name="usernamr" class="input">
					
				</div>

				<div class="input-field">
					<label>Dvision</label>
					<div class="division-select">
						<select name="division" id="division" >
					<option value="0" selected>Please select an option</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select>
				</div>
					
				</div>

				<div class="input-field">
					<label>District</label>
					<div class="division-select">
						<select name="division" id="division" >
					<option value="0" selected>Please select an option</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select>
				</div>
					
				</div>

				<div class="input-field">
					<label>Upozila</label>
					<div class="division-select">
					<select name="division" id="division" >
					<option value="0" selected>Please select an option</option>
					<option value="Dhaka">Dhaka</option>
					<option value="Comilla">Comilla</option>
					<option value="Barishal">Barishal</option>
				</select>
				</div>
					
				</div>

				<div class="input-field">
					<label>Language</label>
					<input type="checkbox" name="language" id="language" autocomplete="off">English
				<input type="checkbox" name="language" id="language" autocomplete="off">Bangla
					
				</div>

				<div class="input-field">
					<label>Exam</label>
					<div class="division-select">
					<select name="exam" id="exam">
					<option value="BSC">BSC</option>
					<option value="HSC">HSC</option>
					<option value="SSC">SSC</option>

				</select>
				</div>

					<label>university</label>
					<div class="division-select">
					<select name="versity" id="versity">
					<option value="BSC">DCC</option>
					<option value="HSC">UIU</option>
					<option value="SSC">MIST</option>
				</select>
				</div>

				<label>Board</label>
					<div class="division-select">
					<select name="board" id="board">
					<option value="BSC">Dhaka</option>
					<option value="HSC">comilla</option>
					<option value="SSC">CTG</option>
				</select>
				</div>

				<label>Result</label>
					<div class="division-select">
					<select name="board" id="board">
					<option value="BSC">Dhaka</option>
					<option value="HSC">comilla</option>
					<option value="SSC">CTG</option>
				</select>
				</div>
					
				</div>

				<div class="input-field">
					<label>Photo</label>
					<input type="file" name="image" id="image" value="" width="23" height="23">
					
				</div>

				<div class="input-field">
					<label>Cv</label>
					<input type="file" name="file" id="file">
					
			</div>

				<div class="input-field">
					<label>Training</label>
					<input type="radio" name="training" id="training" value="y">Yes
				<input type="radio" name="training" id="training" value="n">No
					
				</div>



				

				
			</div>
		
	</div>

</body>
</html>