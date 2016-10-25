<?php
class Exercise_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function get_exercise($level = FALSE)
	{
		if ($level === FALSE)
		{
			$query = $this->db->get('exercise');
		} else
		{
			$query = $this->db->query("select * from exercise where level='".$level."' ORDER BY id ASC");
		}
		return $query->result_array();
	}

	public function get_grade()
	{
		$query = $this->db->query('select level, count(level) as "g_count" from exercise group by level');
		return $query->result_array();
	}
	
	public function insert_data($data)
	{
		$this->db->insert('exercise', $data);
		return TRUE;
	}
	
	public function view_data(){
		$query=$this->db->query("SELECT *
                                 FROM exercise
                                 ORDER BY id ASC");
		return $query->result_array();
	}
	
	public function edit_data($id){
		$query=$this->db->query("SELECT *
				FROM exercise
				WHERE id ='".$id."'");
		return $query->result_array();
	}
}