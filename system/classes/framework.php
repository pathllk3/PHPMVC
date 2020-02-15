<?php

class framework {
    public function view($viewName, $data =[]){
        if(file_exists("../application/views/" . $viewName . ".php")){
            require_once "../application/views/$viewName.php";
        }else{
            echo "view File not Found";
        }
    }
    
    public function model($modelName){
        if(file_exists("../application/models/" . $modelName . ".php")){
            require_once "../application/models/$modelName.php";
            return new $modelName;
        }else{
            echo "Model File not Found";
        }
    }
}

