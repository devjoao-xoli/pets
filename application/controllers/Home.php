<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['user_name'] = $this->session->userdata('usuario')->user;
		$this->load->view('home/home', $data);
	}
}
