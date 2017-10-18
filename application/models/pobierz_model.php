<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pobierz_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function PobierzWszystko($tabela){

		$wynikZapytania = $this->db->query('
			SELECT * FROM '.$tabela
			);
		return $wynikZapytania;
	}

	public function PobierzJednego($tabela, $id){

		$wynikZapytania = $this->db->query('
			SELECT * FROM '.$tabela.' WHERE id = '.$id
			);
		return $wynikZapytania;
	}

}

/* End of file PobierzZBazy.php */
/* Location: ./application/models/PobierzZBazy.php */