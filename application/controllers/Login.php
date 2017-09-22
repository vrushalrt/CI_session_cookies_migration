<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('javascript/jquery');
		// $this->load->library('session');
		// $this->load->helper('url');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->login_form();
	}

	public function _display($viewname,$data)
	{
		$this->load->view($viewname,$data);
	}

	public function login_form()
	{
		
		$this->session_count('login');
		$data = array(
						'form_name' => 'Login',
						'hit_count' => $this->session->userdata('count')
					);
		$this->_display('login',$data);
	}

	public function login()
	{
		$this->session_count('member');
		$query = $this->login_model->login_auth();
		if($query)
		{
			$data = array(
							'data' => $this->login_model->getbyuname(),
							'hit_count' => $this->session->userdata('count')
							);
			$this->_display('member',$data);
		}
		else
		{
			echo "Failed!";
		}
		
	}

	public function user()
	{
		$this->login();
	}

	public function session_count($s_name)
	{
		if(isset($_SESSION[$s_name]['counter']))
		{
			$_SESSION[$s_name]['counter'] += 1;
			$this->session->set_userdata('count',$_SESSION[$s_name]['counter']);
		}
		else
		{
			$_SESSION[$s_name]['counter'] = 1;
			$this->session->set_userdata('count',$_SESSION[$s_name]['counter']);
		}

	}

	public function logout_member()
	{
		$this->login_model->logout();
		//$this->uri->segment(1); // controller
		// $this->uri->segment(2); // action
		// $this->uri->segment(3); // 1stsegment
		// $this->uri->segment(4); // 2ndsegment
	}


}