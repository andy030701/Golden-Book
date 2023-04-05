<?php 
    class Accueil extends CI_Controller{
        //definition d'un constructeur heritant de la classe CI_Controller
        public function __construct()
        {
            # code...
            parent::__construct();//initialisation du constructeur parent
            $this->load->helper('url');//initialisation du helper url
        }

        //la methode index($nom,$prenom) sera executee par defaut
        public function index($nom='',$prenom='')
        {
            # code...
            //echo 'Bienvenue dans la discu'; ce echo sera afficher lorsque index sera passer dans l'url 
            
            //chargement de la vue menu.php
           // $this->load->view('menu.php');
            
            //utilisation de la view accueil.php avec transmission des variables $nom et $prenom
            $this->load->view('accueil.php',array('nom'=>$nom,'prenom'=>$prenom));
            
        }
        
        public function posts()
        {
            # code...
            //chargement de la view postes
            $this->load->view('postes.php');
        }
    }
?>