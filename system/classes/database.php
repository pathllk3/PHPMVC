<?php

class database{
    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;
    public $con;
    public $result;
    
    public function __construct() {
        try{
            return $this->con = new PDO("mysql:host=db4free.net;dbname=anjn_test", $this->user, $this->password);
        }
        catch(Exception $ex){
            echo $ex->getMessage();
        }
    }
    
    public function qury($qry, $param = []){
        if(empty($param)){
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        }
        else{
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($param);
        }
    }
}

