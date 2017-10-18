<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Samochody extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			
			$this->db->select('*');
			$samochody['samochody']=$this->db->get('samochody')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowy samochód";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowego samochodu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Samochód edytowany poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu samochodu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Samochód usuniety poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==6){
				$data['wiadomosc'] = "Błąd przy usuwaniu samochodu. Nie można usunąć samochodu dopisanego do akcji.";
				$this->load->view('includes/komunikat_error', $data);
			}

			$this->load->view('samochody', $samochody);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}	
	}

	public function usun($id=null)
	{
		$this->db->where('samochody_id', $id);
		$wynik = $this->db->get('akcja_samochody');

		if ($wynik->num_rows() < 1)
			{
				$this->db->where('id', $id);
				$this->db->delete('samochody');
				redirect('samochody/index/5');
		}else{
			redirect('samochody/index/6');
		}
	}

	public function edytuj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<button type="button" class="btn btn-danger">', '</button>');

			$this->form_validation->set_rules('rejestracja', 'Rejestracja', 'required');
			$this->form_validation->set_rules('producent', 'Producent', 'required');
			$this->form_validation->set_rules('marka', 'Marka', 'required');
			$this->form_validation->set_rules('dataprodukcji', 'Data produkcji', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');
			
			$this->db->where('id', $i);
			$data['sam'] = $this->db->get('samochody');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			
			if($this->form_validation->run()==FALSE){
				$this->load->view('samochody_edytuj', $data);

			}else{

				$data = $this->input->post();
				$id = $this->input->post('id');

				$this->db->where('id', $id);
				if($this->db->update('samochody', $data)){
					redirect('samochody/index/3');
				}
				else{
					redirect('samochody/index/4');
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

			$this->form_validation->set_rules('rejestracja', 'Rejestracja', 'required');
			$this->form_validation->set_rules('producent', 'Producent', 'required');
			$this->form_validation->set_rules('marka', 'Marka', 'required');
			$this->form_validation->set_rules('dataprodukcji', 'Data produkcji', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){
				$this->load->view('samochody_dodaj');
			}
			else{

				$tabela= $this->input->post();
				if($this->db->insert('samochody', $tabela)){
					redirect ('samochody/index/1');
				}else{
					redirect ('samochody/index/2');
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