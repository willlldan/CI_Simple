<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wayang extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mwayang');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mwayang->tampil_wayang();
		$this->load->view('vwayang',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'nama' => $this->input->post("nama"),
			'sejarah' => $this->input->post("sejarah"),
		);
		$this->Mwayang->tambah_data($insert);
		redirect('Wayang/tampil');
	}

	public function delete_data($nrp){
		$this->Mwayang->delete_data($nrp);
		redirect('Wayang/tampil');
	}

	public function edit_data($id){
		$data['dat'] = $this->Mwayang->tampil_wayang_satuan($id);
		$this->load->view('vedit_data', $data);
	}

	public function edit_data_action(){
		$update = array(
			'id' => $this->input->post("id"),
			'nama' => $this->input->post("nama"),
			'sejarah' => $this->input->post("sejarah"),
		);
		$this->Mwayang->edit_data($update);
		redirect('Wayang/tampil');
	}
}
