<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function login_auth()
	{
		$username = $this->input->post('username');
		$this->session->set_userdata('username',$username);
		$s_username = $this->session->userdata('username');

		$password = $this->input->post('password');
		$this->session->set_userdata('password',$password);
		$s_password = $this->session->userdata('password');
		

		$this->db->where('username',$s_username);
		$this->db->where('password',$s_password);
		$query = $this->db->get('users');
		if($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function getbyuname()
	{
		$username = $this->input->post('username');
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		$result = $query->result_object();
		return $result;		
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('count');
		$this->session->sess_destroy();
		$main_controller = $this->uri->segment(1); // controller
		redirect($main_controller);
	}
}