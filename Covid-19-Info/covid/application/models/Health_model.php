<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Health_model extends CI_Model
{
	/*function user_data()
	{
		  $fullname= $this->input->post('fullname');  
		  $email= $this->input->post('email');  
		  $pnone_no= $this->input->post('pnone_no');
		  $optionsRadios= $this->input->post('optionsRadios');  
		  $address= $this->input->post('address');  
		  $state= $this->input->post('state');
		  $country= $this->input->post('country');

		  $query = $this->db->get('user_details');


	}*/


	function user_data()
	{
		
			$data = array(
				'full_name' => $this->input->post('fullname'),
				'email_address'	=> $this->input->post('email'),
				'phone_no'=> $this->input->post('pnone_no'),
				'gender'=>$this->input->post('optionsRadios'),
				'address'=>$this->input->post('address'),
				'state'=>$this->input->post('state'),
				'country'=>$this->input->post('country')
		
          	 );	
			$this->db->insert('user_details',$data);
		}


}
