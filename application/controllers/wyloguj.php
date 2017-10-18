<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wyloguj extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->session->set_userdata('admin', ' ');
		$this->session->set_userdata('imie', ' ');
		redirect();
	}

}

/* End of file wyloguj.php */
/* Location: ./application/controllers/wyloguj.php */