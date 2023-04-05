<?php
   //un controller est une classe.elle doit etre du meme nom que le fichier
   class Forum extends CI_Controller{
    public function accueil()
    {
        # code...
        echo "Bonjour le monde";
    }
   }

   /*
    le controller peut etre appeler avec l'url comme ceci
      www.nomdomaine.com/index.php/nom_controller/methode/parametre1/parametre2 etc

      Code igniter permet d'envoyer des variables $GET dans l'url
    */
?>