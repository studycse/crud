<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	var $data =  array();

    public function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->helper(array('url','form'));
        $this->load->helper('file');
        $this->load->library('upload');
        $this->load->model('Query_mod');
        $this->load->library('form_validation');
        $this->load->library('pagination');
       
    
        
    }

 //registration part--------------------------------------   

	public function index()
	{
		 
        
 //division -------------------------
         $division=$this->Query_mod->getDivision();
         $item=[];
         $item['division']=$division;

         $this->load->view('create',$item);
        
	}

	public function change(){
   // print_r($_FILES);
   // exit;
    // $this->form_validation->set_rules('username', 'NAME', 'required');
    // $this->form_validation->set_rules('email', 'EMAIL', 'required');
    // $this->form_validation->set_rules('address', 'ADDRESS', 'required');
    // $this->form_validation->set_rules('mobile', 'MOBILE', 'required');
    // $this->form_validation->set_rules('division', 'Division', 'required');
    // $this->form_validation->set_rules('district', 'District', 'required');
    // $this->form_validation->set_rules('upozila', 'Upozila', 'required');
    // $this->form_validation->set_rules('language', 'LANGUAGE', 'required');
  

    // // $this->form_validation->set_rules('image', 'PHOTO', 'required');
    // // $this->form_validation->set_rules('file', 'CV', 'required');
    // $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

    // if ($this->form_validation->run()==true)

    // {   
     // if($this->input->post('submit')){
                 
         $insert =$this->Query_mod->insert();

         // echo "succes
      //   echo json_encode( $insert);

          $arr =  array("status"=> "ok", "msg"=> "Data saved");  //insert query function running...

          echo json_encode($arr);
          // redirect(base_url().'welcome/list'); 
      // }   
 //    }
 // else
 //    {
             
 //        $this->index();                
      
 //    }

}           

 
///list page---------------------------------------

	public function list()
	{	

	// $this->load->model('Query_mod');
  //   $this->load->library('pagination');
        $config['base_url'] = base_url().'welcome/list';        
        $config['total_rows'] = $this->Query_mod->get_num_rows();        
        $config['per_page'] = 5;        
        $config['uri_segment'] = 3; 

        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';        
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';        
        $config['first_tag_open'] = '<li>';        
        $config['first_tag_close'] = '</li>';        
        $config['prev_link'] = '&laquo';        
        $config['prev_tag_open'] = '<li class="prev">';        
        $config['prev_tag_close'] = '</li>';        
        $config['next_link'] = '&raquo';        
        $config['next_tag_open'] = '<li>';        
        $config['next_tag_close'] = '</li>';        
        $config['last_tag_open'] = '<li>';        
        $config['last_tag_close'] = '</li>';        
        $config['cur_tag_open'] = '<li class="active"><a href="#">';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li>';        
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config);

		    $post= $this->Query_mod->getPosts($config['per_page'],$this->uri->segment(3));
		    $this->load->view('list',['post'=>$post]);
         

	}



 //district id=division id-------------------
   public function getDistrict(){
   if($this->input->post('id')){

   echo $this->Query_mod->getDistrict($this->input->post('id'));

       }
   }

   //upozila districtId= district id------------------
  public function getUpozila(){
   if($this->input->post('districtId')){

   echo $this->Query_mod->getUpozila($this->input->post('districtId'));

     }
   }


 ///detail table-------------------------- 
   public function detail($id){
   
    $this->data['post']= $this->Query_mod->getDetailPosts($id);
    $this->data['trn']= $this->Query_mod->getDetailTraning($id);
    
     $this->load->view('detail',$this->data);
   // $this->load->view('detail',['post'=>$post]);
   
   }

///delete ---------------------------------------
   public function delete($id){
   if( $this->Query_mod->DeletePosts($id)){
     redirect(base_url().'welcome/list');
   }else{
    echo "not deleted";
   }
   }

   // ajax_update 

   public function ajax_update()
   {
    $a = $this->input->post('id',TRUE);
    echo $a;
   }


   ///update  getting value table----------------- 
   public function update($id){

   

    //division 
     $division=$this->Query_mod->getDivision();
     $item=[];
     $item['division']=$division;
    
    $post= $this->Query_mod->getSinglePosts($id);

    $this->load->view('update',['post'=>$post,'division'=>$division, 'hidden_id' => $id]);
    }
        
      public function modifyUpdate(){

 
          // if($this->input->post('update')) 
          // {
         $id=$this->input->post('id');

          $update =$this->Query_mod->updatePost($id); //insert query function running...
        // redirect(base_url().'welcome/list');
          $arr =  array("status"=> "ok", "msg"=> "Data updated");  //insert query function running...

          echo json_encode($arr);

          // }


   }

  //search---------------
 public function search()
 {

  $output = '';
  $query = '';
 
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Query_mod->search_data($query);

  // $t_datab =  $this->load->view('ajax_list',$this->data, true);
  $output .= '
  <div class="table-responsive">
     <table class="table table-striped table-hover text-center  ">
      <tr class="text-white bg-dark" >
      <th>ID</th>
       <th>Username</th>
       <th>Email</th>
       <th>Division</th>
       <th>District</th>
       <th>Upozila</th>
       <th>Update</th>
       <th>Detail</th>
       <th>Delete</th>
      

      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->id.'</td>
       <td>'.$row->username.'</td>
       <td>'.$row->email.'</td>
       <td>'.$row->division_name.'</td>
       <td>'.$row->district_name.'</td>
       <td>'.$row->upozila_name.'</td>
   
      <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-primary btn-xs update" >Update</button></td>
      <td><button type="button" name="detail" id="'.$row->id.'" class="btn btn-success btn-xs" >Detail</button></td>
      <td><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs" >Delete</button></td>
       
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }


}

?>

