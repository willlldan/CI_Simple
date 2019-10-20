<?php

class Mwayang extends CI_Model{

	public function tampil_wayang(){
		$query = $this->db->get("wayang");
		return $query->result();
	}

	public function tampil_wayang_satuan($id){
		$query = $this->db->get_where("wayang", array('id' => $id));
		return $query->row();
	}

	public function tambah_data($data){
		$this->db->insert("wayang",$data);
	}

	public function edit_data($data) {
		$this->db->where("id", $data['id']);
		$this->db->update('wayang', $data);
	}

	public function delete_data($id){
		$this->db->where("id",$id);
		$this->db->delete("wayang");
	}
}
