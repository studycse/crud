<?php

$conn= mysqli_connect('localhost','root',"",'crudoperation');


extract($_POST);

if (isset($_POST['readrecord'])) {


	$data = '<table class="table table-bordered table-striped" >

	<tr>
	<th>No.</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email id</th>
	<th>Mobile Number</th>
	<th>Edit Action</th>
	<th>Delete Action</th>


	</tr>';

	$displayquery ="SELECT * FROM 'crudtable'";
	$result= mysqli_query($conn,$displayquery);

	if (mysqli_num_rows($result)>0) {

		$number=1;
		while ($rows=mysqli_fatch_array($result)) {
			
			$data.='<tr>
			<td>'.$number.'</td>
			<td>'.$row['firstname'].'</td>
			<td>'.$row['lastname'].'</td>
			<td>'.$row['emailid'].'</td>
			<td>'.$row['mobilenumber'].'</td>
			<td>
			<button onclick="GetUserDetails('.$row['id'].')"
			class="btn sbtn-warning">Edit</button>
			</td>
			<td><button onclick="DeleteUser('.$row['id'].')"
			class="btn btn-warning">Delete</button></td>

			</tr>';
			$number++;
		}
	}
	$data.='</table>';
	echo $data;
}

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['emailid']) && isset($_POST['mobilenumber']))
 {
	$query="INSERT INTO `crudtable`( `firstname`, `lastname`, `emailid`, `mobilenumber`) VALUES ('$firstname','$lastname','$emailid','$mobilenumber') ";
}
	mysqli_query($conn,$query);


 if (isset($_POST['deleteid'])) {
 	
 	$userid=$_POST['deleteid'];
 	$deletequery= "Delete from crudtable where id='$userid' ";
 	mysqli_query($conn,$deletequery);
 }

?>