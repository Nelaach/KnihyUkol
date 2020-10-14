<?php
class Pages extends CI_Controller {
        public function index()
        {            
                $this->load->model('cetba_model');
                $data['polozky'] = $this->cetba_model->get_menu();


		$this->load->view('templates/header', $data);                
		$this->load->view('pages/Maturita', $data);  
		$this->load->view('templates/footer');
               
	}   
        public function Kategorie()
        {            
               $this->load->model('cetba_model');
                $data['polozky'] = $this->cetba_model->get_menu();
                
                $data['kategorie'] = $this->db->query('SELECT * FROM kategorie ORDER BY idkategorie')->result();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/Kategorie', $data);  
		$this->load->view('templates/footer');
               
	}
        public function KnihyKategorie($id) 
        {

                  $this->load->model('cetba_model');
                $data['polozky'] = $this->cetba_model->get_menu();
		$data['nazev'] = $this->db->query('SELECT * FROM kategorie WHERE idkategorie= '.$id)->result();
		$data['knihy'] = $this->db->query('SELECT * FROM knihy WHERE kategorie_idkategorie= '.$id)->result();
		
		$this->load->view('pages/KnihyKategorie', $data);  
                		$this->load->view('templates/header', $data);

		$this->load->view('templates/footer');            
        }
        
        public function Knihy()
        {            
                $this->load->model('cetba_model');
                $data['polozky'] = $this->cetba_model->get_menu();
                $data['knihovna'] = $this->db->query('SELECT * FROM knihy ORDER BY idknihy')->result();
		$this->load->view('templates/header', $data);                
		$this->load->view('pages/Knihy', $data);  
		$this->load->view('templates/footer');
               	}   
        public function Maturita()
        {            
               $this->load->model('cetba_model');
                $data['polozky'] = $this->cetba_model->get_menu();
		$this->load->view('templates/header', $data);
		$this->load->view('pages/Maturita', $data);  
		$this->load->view('templates/footer');
               
	}   




        
}