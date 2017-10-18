<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index($i=null)
	{
		$informacja['info']=$this->db->get('jednostkainfo');

		$this->load->view('includes/html_header');
		$this->load->view('includes/html_menu');
		if($this->session->userdata('admin')=='tak'){

			$this->load->view('includes/html_menu_adm');
		}
		$this->load->view('includes/html_menu_end');

			//załadowanie widoku, i przekazujemy do niego tablice
		$this->load->view('info', $informacja);
		$this->load->view('includes/html_footer');
	}


	public function edytuj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			
			$informacja['info']=$this->db->get('jednostkainfo');
			
			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			
			//załadowanie widoku, i przekazujemy do niego tablice
			$this->load->view('info_edytuj', $informacja);
			$this->load->view('includes/html_footer');
		}else{
			redirect('info');
		}	
	}

	public function edytujInfo()
	{
		$data['nazwa'] = $this->input->post('nazwa');
		$data['miejscowosc'] = $this->input->post('miejscowosc');
		$data['adres'] = $this->input->post('adres');
		$data['www'] = $this->input->post('www');
		$data['email'] = $this->input->post('email');

		$this->db->where('id', 0);
		$this->db->update('jednostkainfo', $data);

		redirect('info');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */