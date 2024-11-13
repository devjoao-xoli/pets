<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('usuario')) {
			redirect(base_url(). 'login');
		}
	}

	public function index()
	{
		$data['user_name'] = $this->session->userdata('usuario')->user;
		$this->load->view('home/home', $data);
	}
}
