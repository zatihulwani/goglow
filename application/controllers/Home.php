<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
		$this->load->view('beranda');
		
		
	}
	public function claymask()
	{
		
		$this->load->view('claymask');
		
	}
	public function single($id)
	{
		$data['detail'] = $this->M_crud->getkategori('produk','id_produk',$id);
		$this->load->view('single',$data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register.html');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function sheetmask()
	{
		$this->load->view('sheetmask');
	}
	public function peeloff()
	{
		$this->load->view('peeloff');
	}
	public function gel()
	{
		$this->load->view('gel');
	}
	public function scrub()
	{
		$this->load->view('scrub');
	}
}

