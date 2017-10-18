<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zaloguj_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function SprawdzUzytkownika(){

		$zapytanie = $this->db->query('SELECT count(id) AS iloscU , imie AS imie FROM 
			user
			WHERE 
			login = "'.$this->db->escape_str($this->input->post('login')).'"
			AND
			haslo = "'.$this->db->escape_str(md5($this->input->post('haslo'))).'"
			');
		return $zapytanie;
	}


}

/* End of file zaloguj_model.php */
/* Location: ./application/models/zaloguj_model.php */