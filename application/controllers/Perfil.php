<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('usuario')) {
			redirect(base_url(). 'login');
		}
	}

	public function index()
	{
		$this->load->view('perfil/perfil');
	}
}
