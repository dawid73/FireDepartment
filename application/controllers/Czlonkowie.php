<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Czlonkowie extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->db->select('*');
			$czlonkowie['czlonek']=$this->db->get('czlonkowie')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowego członka";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowego członka";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Członek edytowany poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Członek usuniety poprawnie ";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==6){
				$data['wiadomosc'] = "Błąd przy usuwaniu. Nie można usunąć członka, który jest przypisany do akcji.";
				$this->load->view('includes/komunikat_error', $data);
			}

			$this->load->view('czlonkowie', $czlonkowie);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function usun($id=null)
	{

		$this->db->where('czlonkowie_id', $id);
		$wynik = $this->db->get('akcjeuczestnicy');

		if ($wynik->num_rows() < 1)
			{
				$this->db->where('id', $id);
				$this->db->delete('czlonkowie');
				
				redirect('czlonkowie/index/5');
		}
		else
		{
			redirect('czlonkowie/index/6');
		}
		
	}

	public function edytuj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<button type="button" class="btn btn-danger">', '</button>');

			$this->form_validation->set_rules('imie', 'Imie', 'required');
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required');
			$this->form_validation->set_rules('plec', 'Pleć', 'required');
			$this->form_validation->set_rules('czynny', ' ', 'required');
			$this->form_validation->set_rules('funkcja', ' ', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->db->where('id', $i);
			$data['czlonkowie'] = $this->db->get('czlonkowie');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($this->form_validation->run()==FALSE){
				$this->load->view('czlonkowie_edytuj', $data);

			}else{

				$data = $this->input->post();
				$id = $this->input->post('id');

				$this->db->where('id', $id);
				if($this->db->update('czlonkowie', $data)){
					redirect('czlonkowie/index/3');
				}
				else{
					redirect('czlonkowie/index/4');
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

			$this->form_validation->set_rules('imie', 'Imie', 'required');
			$this->form_validation->set_rules('nazwisko', 'Nazwisko', 'required');
			$this->form_validation->set_rules('plec', 'Pleć', 'required');
			$this->form_validation->set_rules('czynny', ' ', 'required');
			$this->form_validation->set_rules('funkcja', ' ', 'required');

			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){
				$this->load->view('czlonkowie_dodaj');
			}
			else{

				$tabela= $this->input->post();
				if($this->db->insert('czlonkowie', $tabela)){
					redirect ('czlonkowie/index/1');
				}else{
					redirect ('czlonkowie/index/2');
				}

			}
			$this->load->view('includes/html_footer');	
		}else{
			redirect('start');
		}	
	}
	

	public function dodajDoBazy()
	{
		$tabela= $this->input->post();
		if($this->db->insert('czlonkowie', $tabela)){
			redirect('czlonkowie/index/1');
		}else{
			redirect('czlonkowie/index/2');
		}
	}

	public function szukaj()
	{
		if($this->session->userdata('admin')=='tak'){
			$sz = $this->input->get('s');

			$this->db->select('*');
			$this->db->like('nazwisko', $sz);
			$czlonkowie['czlonek']=$this->db->get('czlonkowie')->result();

			$this->load->model('Pobierz_Model');
			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			$this->load->view('czlonkowie', $czlonkowie);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}


}

/* End of file Czlonkowie.php */
/* Location: ./application/controllers/Czlonkowie.php */