<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelName extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->databese();
	}

}

/* End of file welcome_models.php */
/* Location: ./application/models/welcome_models.php */