<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

public function get_users($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}

	$query = $this->db->query("select * from users where id='".$slug."'");
	return $query->result_array();
}
}