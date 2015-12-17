<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	// create user from register form using post data passed from Users/create
	public function create_user($post)
	{
		$query="INSERT INTO users (name, alias, email, password, updated_at, created_at) VALUES(?,?,?,?,NOW(),NOW())";
		$values = array(
			$post['name'],
			$post['alias'],
			$post['email'],
			password_hash($post['password'], PASSWORD_BCRYPT)
			);
		return $this->db->query($query,$values);

	}

	//validate post data with form-validatio libray which is passed in from the users/create_user function
	public function validate_post($post)
	{
	    $this->form_validation->set_rules("name", "Name", "required");
	    $this->form_validation->set_rules("alias", "Alias", "required|alpha");
	    $this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
	    $this->form_validation->set_rules("password", "Password", "required|matches[password_confirm]");
	    $this->form_validation->set_rules("password_confirm", "Password Confirmation", "required");
	    return $this->form_validation->run();

	}

	//check if login information is a valid user info
	public function login_validation($post)
	{
		$query = "SELECT name, alias, id, password FROM users WHERE email=?";
		$values = array($post['email']);

		return $this->db->query($query,$values)->row_array();
		

	}

}