<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

	public function index()
	{
		$this->load->view('/sessions/new');
	}

	// create new session with provided login info
		public function create_session()
		{
			//load user model 
			$this->load->model('User');

			//so i can query if login info and see if it is an actual account
			$user = $this->User->login_validation($this->input->post());
			// var_dump($user);
			// die();

			
			// condion to test if user is real
			if($user && password_verify($this->input->post('password'), $user['password']))
			{
			$user_info = array(
				'id'=>$user['id'],
				'name'=>$user['name'],
				'alias'=>$user['alias'],
				'is_logged_in'=>TRUE
				);

				//if true set user data
				$this->session->set_userdata($user_info);
				redirect(base_url("success"));
			}
			else
			{
				$this->session->set_flashdata("errors", "Your Login information is incorrect");
				redirect('/');
			die();
			}

				
		}	
		public function success()
		{
			if($this->session->userdata('is_logged_in') == FALSE)
			{
				redirect(base_url('sessions/new'));
			}
			$this->load->view('home');
		}

		public function destroy()
		{
			$this->session->sess_destroy();
		    redirect(base_url('/'));
		}

}

