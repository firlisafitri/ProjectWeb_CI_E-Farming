<?php
Class M_Produk extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_produk');
	}

	function tampil_data2(){
		$this->db->select('*');
		$this->db->from('tbl_produk');
		$this->db->JOIN('tbl_kategori','tbl_kategori.id_kategori=tbl_produk.kategori');
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

	function jumlah_produk(){
		$this->db->select('*');
		$this->db->from('tbl_produk');
		return $this->db->get()->num_rows();
	}

}