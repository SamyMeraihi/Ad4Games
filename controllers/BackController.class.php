<?php

class BackController{

    public function indexAction($params){

        if((isset($_SESSION['connexionAdmin'])) && ($_SESSION['connexionAdmin'] == '1'))
        {  
            $v = new View("homeBack","back");
        } else {
            $v = new View("login","back");
        }
        $v->assign("params", $params);
    }
    
    public function logoutAction($params) {
        // On déconnecte l'utilisateur
        session_destroy();
        
        // On le redirige vers le front
        $v = new View("homeFront","front");
    }
}