<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login()
	{
		return $this->db->query('SELECT * FROM tbl_admin');
	}

	

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */