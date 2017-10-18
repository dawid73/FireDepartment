<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akcje extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($i=null)
	{ 
		if($this->session->userdata('admin')=='tak'){

			$this->db->order_by("id", "desc"); 
			$akcje['akc']=$this->db->get('akcja')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');

			$this->load->view('includes/html_menu_adm');

			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowego akcje";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowej akcji";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Akcja edytowana poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Usunięto akcję z systemu";
				$this->load->view('includes/komunikat_error', $data);
			}

			$this->load->view('akcje', $akcje);
			$this->load->view('includes/html_footer');
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

			$array = array('datawyjazdu >' => $od, 'datapowrotu <' => $do);

			if($od && $do){$this->db->where($array); }
			$this->db->select('*');
			$this->db->like('nrakcji', $sz);

			$akcje['akc']=$this->db->get('akcja')->result();

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			$this->load->view('akcje', $akcje);
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

			$this->form_validation->set_rules('nrakcji', 'nrakcji', 'required');
			$this->form_validation->set_rules('datawyjazdu', 'nrakcji', 'required');
			$this->form_validation->set_rules('datapowrotu', 'nrakcji', 'required');
			$this->form_validation->set_rules('id[]', 'nrakcji', 'required');



			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){

				$czlonkowie['czl'] = $this->db->select('id, imie, nazwisko')
				->from('czlonkowie')
				->where('czynny', '1')
				->where('funkcja', '1')
				->get()
				->result();

				$czlonkowie['sam'] =$this->db->select('id, producent, marka, typ, rejestracja')
				->from('samochody')->get()->result();

				$czlonkowie['spr'] =$this->db->select('id, producent, model, rodzaj')
				->from('sprzet')->get()->result();

				$this->load->view('akcje_dodaj', $czlonkowie);
			}
			else{
				if($_POST['id']){
					$id = $_POST['id'];
					$ids = $_POST['ids'];
					$idsp = $_POST['idsp'];

					$tabela_akcje = array(
						'nrakcji' => $_POST['nrakcji'] , 
						'datawyjazdu' => $_POST['datawyjazdu'],
						'datapowrotu' => $_POST['datapowrotu'],
						'opis' => $_POST['opis'],

						'rodzajeakcji_id' => '1'
						);

					$this->db->insert('akcja', $tabela_akcje);

					
					$query = $this->db->get_where('akcja', array('nrakcji' => $_POST['nrakcji']));
					foreach ($query->result() as $row)
					{
						$idakcji = $row->id;
					}
					//dodanie do tabeli wiele-do-wielu - uczestników
					foreach ($id as $key => $value) {
						$this->db->set('czlonkowie_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcjeuczestnicy');
					}

					foreach ($ids as $key => $value) {
						$this->db->set('samochody_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcja_samochody');
					}

					foreach ($idsp as $key => $value) {
						$this->db->set('sprzet_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcja_sprzet');
					}

					redirect('akcje/index/1');
				}

				
			}
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

			$this->form_validation->set_rules('nrakcji', 'nrakcji', 'required');
			$this->form_validation->set_rules('datawyjazdu', 'nrakcji', 'required');
			$this->form_validation->set_rules('datapowrotu', 'nrakcji', 'required');
			$this->form_validation->set_rules('id[]', 'nrakcji', 'required');



			$this->form_validation->set_message('required', 'Pole %s nie może być puste! ');

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');

			if($this->form_validation->run()==FALSE){

				$this->db->where('id', $i);
				$czlonkowie['akc'] = $this->db->get('akcja');

				//zwraca wszystkie wartości z tabeli//
				$czlonkowie['czl'] = $this->db->select('id, imie, nazwisko')
				->from('czlonkowie')
				->where('czynny', '1')
				->where('funkcja', '1')
				->get()
				->result();

				$czlonkowie['sam'] =$this->db->select('id, producent, marka, typ, rejestracja')
				->from('samochody')->get()->result();

				$czlonkowie['spr'] =$this->db->select('id, producent, model, rodzaj')
				->from('sprzet')->get()->result();


				//zwraca te wartości które są już wybrane do edycji//
				$this->db->select('czlonkowie.id')
				->from('czlonkowie')
				->join('akcjeuczestnicy', 'akcjeuczestnicy.czlonkowie_id = czlonkowie.id')
				->join('akcja', 'akcja.id = akcjeuczestnicy.akcja_id')
				->where('akcja.id', $i);
				$czlonkowie['u_czl'] = $this->db->get()->result();

				$this->db->select('samochody.id')
				->from('samochody')
				->join('akcja_samochody', 'akcja_samochody.samochody_id = samochody.id')
				->join('akcja', 'akcja.id = akcja_samochody.akcja_id')
				->where('akcja.id', $i);
				$czlonkowie['u_sam'] = $this->db->get()->result();

				$this->db->select('sprzet.id')
				->from('sprzet')
				->join('akcja_sprzet', 'akcja_sprzet.sprzet_id = sprzet.id')
				->join('akcja', 'akcja.id = akcja_sprzet.akcja_id')
				->where('akcja.id', $i);
				$czlonkowie['u_spr'] = $this->db->get()->result();


				$this->load->view('akcje_edytuj', $czlonkowie);
			}
			else{
				if($_POST['id']){
					$idakcji = $_POST['idakcji'];
					$id = $_POST['id'];
					$ids = $_POST['ids'];
					$idsp = $_POST['idsp'];

					$tabela_akcje = array(
						'nrakcji' => $_POST['nrakcji'] , 
						'datawyjazdu' => $_POST['datawyjazdu'],
						'datapowrotu' => $_POST['datapowrotu'],
						'opis' => $_POST['opis'],

						'rodzajeakcji_id' => '1'
						);

					$this->db->where('id', $idakcji);
					$this->db->update('akcja', $tabela_akcje);

					$this->db->where('akcja_id', $idakcji);
					$this->db->delete('akcja_sprzet');

					$this->db->where('akcja_id', $idakcji);
					$this->db->delete('akcja_samochody');

					$this->db->where('akcja_id', $idakcji);
					$this->db->delete('akcjeuczestnicy');

					
					$query = $this->db->get_where('akcja', array('nrakcji' => $_POST['nrakcji']));
					foreach ($query->result() as $row)
					{
						$idakcji = $row->id;
					}
					//dodanie do tabeli wiele-do-wielu - uczestników
					foreach ($id as $key => $value) {
						$this->db->set('czlonkowie_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcjeuczestnicy');
					}

					foreach ($ids as $key => $value) {
						$this->db->set('samochody_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcja_samochody');
					}

					foreach ($idsp as $key => $value) {
						$this->db->set('sprzet_id', $value);
						$this->db->set('akcja_id', $idakcji);
						$this->db->insert('akcja_sprzet');
					}

					redirect('akcje/index/3');
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
				$akcje['akcje']=$this->db->get('akcja');

				$this->db->select('imie , nazwisko')
				->from('czlonkowie')
				->join('akcjeuczestnicy', 'akcjeuczestnicy.czlonkowie_id = czlonkowie.id')
				->join('akcja', 'akcja.id = akcjeuczestnicy.akcja_id')
				->where('akcja.id', $i);
				$akcje['uczestnicy'] = $this->db->get();

				$this->db->select('producent, rejestracja, marka, typ')
				->from('samochody')
				->join('akcja_samochody', 'akcja_samochody.samochody_id = samochody.id')
				->join('akcja', 'akcja.id = akcja_samochody.akcja_id')
				->where('akcja.id', $i);
				$akcje['samochody'] = $this->db->get();

				$this->db->select('producent, rodzaj, model')
				->from('sprzet')
				->join('akcja_sprzet', 'akcja_sprzet.sprzet_id = sprzet.id')
				->join('akcja', 'akcja.id = akcja_sprzet.akcja_id')
				->where('akcja.id', $i);
				$akcje['sprzet'] = $this->db->get();


				$this->load->view('includes/html_header');
				$this->load->view('includes/html_menu');
				$this->load->view('includes/html_menu_adm');
				$this->load->view('includes/html_menu_end');

				$this->load->view('akcje_info', $akcje);
				$this->load->view('includes/html_footer');
			}

		}else{
			redirect('start');
		}
	}

	public function usun($id=null)
	{
		$this->db->where('akcja_id', $id);
		$this->db->delete('akcja_samochody');

		$this->db->where('akcja_id', $id);
		$this->db->delete('akcja_sprzet');

		$this->db->where('akcja_id', $id);
		$this->db->delete('akcjeuczestnicy');

		$this->db->where('id', $id);
		if($this->db->delete('akcja')){

			redirect('akcje/index/5');}
		}


	}

	/* End of file Akcje.php */
/* Location: ./application/controllers/Akcje.php */