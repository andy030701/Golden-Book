<?php 
   class User extends CI_Controller{
    public function accueil()
    {
        // Chargement du modèle de gestion des news
        $this->load->model('news_model');
    
        $data = array();
    // On lance une requête
        $data['user_info'] = $this->news_model->get_info();
    // On inclut une vue
        $this->layout->view('ma_vue', $data);
    }
   }
?>