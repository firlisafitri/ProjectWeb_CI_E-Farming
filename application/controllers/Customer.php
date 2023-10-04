<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
			$userdata=base_url;
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->tampil_data2();
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/index.php',$data);
		$this->load->view('Customer/Template/footer.php');
	}

	public function produk_kategori($kategori)
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data2();
		$where = array('kategori' => $kategori);
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->view_data($where,'tbl_produk')->result();
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/produk_kategori.php',$data);
	}

	public function belanja($id_produk)
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$where = array('id_produk' => $id_produk);
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->view_data($where,'tbl_produk')->result();
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/belanja.php',$data);
		$this->load->view('Customer/Template/footer.php');
	}

	public function belanja_input_aksi(){
			$no =$this->input->POST('no_belanja');
			$tgl =$this->input->POST('tgl_belanja');
			$idp =$this->input->POST('id_produk');
			$idc =$this->input->POST('id_customer');
			$jml =$this->input->POST('jml_belanja');

			$data = array(
				'no_belanja' => $no,
				'tgl_belanja' => $tgl,
				'id_produk' => $idp,
				'id_customer' => $idc,
				'jml_belanja' => $jml

			);
			$this->load->model('M_Belanja');
			$this->M_Belanja->input_data($data,'tbl_belanja');
			redirect('Customer');
	}

	public function keranjang()
	{
		$where=$this->session->userdata('ses_id_cus');
		$this->load->model('M_Belanja');
		$data['tbl_belanja'] = $this->M_Belanja->tampil_data($where);
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/keranjang.php',$data);
		$this->load->view('Customer/Template/footer.php');
	}

	function keranjang_delete($id_belanja){
		$where = array('id_belanja' => $id_belanja);

		$this->load->model('M_Belanja');
		$this->M_Belanja->delete_data_belanja($where,'tbl_belanja');
		redirect('Customer/keranjang');
	}

	public function checkout_aksi(){

			$noref =$this->input->POST('no_referensi');
			$tgl =$this->input->POST('tgl_checkout');
			$no =$this->input->POST('no_belanja');
			$idp =$this->input->POST('id_produk');
			$idc =$this->input->POST('id_customer');
			$jml =$this->input->POST('jml_belanja');
			$tot =$this->input->POST('total');
			$stat =$this->input->POST('status');

			for ($i=0; $i<count($no); $i++) {
				$data = array(
				'no_referensi' => $noref,
				'tgl_checkout' => $tgl,
				'no_belanja' => $no[$i],
				'id_produk' => $idp[$i],
				'id_customer' => $idc[$i],
				'jml_belanja' => $jml[$i],
				'total' => $tot[$i],
				'status' => $stat

			);
			$this->load->model('M_Belanja');
			$this->M_Belanja->input_data_checkout($data,'tbl_checkout');

			$where = array('no_belanja' => $no[$i]);
			$this->M_Belanja->delete_data_belanja($where,'tbl_belanja');

			}
			redirect('Customer/checkout');
	}

	public function checkout()
	{
	$where=$this->session->userdata('ses_id_cus');
	$this->load->model('M_Belanja');
		$data['tbl_checkout'] = $this->M_Belanja->tampil_data_checkout($where);
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/checkout.php',$data);
		$this->load->view('Customer/Template/footer.php');
	}

	public function bayar_input_aksi(){
			
			$tgl =$this->input->POST('tgl_bayar');
			$no =$this->input->POST('no_referensi');
			$tot =$this->input->POST('tot_bayar');
			$status =$this->input->POST('status');

			$status_check =$this->input->POST('status_checkout');

			$data = array(
				'tgl_bayar' => $tgl,
				'no_referensi' => $no,
				'tot_bayar' => $tot,
				'status' => $status

			);

			$data_check = array(
				'status' => $status_check

			);

			$where = array(
				'no_referensi' => $no
			);

			$this->load->model('M_Belanja');
			$this->M_Belanja->input_data_bayar($data,'tbl_bayar');
			$this->M_Belanja->update_data_checkout($where,$data_check,'tbl_checkout');

			redirect('Customer/status_bayar');
	}

	public function status_bayar(){
	$where=$this->session->userdata('ses_id_cus');
	$this->load->model('M_Belanja');
		$data['tbl_checkout'] = $this->M_Belanja->tampil_status_belanja($where);
		$this->load->view('Customer/Template/header.php');
		$this->load->view('Customer/status_belanja.php',$data);
		$this->load->view('Customer/Template/footer.php');
	}

	public function cetak_kwitansi(){
		$where=$this->session->userdata('ses_id_cus');
		$this->load->model('M_Belanja');
		$data['tbl_checkout'] = $this->M_Belanja->tampil_status_belanja($where);
		$this->load->view('Customer/cetak_kwitansi.php',$data);
	}

}