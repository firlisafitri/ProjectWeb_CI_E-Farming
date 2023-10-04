<?php
Class M_Belanja extends CI_Model{

	function tampil_data($where){
		$this->db->select('*');
		$this->db->from('tbl_belanja');
		$this->db->JOIN('tbl_produk','tbl_produk.id_produk=tbl_belanja.id_produk');
		$this->db->JOIN('tbl_customer','tbl_customer.id_customer=tbl_belanja.id_customer');
		$this->db->where('tbl_customer.id_customer = '.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_data_checkout($where){
		$this->db->select('*');
		$this->db->from('tbl_checkout');
		$this->db->JOIN('tbl_produk','tbl_produk.id_produk=tbl_checkout.id_produk');
		$this->db->JOIN('tbl_customer','tbl_customer.id_customer=tbl_checkout.id_customer');
		$this->db->where('tbl_checkout.status = "Belum Dibayar" AND tbl_customer.id_customer = '.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function tampil_status_belanja($where){
		$this->db->select('*');
		$this->db->from('tbl_checkout');
		$this->db->JOIN('tbl_produk','tbl_produk.id_produk=tbl_checkout.id_produk');
		$this->db->JOIN('tbl_customer','tbl_customer.id_customer=tbl_checkout.id_customer');
		$this->db->JOIN('tbl_bayar','tbl_bayar.no_referensi=tbl_checkout.no_referensi');
		$this->db->where('tbl_checkout.status = "Sudah Dibayar" AND tbl_customer.id_customer = '.$where);
		$query = $this->db->get();
		return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function input_data_checkout($data,$table){
		$this->db->insert($table,$data);
	}

	function input_data_bayar($data,$table){
		$this->db->insert($table,$data);
	}

	function delete_data_belanja($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data_checkout($where,$data_check,$table){
		$this->db->where($where);
		$this->db->update($table,$data_check);
	}

}