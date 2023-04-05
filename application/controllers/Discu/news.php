<?php
class News extends CI_Controller
{
    public function index()
{
        $this->accueil();
}
public function accueil()
{
    $data = array();
    $data['pseudo'] = 'Arthur';
    $data['email'] = 'email@ndd.fr';
    $data['en_ligne'] = true;
    $this->load->view('vue',$data);
}
public function connexion(){
    // Chargement de la bibliothèque
    $this->load->library('form_validation');
     
    //regle sur le pseudo
    $this->form_validation->set_rules('pseudo', '"Nom d\'utilisateur"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
    
    //regle sur le mot de passe
    $this->form_validation->set_rules('mdp', '"Mot de passe"','trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags|xss_clean');

    if($this->form_validation->run())   
    {
        // Le formulaire est valide
        $this->load->view('connexion_reussi');
    }
    else
    {
      echo var_dump($this->form_validation->run());  
    // Le formulaire est invalide ou vide
    $this->load->view('formulaire');
    }
  }
}