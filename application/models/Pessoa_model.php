<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model {

	public function buscarPessoaPorIdPessoa($id)
	{
		$this->db->where('id_pessoa', $id);
		$query = $this->db->get('pessoa');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function tipoConta($permissao)
	{
		$tipo[1] = 'Aluno';
		$tipo[2] = 'Professor';
		$tipo[3] = 'Administrador';
		$tipo[4] = 'Vendedor';

		return $tipo[$permissao];
	}
}

/* End of file Pessoa_model.php */

