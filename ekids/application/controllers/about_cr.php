<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_cr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_model');
		$this->load->helper('url_helper');
	}
	
	public function index()
	{
		$data['user'] = $this->about_model->getUserCount();
		$data['exercise'] = $this->about_model->getExerciseCount();
		
		$session_data = $this->session->userdata('logged_in');
		switch ($session_data['type'])
		{
			case "student":
				$this->load->view('templates/header_stu', $this->session->userdata('logged_in'));
				$this->load->view('about_view', $data);
				$this->load->view('templates/footer');
				break;
			case "admin":
				$this->load->view('templates/header');
				$this->load->view('about_view', $data);
				$this->load->view('templates/footer');
				break;
			case "parent":
				$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
				$this->load->view('about_view', $data);
				$this->load->view('templates/footer');
				break;
			case "teacher":
				$this->load->view('templates/header_pt', $this->session->userdata('logged_in'));
				$this->load->view('about_view', $data);
				$this->load->view('templates/footer');
				break;
		}
		
	}
	
}
