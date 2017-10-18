<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function PobierzUserow(){

		$wynikZapytania = $this->db->query('
			SELECT * FROM user
			');
		return $wynikZapytania;
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */