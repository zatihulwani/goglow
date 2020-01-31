<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	function cek_user($username="",$password="") {

		$query = $this->db->get_where('customer',array('email' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}
}

