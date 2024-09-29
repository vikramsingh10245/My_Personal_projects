<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Contact_model extends CI_Model
{

	function contact_data()
	{
		
			$data = array(
				'full_name' => $this->input->post('F_Name'),
				'phone_no'	=> $this->input->post('Phone_Number'),
				'email'=> $this->input->post('Email'),
				'message'=>$this->input->post('Message')
			
		
          	 );	
			$this->db->insert('contact_us',$data);
		}


}
