<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Start extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

			$informacja['info']=$this->db->get('jednostkainfo');
			$this->load->model('Zaloguj_Model');

			if($this->input->post('logowanie') == 'tak'){
				//pobieramy z bazy danych infomacje o ilosci użytkowników
				$rezultat = $this->Zaloguj_Model->SprawdzUzytkownika();

				foreach ($rezultat->result() as $wiersz) {
					$ilosc = $wiersz->iloscU;
					$imie = $wiersz->imie;
				}

				if($ilosc>0){
					$this->session->set_userdata('admin', 'tak');
					$this->session->set_userdata('imie', $imie);
				}else if($ilosc==0){
					$this->session->set_userdata('admin', 'nie');
					redirect('start/badlogin');
				}
			}


			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			if($this->session->userdata('admin')=='tak'){

			$this->load->view('includes/html_menu_adm');
			}
			$this->load->view('includes/html_menu_end');
			$this->load->view('jeden', $informacja);
			$this->load->view('includes/html_footer');

		
	}

	public function badlogin()
	{
		$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			if($this->session->userdata('admin')=='tak'){

			$this->load->view('includes/html_menu_adm');
			}
			$this->load->view('includes/html_menu_end');
			$this->load->view('badlogin');
			$this->load->view('includes/html_footer');
	}

}

/* End of file Jeden.php */
/* Location: ./application/controllers/Jeden.php */