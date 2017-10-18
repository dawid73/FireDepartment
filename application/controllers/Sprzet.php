<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sprzet extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->db->select('*');
			$sprzet['sprzet']=$this->db->get('sprzet')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowy sprzęt";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowego sprzętu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Sprzęt edytowany poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu sprzętu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Sprzęt usuniety poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==6){
				$data['wiadomosc'] = "Błąd przy usuwaniu sprzętu. Nie można usunąć sprzętu dopisanego do akcji.";
				$this->load->view('includes/komunikat_error', $data);
			}

			$this->load->view('sprzet', $sprzet);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function usun($id=null)
	{
		$this->db->where('sprzet_id', $id);
		$wynik = $this->db->get('akcja_sprzet');

		if ($wynik->num_rows() < 1)
			{
				$this->db->where('id', $id);
				$this->db->delete('sprzet');
				redirect('sprzet/index/5');
		}else{
			redirect('sprzet/index/6');
		}
	}

	public function edytuj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<button type="button" class="btn btn-danger">', '</button>');

			$this->form_validation->set_rules('producent', 'Producent', 'required');
			$this->form_validation->set_rules('model', 'Model', 'required');
			$this->form_validation->set_rules('dataprodukcji', 'Data produkcji', 'required');
			$this->form_validation->set_rules('rodzaj', 'Numer', 'required');
			$this->form_validation->set_rules('databadania', 'Data badania', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->db->where('id', $i);
			$data['spr'] = $this->db->get('sprzet');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			
			if($this->form_validation->run()==FALSE){
				$this->load->view('sprzet_edytuj', $data);

			}else{

				$data = $this->input->post();
				$id = $this->input->post('id');

				$this->db->where('id', $id);
				if($this->db->update('sprzet', $data)){
					redirect('sprzet/index/3');
				}
				else{
					redirect('sprzet/index/4');
				}

			}
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}
	

	public function dodaj()
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<button type="button" class="btn btn-danger">', '</button>');

			$this->form_validation->set_rules('producent', 'Producent', 'required');
			$this->form_validation->set_rules('model', 'Model', 'required');
			$this->form_validation->set_rules('dataprodukcji', 'Data produkcji', 'required');
			$this->form_validation->set_rules('rodzaj', 'Numer', 'required');
			$this->form_validation->set_rules('databadania', 'Data badania', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){
				$this->load->view('sprzet_dodaj');
			}
			else{

				$tabela= $this->input->post();
				if($this->db->insert('sprzet', $tabela)){
					redirect ('sprzet/index/1');
				}else{
					redirect ('sprzet/index/2');
				}

			}
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}
}

/* End of file Czlonkowie.php */
/* Location: ./application/controllers/Czlonkowie.php */