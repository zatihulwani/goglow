<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('app_model');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) { //ngecek udah login belum, kalau sudah kemabli ke halaman admin
			$cek_level = $this->db->get_where('customer', array('username'=> $_SESSION['username']));
			foreach ($cek_level->result() as $cek) {
				if ($cek->level=='admin') {
					$this->load->view('beranda');
				}

				elseif ($cek->level=='customer'){
					$this->load->view('beranda');
				}
			}
			
		} else {
				$this->load->view('login'); 
		} 	
		/*$this->load->view('welcome_message');*/
	}

	function do_login() {

		$username = $this->input->post('Email');
		$password = $this->input->post('Password');
		$cek = $this->app_model->cek_user($username, $password);
		if (count($cek) > 0 ) { 
			$cek_level = $this->db->get_where('customer', array('email'=> $username,'password'=>$password));
			foreach ($cek_level->result() as $cek) {
				if ($cek->level=='admin') {
					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'no' =>$cek->id,
					'username' => $username, //set session username
					'nama' => $cek ->nama,
					'email' => $cek->email,
					'level' => $cek->level,
					'password' => $cek->password,
					));

					$this->load->view('beranda');
				}

				elseif ($cek->level=='customer'){
					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'no' =>$cek->id,
					'username' => $username, //set session username
					'nama' => $cek ->nama,
					'email' => $cek->email,
					'level' => $cek->level,
					'password' => $cek->password,
					));

					$this->load->view('beranda');
				}

				else {
					$this->session->set_userdata(array(
					'isLogin' => TRUE, //set data telah login atau belum
					'no' =>$cek->id,
					'username' => $username, //set session username
					'nama' => $cek ->nama,
					'email' => $cek->email,
					'level' => $cek->level,
					'password' => $cek->password,
					));

					$this->load->view('beranda');
				}
			}

		}
		else {
			$this->load->view('login');
		}

	}


	

	
}
