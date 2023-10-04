<?php
Class M_Customer extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_customer');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function jumlah_customer(){
		$this->db->select('*');
		$this->db->from('tbl_customer');
		return $this->db->get()->num_rows();
	}
}