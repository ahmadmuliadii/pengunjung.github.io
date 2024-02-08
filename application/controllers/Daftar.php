<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
		if($this->daftar_model->current_user() == null){
			redirect('auth/login');
		}
		
	}

	public function index()
	{
		$data['title'] = 'Halaman Daftar Pendatang';
		$data['data_daftar'] =$this->db->get('daftar')->result_array(); 
		

		$this->load->view('_header', $data);
		$this->load->view('halaman-daftar', $data);
		$this->load->view('_footer');

	}

	
	public function tambahdatadaftar() 				
	{

		$data['title'] = 'Tambah Data';

		$this->load->view('_header', $data);
		$this->load->view('tambah-daftar');
		$this->load->view('_footer');

	}

	// untuk memproses data agar dimasukkan ke db
	public function tambahdaftar()				
	{
		$this->load->model('Daftar_model'); 	// Untuk menggunakan load kita harus meload modelnya dahulu
		$this->Daftar_model->tambah_daftar(); 	//Jalankan fungsi model tambah game
		
		redirect('daftar');//kembali ke halaman game
	}

	public function deletedaftar($id) 
	{
		$this->load->model('Daftar_model'); 	// Untuk menggunakan load kita harus meload modelnya dahulu
		$this->Daftar_model->delete_daftar($id); 	//Jalankan fungsi model tambah game
	
		redirect('daftar');	
	}

	// FUnction ini untuk membuat tampilan edit data game
	public function editdatadaftar($id)
	{

		$data['title'] = 'Edit Data';
		$data['data_daftar'] = $this->db->get_where('daftar', ['id' => $id])->row_array();

		$this->load->view('_header', $data);
		$this->load->view('ubah-daftar', $data);
		$this->load->view('_footer');
	}

	
	public function ubahdaftar()
	{
		$this->load->model('Daftar_model'); 	// Untuk menggunakan load kita harus meload modelnya dahulu
		$this->Daftar_model->edit_daftar(); 	//Jalankan fungsi model
		
		redirect('daftar');	
	}

}
