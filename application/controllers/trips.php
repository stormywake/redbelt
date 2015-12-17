<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trips extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('is_logged_in') == FALSE)
			{
				redirect(base_url('sessions/new'));
			}
			
		redirect('trips');
	}
	public function create()
	{
		//get post data
		$trip_info = $this->input->post();
		//load model
		$this->load->model('Trip');

		//get users id from userdata
		$author_id= $this->session->userdata('id');
		

		//add Trip to database
		$this->Trip->create($trip_info, $author_id);

		// trip was added succcesfully 
		//redirect to home / dashboard
		redirect(base_url('/home'));	

	}
	public function show_all_user_trips()
	{
		$this->load->model('Trip');
		$author_id= $this->session->userdata('id');

		$trips = $this->Trip->show_all_user_trips($author_id);
		$this->load->view("home", array("trips" => $trips));
		
	}
	public function show_all_others_trips($user_id)
	{	
		$this->load->model('Trip');
		$author_id= $this->session->userdata('id');

		$others_trips = $this->Trip->show_all_others_trips($author_id);
		$this->load->view("home", array("trips" => $trips));

	}
	public function show_trip_info($id)
	{
		$this->load->model('Trip');
		$trip_info = $this->Trip->get_trip_by_id($id);

		$this->load->view('/trips/trip',array('trip_info'=>$trip_info,'id'=>$id));
	}



}

