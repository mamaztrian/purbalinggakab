<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xxdmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) {
                redirect('Xxdlog');
            }

		$this->load->library('session');
		$this->load->model('model_admin');
	}

	public function index()

	{
	 $data['content'] ='administrator/content';
	 $this->load->view('administrator/index', $data);
	}
	

	public function tambah_data()
	{
		{
		if($this->input->post('submit'))
		{
			$query = $this->model_admin->tambah_data();
			if($query)
			{
				{
				$this->session->set_flashdata('alert', 'Successfully Added !');
				redirect('Xxdmin/tambah_data');
			}
		}
	}
		$data ['data'] = $this->model_admin->tampil_kategori()->result_object();
		$data['content'] ='administrator/tambah_data';
		$this->load->view('administrator/index', $data);
	}

	}

	public function tambah_kategori()
	{
		{
		if($this->input->post('submit'))
		{
			$query = $this->model_admin->tambah_kategori();
			if($query)
			{
				{
				$this->session->set_flashdata('alert', 'Successfully Added !');
				redirect('Xxdmin/tambah_data');
			}
		}
	}
		$data ['data'] = $this->model_admin->tampil_kategori()->result_object();
		$data['content'] ='administrator/tambah_kategori';	
		$this->load->view('administrator/index', $data);
	}

	}

	public function list_portal()
	{
		$data ['data'] = $this->model_admin->tampil_data()->result_object();
		$data['content'] ='administrator/daftar_portal';
		$this->load->view('administrator/index', $data);
	}

	public function delete_web($ID)
	{
		$this->model_admin->del_web($ID);
		if ($this->db->affected_rows()) 
		{
			$this->session->set_flashdata('alert', 'Successfully Deleted !');
			redirect('Xxdmin/list_portal');
		}
		else
		{
			$this->session->flashdata('alert1','Failed Deleted !');
			redirect('Xxdmin/list_portal');
		}
	}


	public function ubah_data($id_web)
	{
		if ($this->input->post('submit'))
		{
		$a = $this->input->post('NAMA');
		$b = $this->input->post('LINK');
		$c = $this->input->post('KATEGORI');
		$d = $this->input->post('KETERANGAN');
                $e = $this->input->post('DESKRIPSI');
		$object= array
		(
			'nama_web' => $a,
			'alamat_web' => $b,
			'id_kategori' => $c,
			'keterangan' => $d,
                        'deskripsi_lengkap' => $e
		);
		$this->db->where('id_web', $id_web);
		$this->db->update('tbl_web', $object);

		if ($this->db->affected_rows()) 
		{
			$this->session->set_flashdata('alert', 'Data Berhasil Diupdate');
			redirect('xxdmin/list_portal');
		}
		else
		{
			$this->session->set_flashdata('alert1', 'Data Gagal Diupdate');
			redirect('xxdmin/list_portal');
		}
		}
		
		$data['content'] ='administrator/ubah_data';
		$data ['data'] = $this->model_admin->tampil_kategori()->result_object();
		$data['editdata'] =$this->db->get_where('tbl_web', array('id_web'=>$id_web))->row();
	    $this->load->view('administrator/index', $data);
	}



	public function seting_admin()
	{
		if($this->input->post('submit'))
		{
			$a = $this->input->post('NAMA_ADMIN');
			$b = $this->input->post('USERNAME');
			$c = MD5($this->input->post('PASSWORD'));
			$object = array
			(

			'nama_admin' => $a,
			'username' => $b,
			'password' => $c
		    );

		
		$this->db->update('tbl_admin', $object);

		if ($this->db->affected_rows()) 
		{
			$this->session->set_flashdata('alert', 'Data Berhasil Diupdate !');
			redirect('xxdmin/seting_admin');
		}
		else
		{
			$this->session->set_flashdata('alert1', 'Data Gagal Diupdate !');
			redirect('xxdmin');
		}
		}
		$data ['data_admin'] = $this->model_admin->tampil_admin()->result_object();
		$data['content'] ='administrator/setings';	
		$this->load->view('administrator/index', $data);
	}

	public function updt_kategori($id_kategori)
	{
		if ($this->input->post('submit'))
		{
		$b = $this->input->post('NAMA_KATEGORI');
		$object= array
		(
			'nama_kategori' => $b
		);
		$this->db->where('id_kategori', $id_kategori);
		$this->db->update('tbl_kategori', $object);

		if ($this->db->affected_rows()) 
		{
			$this->session->set_flashdata('alert', 'Data Berhasil Diupdate');
			redirect('xxdmin/tambah_kategori');
		}
		else
		{
			$this->session->set_flashdata('alert1', 'Data Gagal Diupdate');
			redirect('xxdmin/tambah_kategori');
		}
		}
		$data['editdata'] =$this->db->get_where('tbl_kategori', array('id_kategori'=>$id_kategori))->row();
		$data['content'] ='administrator/ubah_kategori';	
		$this->load->view('administrator/index', $data);
	}




}

/* End of file Xxdmin.php */
/* Location: ./application/controllers/Xxdmin.php */