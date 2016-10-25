<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
		$data['title'] = 'Users items';
        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL)
	{
	    $data['users_item'] = $this->users_model->get_users($slug);
	
	    if (empty($data['users_item']))
	    {
	        show_404();
	    }
	    
	    $session_data = $this->session->userdata('logged_in');
	    switch ($session_data['type'])
	    {
	    	case "student":
	    		$this->load->view('templates/header_stu', $this->session->userdata('logged_in'));
	    		$this->load->view('users/view', $data);
	    		$this->load->view('templates/footer');
	    		break;
	    	case "admin":
	    		$this->load->view('templates/header');
			    $this->load->view('users/view', $data);
			    $this->load->view('templates/footer');
	    		break;
	    	case "parent":
	    		$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
	    		$this->load->view('users/view', $data);
	    		$this->load->view('templates/footer');
	    		break;
	    	case "teacher":
	    		$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
	    		$this->load->view('users/view', $data);
	    		$this->load->view('templates/footer');
	    		break;
	    }
	}
}