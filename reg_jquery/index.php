<?php
 include 'dbcon.php';
 // include 'sql.php';

 // define variables to empty values 
 $username = $email = $address = $mobile = $division = $district = $upozila = $language = $image = $file = ""; 
$nameErr = $emailErr = $addErr = $mobileErr = $diviErr = $disErr = $upoErr =$languageErr =$imageErr =$fileErr = "";  
  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["username"])) {  
         $nameErr = "Name is required";  
    } else {  
        $username = input_data($_POST["username"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$username)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     } 


  //Empty Field Validation  
    if (empty ($_POST["address"])) {  
            $addErr = "address is required";  
    } else {  
            $address = input_data($_POST["address"]);  
    } 

    
    //Number Validation  
    if (empty($_POST["mobile"])) {  
            $mobileErr = "Mobile no is required";  
    } else {  
            $mobile = input_data($_POST["mobile"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobile) ) {  
            $mobileErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobile) != 10) {  
            $mobileErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
  
      
     //Empty division Validation  
    if (empty ($_POST["division"])) {  
            $diviErr = "Gender is required";  
    } else {  
            $division = input_data($_POST["division"]);  
    } 

      //Empty district Validation  
    if (empty ($_POST["district"])) {  
            $disErr = "Gender is required";  
    } else {  
            $district = input_data($_POST["district"]);  
    } 

      //Empty upozila Validation  
    if (empty ($_POST["upozila"])) {  
            $upoErr = "Gender is required";  
    } else {  
            $upozila = input_data($_POST["upozila"]);  
    } 
  
    //language Validation  
    if (!isset($_POST['language'])){  
            $languageErr = "language is required.";  
    } else {  
            $language = input_data($_POST["language"]);  
    }

     //image Validation  
    if (empty($_FILES['image_1']['name'])){  
            $imageErr = "Accept terms of services before submit.";  
    } else {  
            $image = input_data($_FILES['image_1']['name']);  
    } 

     //file Validation  
    if (empty($_FILES['file_1']['name'])){  
            $fileErr = "Accept terms of services before submit.";  
    } else {  
            $file = input_data($_FILES['file_1']['name']);  
    }   
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data; 


}

if(empty($nameErr) && empty($emailErr) && empty($addErr)  && empty($mobileErr) && empty($diviErr) && empty($disErr) && empty($upoErr) && empty($languageErr) && empty($imageErr) && empty($fileErr)){

if (isset($_POST['submit'])) {

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
$image=$_FILES['image_1']['name'];
$file=$_FILES['file_1']['name'];
	



$last_id = mysqli_insert_id($connect);
$target_dir = "upload/".$last_id."/";
$target_file = $target_dir . basename($_FILES['image_1']['name']);
$file_target = $target_dir . basename($_FILES['file_1']['name']);




  //exit();

$sql = "INSERT INTO registertable3 (username, email,address,mobile,division,district,upozila,language,sscversity,sscboard,sscresult,hscversity,hscboard,hscresult,gdversity,gdboard,gdresult,msversity,msboard,msresult,image,file) VALUES ('$username','$email','$address','$mobile','$division','$district','$upozila','$language','$sscversity','$sscboard','$sscresult','$hscversity','$hscboard','$hscresult','$gdversity','$gdboard','$gdresult','$msversity','$msboard','$msresult','$target_file','$file_target')";

  	
	/// Run SQL query

 $query=mysqli_query($connect, $sql) or die(mysql_error($connect));


if (mysqli_query($connect, $sql))
  {
$last_id = mysqli_insert_id($connect);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}


//image

$image=$_FILES['image_1']['name'];
$imageTmpName=$_FILES['image_1']['tmp_name'];

if(!empty($_FILES['image_1']['tmp_name'])){
$target_dir = "upload/".$last_id."/";
$target_file = $target_dir . basename($_FILES['image_1']['name']);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (!file_exists($target_dir)) 
    {
      mkdir($target_dir, 0777);
    }

 if (move_uploaded_file($_FILES['image_1']['tmp_name'], $target_file)) {
  echo "pic has been uploaded";
 
   } else {
  echo "Sorry, there was an error uploading your file.";
    
                  }
       
 }

//file----
$file=$_FILES['file_1']['name'];
$fileTmpName=$_FILES['file_1']['tmp_name'];
if(!empty($_FILES['file_1']['tmp_name'])){
$target_dir = "upload/".$last_id."/";
$file_target = $target_dir . basename($_FILES['file_1']['name']);

 if (move_uploaded_file($_FILES['file_1']['tmp_name'], $file_target)) {
  echo "file has been uploaded";
 
   } else {
  echo "Sorry, there was an error uploading your file.";
    
                  }
       
 }



//training
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

  echo  $insert="INSERT INTO training2 (ref_master_id,training_name,organization,details) VALUES ('$a','$b','$c','$d')";

  $query= mysqli_query($connect, $insert) or die(mysql_error($connect));



}


//print_r($values);
 if($query==TRUE){
header('location:page.php');
}else{
echo "Error:" .$query ."<br>" .$connect->error;;

	}


}else {  
        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
    }


      }    

?>
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



<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">


</head>
<body>





	<h3> REGISTRATION FORM</h3>


<div class="regform">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registration"  enctype="multipart/form-data">


 
<table class="table1" align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td for="username"> NAME</td>
<td><input type="text" name="username" id="username" />

