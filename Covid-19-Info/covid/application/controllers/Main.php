<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
 {
		function __construct()
	   {
        parent::__construct();
        $this->load->model('Health_model','hm');
        $this->load->model('Contact_model','Con_model');
 
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function To_do_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('To_do_view');
		$this->load->view('footer');
	}

	public function Health_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		//$this->load->view('Health_view');
		$this->hm->user_data();
		$this->load->view('Health_view');
		//echo  $this->db->last_query();
		$this->load->view('footer');
	}

	public function Health_controller_view()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('Health_view');
		$this->load->view('footer');
	}


	public function Corana_test_view_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('Corona_test_view');
		$this->load->view('footer');
	}

	public function View_BasicDetails_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		
		$data['users']=$this->hm->user_data();
		$this->load->view('View_BasicDetail',$data);
		$this->load->view('footer');
	}



	public function Faq_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('Faq_view');
		$this->load->view('footer');
	}


	public function About_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('About_view');
		$this->load->view('footer');
	}

	public function india_update_controller()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('India_covid_updates');
		$this->load->view('footer');
	}


//---------Main Page or Front Page of website  controllers-----------------//
	public function  Main_page_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/Main_body');
		$this->load->view('Main_page_folder/Main_footer');
	
	}
	public function  Home_about_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/More_about_us');
		$this->load->view('Main_page_folder/Main_footer');
	
	}
	public function  about_symptoms_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/More_about_symptoms');
		$this->load->view('Main_page_folder/Main_footer');
	
	}

	public function  Take_action_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/Take_action');
		$this->load->view('Main_page_folder/Main_footer');
	
	}
	public function  News_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/News_page');
		$this->load->view('Main_page_folder/Main_footer');
	
	}

	public function  Contact_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->load->view('Main_page_folder/Contact_page');
		$this->load->view('Main_page_folder/Main_footer');
	
	}

		public function Contact_save_controller()
	{
		$this->load->view('Main_page_folder/Header');
		$this->Con_model->contact_data();
		$this->load->view('Main_page_folder/Contact_page');
		//echo  $this->db->last_query();
		$this->load->view('Main_page_folder/Main_footer');
	}




}

   