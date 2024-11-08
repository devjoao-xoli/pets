<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function validate($usuario, $senha)
	{
		$this->db->where('user', $usuario);
		$this->db->where('password', $senha);
		$query = $this->db->get('usuario');
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function is_logged()
	{
		return $this->session->has_userdata('usuario');
	}
	

}

/* End of file Login_model.php */

