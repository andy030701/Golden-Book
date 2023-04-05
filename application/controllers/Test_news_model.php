<?php 
  class Test_news_model extends CI_Controller 
  {
    public function accueil()
{
    //chargement du model 'news_model' et extraction des donnees dans newsManager
    $this->load->model('news_model', 'newsManager');
    $nb_news = $this->newsManager->count();
    $nb_news_de_bob = $this->newsManager->count(array('auteur' => 'Bob'));
}
  }
  
?>