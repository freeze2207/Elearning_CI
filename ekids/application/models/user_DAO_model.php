<?php
class User_DAO_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function login($username, $password, $type)
	{
		$this -> db -> select('id, username, password, type');
	    $this -> db -> from('users');
	    $this -> db -> where('username', $username);
	    $this -> db -> where('password',$password);
	    $this -> db -> where('type',$type);
	    $this -> db -> limit(1);
	 
	    $query = $this -> db -> get();
	 
	    if($query -> num_rows() == 1)
	    {
	    	return $query->result();
	    }
	    else
	    {
	    	return false;
	    }
	}
	
	public function create_user($username, $password , $type) 
	{
	
		$data = array(
				'username'   => $username,
				'password'   => $password,
				'type'       => $type,
		);
	
		return $this->db->insert('users', $data);
	
	}
}