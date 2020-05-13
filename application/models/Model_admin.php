<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function tampil_kategori()
	{
		return $this->db->query('SELECT * FROM tbl_kategori ORDER by nama_kategori ASC');
	}

	public function tambah_data()
	{
		$a = $this->input->post('NAMA');
		$b = $this->input->post('LINK');
		$c = $this->input->post('KATEGORI');
		$d = $this->input->post('KETERANGAN');
                $e = $this->input->post('DESKRIPSI');
		$object = array(
			'nama_web' => $a,
			'alamat_web' => $b,
			'id_kategori' => $c,
			'keterangan' => $d,
                        'deskripsi_lengkap' => $e
			);
		return $this->db->insert('tbl_web', $object);
	}

	public function tambah_kategori()
	{
		$a = $this->input->post('NAMA');
		$object = array(
			'nama_kategori' => $a
			);
		return $this->db->insert('tbl_kategori', $object);
	}

	public function tampil_data()
	{
		return $this->db->query('SELECT a.id_web, a.nama_web, a.deskripsi_lengkap, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori ');
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('tbl_admin');
		return $query->num_rows();

	}
	public function data_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tbl_admin')->row();
	}


	public function del_web($param)
	{
		return $this->db->delete('tbl_web', array('id_web' => $param));
	}

	public function tampil_admin()
	{
		return $this->db->query('SELECT * FROM tbl_admin');
	}


	

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */