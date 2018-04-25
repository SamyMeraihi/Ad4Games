<?php
class BaseSql{

    private $table;
    public $pdo;
    private $columns;

    public function __construct(){

        try{
            $this->pdo = new PDO( "mysql:host=".DBHOST.";dbname=".DBNAME , DBUSER , DBPWD); 
        }catch(Exception $e){
            die("Erreur SQL ".$e->getMessage());
        }

        $this->table = strtolower(get_called_class());

    }


    public function setColumns(){
        //On récupère les variables de la class BaseSql grace a get_class();
        $columnsExcluded = get_class_vars(get_class());
        //  ["table"=> , "pdo"=> , "columns" =>]
        //On enlève du tableau contenant toutes les variables de l'objet les columns à exclure
        //get_object_vars($this) -> ["id"=>, "firstname"=> , .... ,table"=> , "pdo"=> , "columns" =>]
        $this->columns = array_diff_key(get_object_vars($this)	, $columnsExcluded);
    }


    public function save(){
        $this->setColumns();

        if( $this->id ){
            echo "Requête UPDATE initiée";

            foreach ($this->columns as $key => $value) {
                //lastname=:lastname 
                $sqlSet[] =  $key."=:".$key;
            }

            $query = $this->pdo->prepare("UPDATE ".$this->table." SET ".implode(",", $sqlSet)." WHERE id=:id");

            $query->execute($this->columns);

        } else {
            echo "Requête INSERT initiée";

            unset($this->columns["id"]);

            var_dump($this->columns);

            $query = $this->pdo->prepare("INSERT INTO ".$this->table." (".
                                         implode(',', array_keys($this->columns))
                                         .") VALUES ('".
                                         implode('\', \'', array_values($this->columns))
                                         ."')");

            // Affichage de la requête debug
            echo "INSERT INTO ".$this->table." (".
                implode(',', array_keys($this->columns))
                .") VALUES ('".
                implode('\', \'', array_values($this->columns))
                ."')";

            // Execution de la requête
            $query->execute($this->columns);

        }

    }

}