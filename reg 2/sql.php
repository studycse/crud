<?php
include 'dbcon.php';

?>


<?php

$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$division=$_POST['division'];
$district=$_POST['district'];
$upozila=$_POST['upozila'];
$language=$_POST['language'];
$sscversity=$_POST['sscversity'];
$sscboard=$_POST['sscboard'];
$sscresult=$_POST['sscresult'];
$hscversity=$_POST['hscversity'];
$hscboard=$_POST['hscboard'];
$hscresult=$_POST['hscresult'];
$gdversity=$_POST['gdversity'];
$gdboard=$_POST['gdboard'];
$gdresult=$_POST['gdresult'];
$msversity=$_POST['msversity'];
$msboard=$_POST['msboard'];
$msresult=$_POST['msresult'];
$file=$_FILES['file']['name'];
$image=$_FILES['image']['name'];



if (isset($_POST['submit'])) {
	
	



if($_POST['username'] == ""){
	$error_msg['username']= " ** Name is required";
}
//only letter support korbe
$name =$_POST['username'];
if (!preg_match("/^[a-zA-Z -]*$/", $name)) {
	$error_msg['username']= " ** Only letters allowed";
}

//email
$email =$_POST['email'];
if(empty($_POST['email'])){
	$error_msg['email']= " ** Email is required";
}

//email valid

else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
	$error_msg['email']= " ** invalid email";
}


//address
$address=$_POST['address'];
if (empty($address)) {
	$error_msg['address']= " ** Address is required";
}

//mobile
$mobile=$_POST['mobile'];
if (empty($mobile)) {
	$error_msg['mobile']= " ** Mobile number is required";
}
//only number allowed
else if(!is_numeric($mobile)){
$error_msg['mobile']= " ** only numeric value is required";
}
//only 11 value
else if ((strlen($mobile) !=10)) {
	$error_msg['mobile']= " ** Maximum 12 digit number";
}


//division

$division =$_POST['division'];
if ($division =="0") {
	$error_msg['division']= " ** division is required";
}

//district
$district =$_POST['district'];
if ($district =="0") {
	$error_msg['district']= " ** district is required";
}

//upozila
$district =$_POST['upozila'];
if ($district =="0") {
	$error_msg['upozila']= " ** upozila is required";
}

//check box
if(empty($_POST['language'])){
	$error_msg['language']= " ** language is required";
}

//image
if($_FILES['image']['name']){
	
	move_uploaded_file($_FILES['image']['tmp_name'],"upload/$image" ); //ak image bar bar uplaod hobe na

}

//File

if($_FILES['file']['name']){
	
	move_uploaded_file($_FILES['file']['tmp_name'],"file/$file" ); //ak image bar bar uplaod hobe na

}



 // exit();

$sql = "INSERT INTO registertable2 (username, email,address,mobile,division,district,upozila,language,sscversity,sscboard,sscresult,hscversity,hscboard,hscresult,gdversity,gdboard,gdresult,msversity,msboard,msresult,image,file) VALUES ('$username','$email','$address','$mobile','$division','$district','$upozila','$language','$sscversity','$sscboard','$sscresult','$hscversity','$hscboard','$hscresult','$gdversity','$gdboard','$gdresult','$msversity','$msboard','$msresult','$image','$file')";


  	
	// Run SQL query
  	$query=mysqli_query($connect, $sql) or die(mysql_error($connect));

  	 if (mysqli_query($connect, $sql))
  	  {
  $last_id = mysqli_insert_id($connect);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}




 $training_name= $_POST['training_name'] ;
 $organization = $_POST['organization'] ;
 $details = $_POST['details'];


 $items = array();

 $size = count($training_name);

 for($i = 0 ; $i < $size ; $i++){
   $items[$i] = array(
   	 "ref_master_id" =>  $last_id ,
      "training_name"     => $training_name[$i], 
      "organization"    => $organization[$i], 
      "details"       => $details[$i]
   );
 }

$values = array();
foreach($items as $item){
	print_r($item) ;
  $values[] = "('{$item['ref_master_id']}','{$item['training_name']}', '{$item['organization']}', '{$item['details']}')";

  $a=$item['ref_master_id'];
  $b=$item['training_name'];
  $c=$item['organization'];
  $d=$item['details'];

  echo  $insert="INSERT INTO training (ref_master_id,training_name,organization,details) VALUES ('$a','$b','$c','$d')";

  $query= mysqli_query($connect, $insert) or die(mysql_error($connect));



}



//print_r($values);



}

 


?>
