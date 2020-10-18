<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->database();
         $this->load->helper(array('url','form'));
          $this->load->library('upload');
        $this->load->model('Query_mod');
    }

public function create(){

                       //division
                       
                       $division=$this->Query_mod->getDivision();
                       $item=[];
                       $item['division']=$division;
                      $this->load->view('create',$item); 

 if($this->input->post()) {



                 $data=array(
                      'username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'address'=>$this->input->post('address'),
                      'mobile'=>$this->input->post('mobile'),
                      'division'=>$this->input->post('division'),
                      'district'=>$this->input->post('district'),
                      'upozila'=>$this->input->post('upozila'),
                      'language'=>$this->input->post('language'),
                      'sscversity'=>$this->input->post('sscversity'),
                      'sscboard'=>$this->input->post('sscboard'),
                      'sscresult' =>$this->input->post('sscresult'),
                      'hscversity' =>$this->input->post('hscversity'),
                      'hscboard'=>$this->input->post('hscboard'),
                      'hscresult' =>$this->input->post('hscresult'),
                      'gdversity' =>$this->input->post('gdversity'),
                      'gdboard' =>$this->input->post('gdboard'),
                      'gdresult' =>$this->input->post('gdresult'),
                      'msversity' =>$this->input->post('msversity'),
                      'msboard' =>$this->input->post('msboard'),
                      'msresult' =>$this->input->post('msresult')
                      // $data['image']=$this->input->post('image');
                      // $data['file']=$this->input->post('file');
                    );


                      $this->load->model('Query_mod');
                      $this->Query_mod->insert($data);
                

             redirect(base_url().'index.php/register/list');

}


}


 
///list page-------------------------

	public function list()
	{	
		$this->load->model('Query_mod');
		$post= $this->Query_mod->getPosts();
		$this->load->view('list',['post'=>$post]);


	}

 //district id=division id
   public function getDistrict(){
   if($this->input->post('id')){

   echo $this->Query_mod->getDistrict($this->input->post('id'));

       }
   }

   //upozila districtId= district id
  public function getUpozila(){
   if($this->input->post('districtId')){

   echo $this->Query_mod->getUpozila($this->input->post('districtId'));

     }
   }


}
?>