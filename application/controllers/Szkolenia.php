<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Szkolenia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($i=null)
	{
		if($this->session->userdata('admin')=='tak'){

			$szkolenia['szk']=$this->db->get('szkoleniainfo')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowe szkolenie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowe szkolenie";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Szkolenie edytowanane poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Usunięto szkolenie z systemu";
				$this->load->view('includes/komunikat_error', $data);
			}

			$this->load->view('szkolenie', $szkolenia);
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

			$this->form_validation->set_rules('nazwa', 'nazwa', 'required');
			$this->form_validation->set_rules('data', 'data', 'required');
			$this->form_validation->set_rules('miejsce', 'miejsce', 'required');
			$this->form_validation->set_rules('id[]', 'czlonkowie', 'required');


			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){

				$czlonkowie['czl'] = $this->db->select('id, imie, nazwisko')
				->from('czlonkowie')
				->get()
				->result();

				$this->load->view('szkolenie_dodaj', $czlonkowie);
			}
			else{
				if($_POST['id']){
					$id = $_POST['id'];

					$tabela_szkolenia = array(
						'nazwa' => $_POST['nazwa'] , 
						'data' => $_POST['data'],
						'miejsce' => $_POST['miejsce'],
						'info' => $_POST['info']
						);

					$this->db->insert('szkoleniainfo', $tabela_szkolenia);


					$query = $this->db->get_where('szkoleniainfo', array('nazwa' => $_POST['nazwa']));
					foreach ($query->result() as $row)
					{
						$idszkolenia = $row->id;
					}
					//dodanie do tabeli wiele-do-wielu - uczestników
					foreach ($id as $key => $value) {
						$this->db->set('czlonkowie_id', $value);
						$this->db->set('szkoleniainfo_id', $idszkolenia);
						$this->db->insert('szkolenia');
					}

					redirect('szkolenia/index/1');
				}

				
			}
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}


	public function info($i=null)
	{

		if($this->session->userdata('admin')=='tak'){
			if($i!=null){

				$this->db->where('id', $i);
				$szkolenie['szkolenie']=$this->db->get('szkoleniainfo');

				$this->db->select('imie , nazwisko')
				->from('czlonkowie')
				->join('szkolenia', 'szkolenia.czlonkowie_id = czlonkowie.id')
				->join('szkoleniainfo', 'szkoleniainfo.id = szkolenia.szkoleniainfo_id')
				->where('szkoleniainfo.id', $i);
				$szkolenie['uczestnicy'] = $this->db->get();


				$this->load->view('includes/html_header');
				$this->load->view('includes/html_menu');
				$this->load->view('includes/html_menu_adm');
				$this->load->view('includes/html_menu_end');

				$this->load->view('szkolenia_info', $szkolenie);
				$this->load->view('includes/html_footer');
			}
		}else{
			redirect('start');
		}
		
	}

	public function szukaj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$sz = $this->input->get('s');
			$od = $this->input->get('od');
			$do = $this->input->get('do');

			$array = array('data >' => $od, 'data <' => $do);

			if($od && $do){$this->db->where($array); }
			$this->db->select('*');
			$this->db->like('nazwa', $sz);

			$szkolenia['szk']=$this->db->get('szkoleniainfo')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			$this->load->view('szkolenie', $szkolenia);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
		
	}

	public function edytuj($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<button type="button" class="btn btn-danger">', '</button>');

			$this->form_validation->set_rules('nazwa', 'nazwa', 'required');
			$this->form_validation->set_rules('data', 'data', 'required');
			$this->form_validation->set_rules('miejsce', 'miejsce', 'required');
			$this->form_validation->set_rules('id[]', 'czlonkowie', 'required');


			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');


			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){

				$this->db->where('id', $i);
				$data['szk'] = $this->db->get('szkoleniainfo');

				$data['czl'] = $this->db->select('id, imie, nazwisko')
				->from('czlonkowie')
				->get()
				->result();

				$this->db->select('czlonkowie.id, imie , nazwisko')
				->from('czlonkowie')
				->join('szkolenia', 'szkolenia.czlonkowie_id = czlonkowie.id')
				->join('szkoleniainfo', 'szkoleniainfo.id = szkolenia.szkoleniainfo_id')
				->where('szkoleniainfo.id', $i);
				$data['uczesnicy'] = $this->db->get()->result();

				$this->load->view('szkolenie_edytuj', $data);
			}
			else{

				$id = $_POST['id'];
				$idszk = $_POST['id_szkolenia'];
				$tabela_szkolenia = array(
					'nazwa' => $_POST['nazwa'] , 
					'data' => $_POST['data'],
					'miejsce' => $_POST['miejsce'],
					'info' => $_POST['info']
					);


				$this->db->where('id', $idszk);
				$this->db->update('szkoleniainfo', $tabela_szkolenia);


				$this->db->where('szkoleniainfo_id', $idszk);
				$this->db->delete('szkolenia');


				$query = $this->db->get_where('szkoleniainfo', array('nazwa' => $_POST['nazwa']));
				foreach ($query->result() as $row)
				{
					$idszkolenia = $row->id;
				}
					//dodanie do tabeli wiele-do-wielu - uczestników
				foreach ($id as $key => $value) {
					$this->db->set('czlonkowie_id', $value);
					$this->db->set('szkoleniainfo_id', $idszkolenia);
					$this->db->insert('szkolenia');
				}

				redirect('szkolenia/index/3');

			}
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function usun($id=null)
	{

		$this->db->where('szkoleniainfo_id', $id);
		$this->db->delete('szkolenia');

		$this->db->where('id', $id);
		if($this->db->delete('szkoleniainfo')){

			redirect('szkolenia/index/5');}
		}
}

/* End of file Szkolenia.php */
/* Location: ./application/controllers/Szkolenia.php */