<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function index()
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data()->result();
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->tampil_data2();
		$this->load->view('Frontend/Template/header.php');
		$this->load->view('Frontend/index.php',$data);
		$this->load->view('Frontend/Template/footer.php');
	}

	public function produk_kategori($kategori)
	{
		$this->load->model('M_Kategori');
		$data['tbl_kategori'] = $this->M_Kategori->tampil_data2();
		$where = array('kategori' => $kategori);
		$this->load->model('M_Produk');
		$data['tbl_produk'] = $this->M_Produk->view_data($where,'tbl_produk')->result();
		$this->load->view('Frontend/Template/header.php');
		$this->load->view('Frontend/produk_kategori.php',$data);
	}

	public function login()
	{
		$this->load->view('Frontend/Template/header.php');
		$this->load->view('Frontend/login.php');
	}

	public function register()
	{
		$this->load->view('Frontend/Template/header.php');
		$this->load->view('Frontend/register.php');
	}

	public function register_action(){
		$user = $this->input->POST('username');
		$pass = $this->input->POST('password');
		$nama = $this->input->POST('nm_customer');
		$email = $this->input->POST('email');
		$nohp = $this->input->POST('nohp');
		$alamat = $this->input->POST('alamat');

		$data = array(
			'username' => $user,
			'password' => $pass,
			'nm_customer' => $nama,
			'email' => $email,
			'nohp' => $nohp,
			'alamat' => $alamat,
		);

		$this->load->model('M_Customer');
		$this->M_Customer->input_data($data,'tbl_customer');
		redirect('Frontend/login');
	}
}