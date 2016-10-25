<?php
class About_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getExerciseCount()
	{
		$query = $this->db->query('select count(*) as "e_count"  from exercise');
		return $query->row_array();
	}
	
	public function getUserCount()
	{
		$query = $this->db->query('select count(*) as "u_count" from users');
		return $query->row_array();
	}
	
}