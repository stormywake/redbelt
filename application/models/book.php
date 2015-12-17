<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Model {

	// check iif book author already exists
	public function check_book($review)
	{
		$query = "SELECT books.id as book_id, books.title as book_title, 
						 authors.name as author_name 
						 FROM books 
						 JOIN authors ON books.id= authors.book_id
						 WHERE books.title = ? AND authors.name = ?";
		$values = array($review['title'], $review['author']);
		return $this->db->query($query,$values)->row_array();
		
	}

	public function create($review)
	{
		$query = "INSERT INTO books (title, created_at, updated_at) VALUES(?,NOW(),NOW())";
		$values = array($review['title']);
		var_dump($review);
		return $this->db->query($query,$values);
		
	}
	public function get_most_recent_book()
	{
	    $query = "SELECT id FROM books ORDER BY id DESC LIMIT 1";
	    return $this->db->query($query)->row_array();
	}


}