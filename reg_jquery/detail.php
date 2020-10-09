<?php
	include 'dbcon.php';
	


	if (isset($_GET['id'])){

// print_r($_POST);
// 	exit();

$id=$_GET['id'];


	$detail="select registertable3.*,division_tab.division_name,district_tab.district_name,upozila_tab.upozila_name from registertable3 
    left join division_tab on division_tab.id=registertable3.division 
      left join district_tab on district_tab.id=registertable3.district 
      left join upozila_tab on upozila_tab.id=registertable3.upozila 
      WHERE registertable3.id=$id";

	$train="SELECT * FROM training2 where ref_master_id=$id ";

	$result = mysqli_query($connect,$detail);
	$traini = mysqli_query($connect,$train);



	 // print_r($res = mysqli_fetch_assoc($train));
	// exit();

	


	if($res = mysqli_num_rows($result) > 0){
		while($res = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$res['id'];
		echo '<br> name						: '.$res['username'];
		echo '<br> email					: '.$res['email'];
		echo '<br> address					: '.$res['address'];
		echo '<br> mobile					: '.$res['mobile'];
	 	echo '<br> Division					: '.$res['division_name'];
		echo '<br> district					: '.$res['district_name'];
		echo '<br> upozila					: '.$res['upozila_name'];
		echo '<br> language					: '.$res['language'];
		echo '<br> sscversity				: '.$res['sscversity'];
		echo '<br> sscboard					: '.$res['sscboard'];
		echo '<br> sscresult				: '.$res['sscresult'];
		echo '<br> hscversity				: '.$res['hscversity'];
		echo '<br> hscboard					: '.$res['hscboard'];
		echo '<br> hscresult				: '.$res['hscresult'];
		echo '<br> gdversity				: '.$res['gdversity'];
		echo '<br> gdboard					: '.$res['gdboard'];
		echo '<br> gdresult					: '.$res['gdresult'];
		echo '<br> msversity				: '.$res['msversity'];
		echo '<br> msboard					: '.$res['msboard'];
		echo '<br> msresult					: '.$res['msresult'];
		  

		
		
	}

	if($res = mysqli_num_rows($traini) > 0){
			while($res = mysqli_fetch_assoc($traini)){
			echo '<br> training_name		: '.$res['training_name'];
		    echo '<br> organization			: '.$res['organization'];
		    echo '<br> details				: '.$res['details'];
			}
				}



}else{
echo '<h2> No Result</h2>';


}
	

	}


?>