<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
			$userdata=base_url;
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->model('M_Produk');
		$data['produk'] = $this->M_Produk->jumlah_produk();
		$this->load->model('M_Kategori');
		$data['kategori'] = $this->M_Kategori->jumlah_kategori();
		$this->load->model('M_Customer');
		$data['customer'] = $this->M_Customer->jumlah_customer();
		$this->load->model('M_Bayar');
		$data['bayar'] = $this->M_Bayar->jumlah_bayar();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/index.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_customer()
	{
		$this->load->model('M_Customer');
		$data['tbl_customer'] = $this->M_Customer->tampil_data()->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_customer.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_produk()
	{
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->tampil_data2();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_produk.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_produk_input(){
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_produk_input.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_produk_input_aksi(){
		$config['upload_path']		='./uploads/';
		$config['allowed_types']	='jpg|png|gif';
		$config['max_size']			=2048;
		$config['ecrypt_name']		=TRUE;
		$this->load->library('upload', $config);

		if(! $this->upload->do_upload('gambar')){
			$error	= array('error' => $this->upload->display_error());
			redirect('Backend/data_produk_input', $error);
		}
		else{
			$kd =$this->input->POST('kd_produk');
			$nm =$this->input->POST('nm_produk');
			$kat =$this->input->POST('kategori');
			$hrg =$this->input->POST('harga');
			$stok =$this->input->POST('stok');
			$ket =$this->input->POST('ket');
			$gambar =$this->upload->data("file_name");

			$data = array(
				'kd_produk' => $kd,
				'nm_produk' => $nm,
				'kategori' => $kat,
				'harga' => $hrg,
				'stok' => $stok,
				'ket' => $ket,
				'gambar' => $gambar
			);
			$this->load->model('M_Produk');
			$this->M_Produk->input_data($data,'tbl_produk');
			redirect('Backend/data_produk');
		}
	}

	public function data_produk_edit($id_produk){
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$where = array('id_produk' => $id_produk);
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->view_data($where,'tbl_produk')->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_produk_edit.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_produk_edit_aksi(){
		if(empty($_FILES["gambar"]["name"])){
			$id = $this->input->POST('id_produk');
			$kd =$this->input->POST('kd_produk');
			$nm =$this->input->POST('nm_produk');
			$kat =$this->input->POST('kategori');
			$hrg =$this->input->POST('harga');
			$stok =$this->input->POST('stok');
			$ket =$this->input->POST('ket');

			$data = array(
				'kd_produk' => $kd,
				'nm_produk' => $nm,
				'kategori' => $kat,
				'harga' => $hrg,
				'stok' => $stok,
				'ket' => $ket
			);

			$where = array(
				'id_produk' => $id
			);

			$this->load->model('M_Produk');
			$this->M_Produk->update_data($where,$data,'tbl_produk');
			redirect('Backend/data_produk');
		}

		else{
			$config['upload_path']		=FCPATH.'/uploads/';
			$config['allowed_types']	='jpg|png|jpeg|gif';
			$config['max_size']			=2048;

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->POST('id_produk');
			$kd =$this->input->POST('kd_produk');
			$nm =$this->input->POST('nm_produk');
			$kat =$this->input->POST('kategori');
			$hrg =$this->input->POST('harga');
			$stok =$this->input->POST('stok');
			$ket =$this->input->POST('ket');
			$this->upload->do_upload('gambar');
			$gambar =$this->upload->data("file_name");


			$data = array(
				'kd_produk' => $kd,
				'nm_produk' => $nm,
				'kategori' => $kat,
				'harga' => $hrg,
				'stok' => $stok,
				'ket' => $ket,
				'gambar' => $gambar
			);

			$where = array(
				'id_produk' => $id
			);

			$file = $this->db->get_where('tbl_produk',['id_produk'=> $id])->row();
			unlink("./uploads/".$file->gambar);

			$this->load->model('M_Produk');
			$this->M_Produk->update_data($where,$data,'tbl_produk');
			redirect('Backend/data_produk');
		}
	}

	function data_produk_delete($id_produk){
		$where = array('id_produk' => $id_produk);
		$file = $this->db->get_where('tbl_produk',['id_produk'=> $id_produk])->row();
			unlink("./uploads/".$file->gambar);

		$this->load->model('M_Produk');
		$this->M_Produk->delete_data($where,'tbl_produk');
		redirect('Backend/data_produk');
	}

	public function data_kategori()
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_kategori.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_kategori_input(){
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_kategori_input.php');
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_kategori_input_aksi(){
			$nm =$this->input->POST('nm_kategori');
			$ket =$this->input->POST('ket');

			$data = array(
				'nm_kategori' => $nm,
				'ket' => $ket
			);
			$this->load->model('M_Kategori');
			$this->M_Kategori->input_data($data,'tbl_kategori');
			redirect('Backend/data_kategori');
	}

	public function data_kategori_edit($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->view_data($where,'tbl_kategori')->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_kategori_edit.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_kategori_edit_aksi(){
			$id = $this->input->POST('id_kategori');
			$nm =$this->input->POST('nm_kategori');
			$ket =$this->input->POST('ket');

			$data = array(
				'nm_kategori' => $nm,
				'ket' => $ket
			);

			$where = array(
				'id_kategori' => $id
			);

			$this->load->model('M_Kategori');
			$this->M_Kategori->update_data($where,$data,'tbl_kategori');
			redirect('Backend/data_kategori');
	}

	public function data_kategori_delete($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->load->model('M_Kategori');
		$this->M_Kategori->delete_data($where,'tbl_kategori');
		redirect('Backend/data_kategori');
	}

	public function data_bayar()
	{
	$this->load->model('M_Bayar');
		$data['tbl_bayar'] = $this->M_Bayar->tampil_data()->result();
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_bayar.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_bayar_detail($no_referensi)
	{
		$this->load->model('M_Bayar');
		$data['tbl_detail'] = $this->M_Bayar->tampil_detail($no_referensi);
		$this->load->view('Backend/Template/header.php');
		$this->load->view('Backend/data_bayar_detail.php',$data);
		$this->load->view('Backend/Template/footer.php');
	}

	public function data_bayar_aksi(){

		$no =$this->input->POST('no_referensi');	
		$status =$this->input->POST('status');

			$data = array(
				'status' => $status

			);

			$where = array(
				'no_referensi' => $no
			);

			$this->load->model('M_Bayar');
			$this->M_Bayar->update_data_bayar($where,$data,'tbl_bayar');
			redirect('Backend/data_bayar');
	}
}
