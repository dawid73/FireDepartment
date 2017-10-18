<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index($i=null)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->db->select('*');
			$uzytkownicy['uzytkownicy']=$this->db->get('user')->result();


			$this->load->model('Pobierz_Model');
			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			if($i==1){
				$data['wiadomosc'] = "Dodano poprawnie nowego użytkownika";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==2){
				$data['wiadomosc'] = "Nie dodano poprawnie nowego użytkownika";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==3){
				$data['wiadomosc'] = "Użytkownik edytowany poprawnie";
				$this->load->view('includes/komunikat_ok', $data);
			}else if($i==4){
				$data['wiadomosc'] = "Błąd przy edytowaniu";
				$this->load->view('includes/komunikat_error', $data);
			}else if($i==5){
				$data['wiadomosc'] = "Użytkownik usunięty";
				$this->load->view('includes/komunikat_error', $data);
			}
			//załadowanie widoku users, i przekazujemy do niego tablice Userzy
			$this->load->view('users', $uzytkownicy);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function dodaj()
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			$this->load->view('includes/html_menu_adm');
			$this->load->view('includes/html_menu_end');
			$this->load->view('user_dodaj');
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function edytuj($i)
	{
		if($this->session->userdata('admin')=='tak'){
			$this->load->model('Pobierz_Model');
			//pobieramy z bazy danych userów w formi obiektu
			$rezultat = $this->Pobierz_Model->PobierzJednego('user', $i);

			//zamiana obiektu na tablicę
			$i=0;
			foreach ($rezultat->result() as $Wiersz) {
				$osoba['osoba'][$i]['id'] = $Wiersz->id;
				$osoba['osoba'][$i]['imie'] = $Wiersz->imie;
				$osoba['osoba'][$i]['nazwisko'] = $Wiersz->nazwisko;
				$osoba['osoba'][$i]['login'] = $Wiersz->login;
				$osoba['osoba'][$i]['status'] = $Wiersz->status;
				$osoba['osoba'][$i]['uprawnienia'] = $Wiersz->uprawnienia;
				$i++;
			}

			$this->load->view('includes/html_header');
			$this->load->view('includes/html_menu');
			if($this->session->userdata('admin')=='tak'){

				$this->load->view('includes/html_menu_adm');
			}
			$this->load->view('includes/html_menu_end');
			$this->load->view('user_edytuj', $osoba);
			$this->load->view('includes/html_footer');
		}else{
			redirect('start');
		}
	}

	public function DodajDoBazy()
	{

		$data['imie'] = $this->input->post('imie');
		$data['nazwisko'] = $this->input->post('nazwisko');
		$data['login'] = $this->input->post('login');
		$data['haslo'] = md5($this->input->post('haslo'));
		$data['status'] = $this->input->post('status');
		$data['uprawnienia'] = $this->input->post('poziom');

		if($this->db->insert('user',$data)){
			redirect('user/1');
		}else{
			redirect('user/2');
		}
	}

	public function edytujWBazie()
	{

		$id = $this->input->post('id');
		$data['imie'] = $this->input->post('imie');
		$data['nazwisko'] = $this->input->post('nazwisko');
		$data['login'] = $this->input->post('login');

		$data['status'] = $this->input->post('status');
		$data['uprawnienia'] = $this->input->post('poziom');
		
		if($this->input->post('zmienhaslo')=='yes'){
			$data['haslo'] = md5($this->input->post('haslo'));

			$this->db->where('id', $id);
			if($this->db->update('user', $data)){
				redirect('user/3');
			}else{
				redirect('user/4');
			}
		}else{
			$this->db->where('id', $id);
			if($this->db->update('user', $data)){
				redirect('user/3');
			}else{
				redirect('user/4');
			}

			
		}
		
	}


	public function usun($id=null)
	{
		$this->db->where('id', $id);
		if($this->db->delete('user')){
			redirect('user/index/5');
		}else{
			redirect('user/index/6');
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */