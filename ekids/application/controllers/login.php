<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		//$this->load->view('templates/header');
		$this->load->helper(array('form'));
		$this->load->view('login/login');
	}
	
	public function register()
	{
		$this->load->helper(array('form'));
		$this->load->view('login/register');
	}
	
	public function registration()
	{
		$this->load->helper('form');
		$this->load->model('user_DAO_model');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[3]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
		$this->form_validation->set_rules('type', 'Type', 'trim|required');
		
		if ($this->form_validation->run() === false) 
		{
			// validation not ok, send validation errors to the view
			$this->load->view('login/register');
				
		} 
		else 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$type = $this->input->post('type');
			
			if ($this->user_DAO_model->create_user($username, $password ,$type)) 
			{
				// user creation ok
				$result = $this->user_DAO_model->login($username, $password, $type);
				if($result)
				{
					foreach($result as $row)
					{
						$sess_array = array(
								'id' => $row->id,
								'username' => $row->username,
								'type' => $row->type
						);
						$this->session->set_userdata('logged_in', $sess_array);
					}
				}
				
				$data['username'] = $sess_array['username'];
				$data['type'] = $sess_array['type'];
				$data['id'] = $sess_array['id'];
				switch ($data['type'])
				{
					case "student":
						$this->load->view('index_stu', $data);
						break;
					case "admin":
						$this->load->view('index', $data);
						break;
					case "parent":
						$this->load->view('index_pt', $data);
						break;
					case "teacher":
						$this->load->view('index_pt', $data);
						break;
				}
			} 
			else 
			{
				// user creation failed, this should never happen
				$this->load->view('login/register');
			}
		}
	}
	
}
