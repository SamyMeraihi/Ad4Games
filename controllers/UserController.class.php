<?php
class UserController{

    public function indexAction($params){
        $v = new View("users","back");
    }

    public function addAction($params){

        $user = new User();
        $config = $user->configFormAdd();
        $errors = [];

        if(!empty($params["POST"])){

            $errors = Validate::checkForm($config, $params["POST"]);

            if(empty($errors)){
                $user->setFirstname($params["POST"]["firstname"]);
                $user->setLastname($params["POST"]["lastname"]);
                $user->setPwd($params["POST"]["pwd"]);
                $user->setAge($params["POST"]["age"]);
                $user->setEmail($params["POST"]["email"]);
                $user->save();
            } else {
                // Debug des erreurs
                var_dump($errors);
            }
        }

        $v = new View("usersAdd","back");
        $v->assign("config", $config);
        $v->assign("errors", $errors);

    }

    public function listAction($params){
        $v = new View("usersList","back");
    }

    public function modifyAction($params){
        $v = new View("usersModify","back");
    }
}