<?php 
class User extends BaseSql{

    protected $id = null;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $pwd;
    protected $token="12345678901234567890123456789012";
    protected $age = 0;
    protected $status = 0;


    public function __construct(){
        parent::__construct();
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setFirstname($firstname){
        $this->first_name=ucfirst(strtolower(trim($firstname)));
    }
    public function setLastname($lastname){
        $this->last_name=strtoupper(trim($lastname));
    }
    public function setEmail($email){
        $this->email=strtolower(trim($email));
    }
    public function setPwd($pwd){
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }
    public function setToken($token){
        $this->token=$token;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setStatus($status){
        $this->status=$status;
    }

    public function configFormAdd(){

        return [
            "config"=>["method"=>"POST", "action"=>"", "submit"=>"S'inscrire"],
            "input"=>[

                "firstname"=>[
                    "type"=>"text",
                    "placeholder"=>"Votre prénom",
                    "required"=>true,
                    "maxString"=>100,
                    "minString"=>2
                ],
                "lastname"=>[
                    "type"=>"text",
                    "placeholder"=>"Votre nom",
                    "required"=>true,
                    "maxString"=>100,
                    "minString"=>2
                ],
                "email"=>[
                    "type"=>"email",
                    "placeholder"=>"Votre email",
                    "required"=>true],
                "emailConfirm"=>[
                    "type"=>"email",
                    "placeholder"=>"Confirmer votre email",
                    "required"=>true,
                    "confirm"=>"email"
                ],
                "pwd"=>[
                    "type"=>"password",
                    "placeholder"=>"Votre mot de passe",
                    "required"=>true],
                "pwdConfirm"=>[
                    "type"=>"password",
                    "placeholder"=>"Confirmer votre mot de passe",
                    "required"=>true,
                    "confirm"=>"pwd"
                ],
                "age"=>[
                    "type"=>"number",
                    "placeholder"=>"Votre age",
                    "required"=>true,
                    "maxNum"=>100,
                    "minNum"=>18
                ]

            ]
        ];

    }

}