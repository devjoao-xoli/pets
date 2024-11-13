<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login/login');
	}

	public function validate()
	{
		$this->load->model('Login_model');
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$login = $this->Login_model->validate($usuario, $senha);
		if ($login) {
			$this->session->set_userdata('usuario', $login);
			redirect(base_url(). 'home');
		} else {
			$this->session->set_flashdata('erro_login', 'Usuário ou senha inválidos');
			redirect(base_url(). 'login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('usuario');
		redirect(base_url(). 'login');
	}
}
