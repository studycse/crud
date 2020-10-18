<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query_mod extends CI_Controller {

//this function will save a record in database
public function insert($data)
	{
	 $this->db->insert('registertable3',$data);
	 $last_id = $this->db->insert_id();
	 return $last_id;

///training part----------------------------------
	  $training_name =$this->input->post('training_name');
      $organization =$this->input->post('organization');
      $details=$this->input->post('details');

      $items = array();
	  $size = count($training_name);	
     for($i = 0 ; $i < $size ; $i++){
  	 $items[$i] = array(

		   	 "ref_master_id" =>  $last_id ,
		      "training_name" => $training_name[$i], 
		      "organization" => $organization[$i], 
		      "details"=> $details[$i]
   ); 	 
 }
		$values = array();
		foreach($items as $item){
			$values=array(
			"ref_master_id" =>$last_id  ,
		      "training_name" => $item['training_name'], 
		      "organization" => $item['organization'], 
		      "details"=> $item['details']
			);
			

			 $this->db->insert('training2',$values);
			
}
	////----------------------------------------- 
	}


	


///List fetching table page-----------------
	public function getPosts()
	{
		$query = $this->db->get('registertable3');
		if($query->num_rows() >0){
			return $query->result();
		} 
	}


///List fetching table division_tab-----------------
public function getDivision(){
	$division=$this->db->get('division_tab')->result_array();
	return $division;
}

///List fetching table district_tab-----------------
public function getDistrict($divisionId){

	$this->db->where('divi_id',$divisionId);
	$district=$this->db->get('district_tab');
	$output='<option value="">Select an option</option>';
    
    foreach ($district->result() as $dis) {
    	$output.='<option value="'.$dis->id.'">'.$dis->district_name.'</option>';
    }
    return $output;
}

///List fetching table district_tab-----------------
public function getUpozila($divisionId){

	$this->db->where('dis_id',$divisionId);
	$upozila=$this->db->get('upozila_tab');
	$output='<option value="">Select an option</option>';
    
    foreach ($upozila->result() as $upo) {
    	$output.='<option value="'.$upo->id.'">'.$upo->upozila_name.'</option>';
    }
    return $output;
}





}







?>