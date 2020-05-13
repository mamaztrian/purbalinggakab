<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_web extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}



	public function tampil_web_skpd()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='OPD'");
	}

	public function tampil_web_wisata()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap, a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='WISATA'");
	}

	public function tampil_web_desa()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap,  a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='WEB DESA'");
	}

	public function tampil_layanan_publik()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap,  a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='LAYANAN PUBLIK' ORDER BY a.nama_web ASC ");
	}
	
		public function tampil_lpse()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap,  a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='LPSE'");
	}
	
		public function tampil_kecamatan()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap,  a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='KECAMATAN'");
	}
	
		public function tampil_kelurahan()
	{
		return $this->db->query("SELECT a.id_web, a.nama_web, a.deskripsi_lengkap,  a.keterangan, a.alamat_web, a.id_kategori, b.id_kategori,b.nama_kategori    FROM tbl_web a JOIN tbl_kategori b ON a.id_kategori = b.id_kategori WHERE nama_kategori='KELURAHAN'");
	}



	


}

/* End of file Model_web.php */
/* Location: ./application/models/Model_web.php */
