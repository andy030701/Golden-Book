<?php 

class Test extends CI_Controller{
    public function __construct(){
        //contructeur de la classe parent
        parent::__construct();
        
        // « Décommenter » cette ligne pour charger le helper url
        $this->load->helper('url');
    }
    public function index()
    {
        redirect(array('error', 'probleme'));
    }

    public function accueil()
    {
        # code... 
        // On inclut la vue ./application/views/test/accueil.php
        $this->load->view('test/accueil');
    }
    public function secret()
    {
        # code... 
        // On inclut la vue ./application/views/test/accueil.php
        $this->load->view('test/secret');
    }
    
}