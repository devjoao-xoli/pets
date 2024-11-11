<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Conta_model extends CI_Model {

	public function buscarContaPorUUID($uuid)
	{
		$this->db->where('uuid', $uuid);
		$query = $this->db->get('conta');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
	
	public function buscarContaPorPessoaId($id)
	{
		$this->db->where('pessoa_id_pessoa', $id);
		$query = $this->db->get('conta');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
}

/* End of file Conta_model.php */

