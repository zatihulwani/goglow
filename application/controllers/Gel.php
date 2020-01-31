<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent:: __construct();
		$this->load->library('cart');
		$this->load->Model('M_crud');
	}



	public function index()
	{
		
		$data['gel'] = $this->M_crud->getkategori('produk','kategori','3');
		$this->load->view('gel',$data);
		
		
	}

	public function tambah_cart()
	{
		include 'Koneksi.php';
		$gambar = $this->input->post('gambar');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');

		$query= mysqli_query($connect,"INSERT into cart VALUES (NULL,'".$nama_barang."','".$harga."','".$gambar."') ");

		if ($query) {
			echo '<script language="javascript">alert("Penambahan barang berhasil, silahkan cek cart anda  :) ");document.location="../Gel";</script>';
		}

		else {
			echo '<script language="javascript">alert("Penambahan barang gagal :( ");document.location="../Gel";</script>';
		}
	}
	public function detail_produk($id)
	{
		$data['detail'] = $this->M_crud->getkategori('produk','id_produk',$id);
		$this->load->view('single',$data);
	}


}

