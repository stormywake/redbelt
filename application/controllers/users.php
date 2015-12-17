<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('users/new');
	}
	//load register page
	public function new_user()
	{
	
		$this->load->view('Users/new_user');
	}

	//get post data and send to model to add to database
	public function create_user()
	{
		// load User model
		$this->load->model('User');

		//load validation library
		$this->load->library("form_validation");

		//load post data into validation function and get true or false
		$validation_results = $this->User->validate_post($this->input->post());


		//if query is TRUE redirect to Login page
		if($validation_results==TRUE)
		{
			$this->session->set_flashdata('success',"New user profile created succesfuly!");
			$this->User->create_user($this->input->post());
			redirect(base_url('/'));
		}
		else
		{	
			// set validation errors
			$this->session->set_flashdata('errors',validation_errors());

			//redirect to register page and sow errors
			redirect(base_url('/users/new'));
		}
	}

}

