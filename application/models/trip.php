<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trip extends CI_Model {

	public function create($trip_info, $author_id)
	{
    $query = "INSERT INTO trips 
    (destination, description, travel_date_from ,
    travel_date_to, author_id, member_id, created_at, updated_at) 
	VALUES (?,?,?,?,?,?,NOW(),NOW())";

	$values = array($trip_info['destination'],$trip_info['description'],$trip_info['travel_date_from'], 
		$trip_info['travel_date_to'],$author_id,$author_id);

	return $this->db->query($query,$values);
	
	}

	public function show_all_user_trips($author_id)
	{
		$query = "SELECT id, destination, travel_date_from, travel_date_to, description 
			FROM trips 
			WHERE author_id = ?;";
		$values = array($author_id);
		return $this->db->query($query,$values)->row_array();

	}
	public function get_trip_by_id($id)
	{
		$query = "SELECT destination, travel_date_from, travel_date_to, description, users.name
				FROM trips 
				JOIN users ON trips.author_id=users.id
				WHERE trips.id = ?;";
		$values = array($id);
		return $this->db->query($query,$values)->row_array();


	}

		public function show_all_others_trips($author_id)
	{
		$query = "SELECT author_id, users.name as author_name, destination, travel_date_from, travel_date_to, description, trips.id as trip_id 
			FROM trips 
			JOIN users ON trips.author_id = users.id
			WHERE author_id IS NOT ?;";
		$values = array($author_id);
		return $this->db->query($query,$values)->row_array();

	}



}