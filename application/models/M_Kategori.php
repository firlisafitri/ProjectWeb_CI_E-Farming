<?php
Class M_Kategori extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_kategori');
	}

	function tampil_data2(){
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->JOIN('tbl_produk','tbl_produk.id_produk=tbl_kategori.id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function view_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function jumlah_kategori(){
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		return $this->db->get()->num_rows();
	}
}