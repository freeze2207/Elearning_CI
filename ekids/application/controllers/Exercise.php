<?php
class Exercise extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('exercise_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['exercise'] = $this->exercise_model->get_grade();
        $session_data = $this->session->userdata('logged_in');
        switch ($session_data['type'])
        {
        	case "admin":
        		$this->load->view('templates/header');
		        $this->load->view('exercise/exercise', $data);
		        $this->load->view('templates/footer');
        		break;
        	case "parent":
        		$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
		        $this->load->view('exercise/exercise', $data);
		        $this->load->view('templates/footer');
        		break;
        	case "teacher":
        		$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
		        $this->load->view('exercise/exercise', $data);
		        $this->load->view('templates/footer');
        		break;
        }
        
    }

    public function view($level = NULL)
	{
	    $this->data['exercise_items'] = $this->exercise_model->get_exercise($level);
	   
	
	    if (empty($this->data['exercise_items']))
	    {
	        show_404();
	    }
	    $this->data['view_data']= $this->exercise_model->view_data();
	    
	    
	    $session_data = $this->session->userdata('logged_in');
	    
	    $this->data['type'] = $session_data['type'];
	    
	    switch ($session_data['type'])
	    {
	    	case "student":
	    		$this->load->view('templates/header_stu', $this->session->userdata('logged_in'));
			    $this->load->view('exercise/view_stu', $this->data, FALSE);
			    $this->load->view('templates/footer');
	    		break;
	    	case "admin":
	    		$this->load->view('templates/header');
			    $this->load->view('exercise/view', $this->data, FALSE);
			    $this->load->view('templates/footer');
	    		break;
	    	case "parent":
	    		$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
			    $this->load->view('exercise/view', $this->data, FALSE);
			    $this->load->view('templates/footer');
	    		break;
	    	case "teacher":
	    		$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
			    $this->load->view('exercise/view', $this->data, FALSE);
			    $this->load->view('templates/footer');
	    		break;
	    }
	    
	}
	
	public function addNew()
	{
		$session_data = $this->session->userdata('logged_in');
		switch ($session_data['type'])
		{
			case "admin":
				$this->load->view('templates/header');
				$this->load->view('exercise/addNew');
				$this->load->view('templates/footer');
				break;
			case "parent":
				$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
				$this->load->view('exercise/addNew');
				$this->load->view('templates/footer');
				break;
			case "teacher":
				$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
				$this->load->view('exercise/addNew');
				$this->load->view('templates/footer');
				break;
		}
		
	}
	
	public function submit_data()
	{
		$data = array('title'                   => $this->input->post('title'),
				'level'                      => $this->input->post('level'),
				'description'                        => $this->input->post('description'),
				'subject'                    => $this->input->post('subject'),
				'content'                    => $this->input->post('content'),
				'date'                       => date("Y-m-d")
				);
	
		$insert = $this->exercise_model->insert_data($data);
		$this->session->set_flashdata('message', 'Your data inserted Successfully..');
		redirect('exercise');
	}
	
	public function view_data()
	{
		$this->data['view_data']= $this->exercise_model->view_data();
		$this->load->view('exercise/view', $this->data, FALSE);
	}
	
	public function edit_data($id)
	{
		$this->data['edit_data']= $this->exercise_model->edit_data($id);
		$session_data = $this->session->userdata('logged_in');
		switch ($session_data['type'])
		{
			case "admin":
				$this->load->view('templates/header');
				$this->load->view('exercise/edit', $this->data, FALSE);
				$this->load->view('templates/footer');
				break;
			case "parent":
				$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
				$this->load->view('exercise/edit', $this->data, FALSE);
				$this->load->view('templates/footer');
				break;
			case "teacher":
				$this->load->view('templates/header_pt',$this->session->userdata('logged_in'));
				$this->load->view('exercise/edit', $this->data, FALSE);
				$this->load->view('templates/footer');
				break;
		}

	}
	
	public function update_data($id)
	{
		$data = array('title'                   => $this->input->post('title'),
				'level'                      => $this->input->post('level'),
				'description'                        => $this->input->post('description'),
				'subject'                    => $this->input->post('subject'),
				'content'                    => $this->input->post('content'),
				'date'                       => date("Y-m-d")
				);
		$this->db->where('id', $id);
		$this->db->update('exercise', $data);
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect('exercise');
	}
	
	public function delete_data($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('exercise');
		$this->session->set_flashdata('message', 'Your data deleted Successfully..');
		redirect('exercise');
	}
	
	public function choose()
	{
		$data['exercise'] = $this->exercise_model->get_grade();
		$this->load->view('templates/header_stu', $this->session->userdata('logged_in'));
		$this->load->view('exercise/exercise_choose', $data);
	}
	
}