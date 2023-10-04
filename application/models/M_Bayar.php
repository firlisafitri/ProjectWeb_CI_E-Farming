<?php
Class M_Bayar extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_bayar');
	}

	function tampil_detail($no_referensi){
		$this->db->select('*');
		$this->db->from('tbl_checkout');
		$this->db->JOIN('tbl_produk','tbl_produk.id_produk=tbl_checkout.id_produk');
		$this->db->JOIN('tbl_customer','tbl_customer.id_customer=tbl_checkout.id_customer');
		$this->db->JOIN('tbl_bayar','tbl_bayar.no_referensi=tbl_checkout.no_referensi');
		$this->db->where('tbl_checkout.no_referensi = '.$no_referensi);
		$query = $this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data_bayar($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function jumlah_bayar(){
		$this->db->select('*');
		$this->db->from('tbl_bayar');
		return $this->db->get()->num_rows();
	}
}