<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Migrate extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		//Only run this through terminal
		if ($this->input->is_cli_request() == FALSE) {
			show_404();
		}
		$this->load->library('migration');
		$this->load->dbforge();
	
	}

	public function latest()
	{
		$this->migration->latest();
		show_error($this->migration->error_string());
	}

	public function reset()
	{
		$this->migration->version(0);
		show_error($this->migration->error_string());
	}

	public function version($version)
	{	
		$version = (int) $version;
		if ($version == 0) {
			die("You need to pass version greater than 0");
		}
		$this->migration->version($version);
		show_error($this->migration->error_string());
	}



}