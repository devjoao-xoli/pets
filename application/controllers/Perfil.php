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
		$user = $this->session->userdata('usuario');
		$this->load->model('Conta_model');
		$pessoa_id = $user->id_usuario;
		$conta = $this->Conta_model->buscarContaPorPessoaId($pessoa_id);
		$this->load->model('Pessoa_model');
		$pessoa = $this->Pessoa_model->buscarPessoaPorIdPessoa($pessoa_id);
		$pessoa->tipo_conta = $this->Pessoa_model->tipoConta($user->permissao);
		// print_r($this->session->userdata('usuario'));
		// print_r($pessoa);
		// print_r($conta);
		$data['conta'] = $conta;
		$data['pessoa'] = $pessoa;
		$this->load->view('perfil/perfil', $data);
	}
}
