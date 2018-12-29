<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Kategori extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_Model');
		$this->load->model('Kategori_Model');
	}

	public function add()
	{
		$data= array(
			'title' => 'Kategori',
			'subtitle' => 'Tambah Kategori',
			'content' => 'Kateegori/add',
			'show' => $this->Kategori_Model->idex()->result()
		);
		$this->load->view('template/my_template', $data);
	}

	public function index()
	{
		$data= 
		[
			'title' => 'Kategori',
			'subtitle' => 'Kategori',
			'content' => 'Kateegori/add',
			'show' => $this->Kategori_Model->idex()->result()
		];
		$this->load->view('template/my_template', $data);
	}
	public function create()
	{
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' =>$nama_kategori,
		);

		$create = $this->Kategori_Model->create($data);
		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('Kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('Kategori');
		}
	}

	public function edit()
	{
		$data= 
		[
			'title' => 'Kategori',
			'subtitle' => 'Edit Kategori',
			'content' => 'Kateegori/edit',
			'show' => $this->Kategori_Model->edit($id)->row()
		];
		$this->load->view('template/my_template', $data);
	}

	public function update()
	{
		$id_kategori = $this->input->post('id_kategori');
		$data = array(
			'nama_kategori' =>$this->input->post('nama_kategori')
		);
		$update = $this->Kategori_Model->update($data, $id_kategori);

		if($update){
			$this->session->set_flashdata('pesan_create', true);
			redirect('Kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('Kategori');
		}
	}

	public function delete($id)
	{
		$delete =$this->Kategori_Model->delete($id);

		if ($delete) {
			redirect('Kategori');
		}else{
			redirect('Kategori');
		}
	}
}
?>