<span class="error">* <?php echo $nameErr; ?> </span>  		
</td>
</tr>
 

 <!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" id="email" />
	
<span class="error">* <?php echo $emailErr; ?> </span>  	
</td>
</tr>


<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address" rows="4" cols="30"></textarea>
	
<span class="error">* <?php echo $addErr; ?> </span>	
</td>
</tr>


<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" id="mobile"  />

<span class="error">* <?php echo $mobileErr; ?> </span>  
</td>
</tr>

 

<!----- Division -------------------------------------------------------->
<tr>
<td>Dvision:</td>
<td><select name="division" id="division" >
<option value="" selected> select an option</option>

<?php
include 'dbcon.php';

$q= "SELECT * FROM division_tab ";
$result=mysqli_query($connect,$q) ;
while ($row= mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['division_name'];?></option>
<?php
}

?>

</select>
<span class="error">* <?php echo $diviErr; ?> </span>
	
</td>
</tr>

<!----- District -------------------------------------------------------->
<tr>
<td>District:</td>
<td><select name="district" id="district"  >
<option value="" selected> select an option</option>
</select>

<span class="error">* <?php echo $disErr; ?> </span>
</td>
</tr>
 
<!----- Upozila -------------------------------------------------------->
<tr>
<td>Upozila:</td>
<td><select name="upozila" id="upozila"  >
<option value="" selected> select an option</option>
</select>

<span class="error">* <?php echo $upoErr; ?> </span>
</td>
</tr>

 

 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>LANGUAGE </td>
 
<td class="language">
English
<input type="checkbox" name="language" id="language"> <?php if(isset($language) && $language='y') echo 'checked="checked"'; ?>  
Bangla
<input type="checkbox" name="language" id="language"> <?php if(isset($language) && $language='y') echo 'checked="checked"'; ?> 
    <span class="error">* <?php echo $languageErr; ?> </span>  
	
</td>
</tr>
 

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br/></td>
 
<td>

<table class="table1">
 
<tr>

<td align="center"><b>Examination</b></td>
<td align="center"><b>University</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Result</b></td>
</tr>
 
<tr>

<td align="center">SSC</td>
<td><select name="sscversity" id="sscversity" required >
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="sscboard" id="sscboard" required >
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="sscresult" id="sscresult" required >
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">HSC</td>
<td><select name="hscversity" id="hscversity" required="required">
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="hscboard" id="hscboard" required="required" >
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="hscresult" id="hscresult" required ="required">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Graduation</td>
<td><select name="gdversity" id="gdversity" required="required">
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="gdboard" id="gdboard" required="required">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="gdresult" id="gdresult" required="required">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Masters</td>
<td><select name="msversity" id="msversity" required="required">
<option value="0" selected> select an option</option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="msboard" id="msboard" required="">
<option value="0" selected> select an option</option>
<option value="Dhaka">Dhaka</option>
<option value="Comilla">Comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="msresult" id="msresult" required="required">
<option value="0" selected> select an option</option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 

</table>
 
</td>
</tr>
 
<!----- IMAGE ---------------------------------------------------------->

<tr>
<td>PHOTO:</td>
<td><input type="file" name="image_1" id="image" value="" width="23" height="23"></td>
<span class="error">* <?php echo $imageErr; ?> </span>
</tr>


<!----- Cv ---------------------------------------------------------->
<tr>
<td>CV:</td>
<td><input type="file" name="file_1" id="file"></td>
<span class="error">* <?php echo $fileErr; ?> </span>
</tr>

 
<!----- Training ---------------------------------------------------------->
<tr>
<td>TRAINING <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table class="table1" id="traing_field">
 
<tr>

<td align="center"><b>Training Name</b></td>
<td align="center"><b>Organization</b></td>
<td align="center"><b>Details</b></td>
</tr>
 
<tr>

<td><input  type="text" name="training_name[]" id="training_name" /></td>
<td><input  type="text" name="organization[]" id="organization" /></td>
<td><input  type="text" name="details[]" id="details" /></td>
<td><input class="btn-success btn" type="button" name="add" id="add" value="Add" /></td>
</tr>

 
</table>
 
</td>
</tr>
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<button type="submit" name="submit" class="btn btn-primary">submit</button>

</td>
</tr>
</table>
 
</form>


</div>


<script type="text/javascript">

$(document).ready(function(){



 var html ='<tr><td><input type="text" name="training_name[]" required="" ></td><td><input  type="text" name="organization[]" required=""></td><td><input  type="text" name="details[]" required="" /></td><td><input class="btn-danger btn" type="button" name="remove" id="remove" value="remove" /></td></tr>';	

 var x=1;

 $("#add").click(function(){
	$('#traing_field').append(html);
});

 $("#traing_field").on('click','#remove', function(){
 	$(this).closest('tr').remove();

 });

///  division
$("#division").on('change',function(){

var divisionId=$(this).val();
$.ajax({
	url:"ajax.php",
	method:"POST",
	data:{id:divisionId},
	dataType:"html",
	success:function(data){
		$("#district").html(data);
	}

});

});

///  upozila
$("#district").on('change',function(){

var districtId=$(this).val();
$.ajax({
	url:"ajax.php",
	method:"POST",
	data:{districtId:districtId},
	dataType:"html",
	success:function(data){
		$("#upozila").html(data);
	}

});

});







});


</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

<!-- <script src="register.js"></script> -->

</body>
</html>