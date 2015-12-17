<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('is_logged_in') == FALSE)
			{
				redirect(base_url('sessions/new'));
			}
			
		$this->load->view('/reviews/new');
	}
	public function create()
	{
		//get post data
		$review = $this->input->post();
		//load model
		$this->load->model('Review');
		$this->load->model('Book');

		$book_id = $this->Book->check_book($review);
		//check if book already exists
		if(empty($book_id))
		{
			//add book to database
			$this->Book->create($review);
			$book_id = $this->Book->get_most_recent_book();
		}
		
		$this->Review->create($book_id,$this->input->post(),$this->session->userdata('id'));
		

		//insert review into database

	}

}

