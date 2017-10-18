<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class witryny_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function ListaAutorow(){
		$zapytanie = $this->db->query('SELECT * FROM Users ORDER BY Nazwisko ASC');
		return $zapytanie;
	}

	public function pobierzAutorow(){
		$zapytanie = $this->db->query('SELECT * FROM Users');
		return $zapytanie;
	}

	public function pobierzWitryny(){
		$zapytanie = $this->db->query('SELECT * FROM witryny');
		return $zapytanie;
	}

}

/* End of file witryny_model.php */
/* Location: ./application/models/witryny_model.php */