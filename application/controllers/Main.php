<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_web');
		$this->load->model('model_admin');
		$this->load->model('model_login');

	}

	public function index()
	{
	   $data ['data_skpd'] 		= $this->model_web->tampil_web_skpd()->result_object();
	   $data ['data_wisata']	= $this->model_web->tampil_web_wisata()->result_object();
	   $data ['data_desa'] 		= $this->model_web->tampil_web_desa()->result_object();
	   $data ['data_publik'] 	= $this->model_web->tampil_layanan_publik()->result_object();
	   $data ['data_lpse'] 	    = $this->model_web->tampil_lpse()->result_object();
	   $data ['data_kecamatan'] 	    = $this->model_web->tampil_kecamatan()->result_object();
	   $data ['data_kelurahan'] 	    = $this->model_web->tampil_kelurahan()->result_object();
	   $this->load->view('template', $data);
	}


	public function error404()
	{
		$this->load->view('error_404');
	}


	

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */