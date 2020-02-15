<?php

class Home extends framework{
    public function index(){

    }
    
    public function index1(){
        //$this->view("Home");
        $mdl = $this->model("dbaccess");
        if($mdl->myData()){
            echo "Data Processed";
        }else{
            echo "Error";
        }
    }
}
