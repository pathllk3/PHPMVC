<?php

class dbaccess extends database{
    public function myData(){
        if($this->qury("CREATE TABLE IF NOT EXISTS data (id INT AUTO_INCREMENT PRIMARY KEY, REF VARCHAR (255) DEFAULT NULL, PROJ  VARCHAR (255) DEFAULT NULL, DATE DATE DEFAULT NULL, ACC VARCHAR (400) DEFAULT NULL, ACCTP VARCHAR(255), PARTY VARCHAR(255), PARTYTP VARCHAR(255), AMT decimal (10, 5), AMT1 decimal(10, 5), REM VARCHAR (255))", [])){
            return true;
        }
        else{
            return false;
        }
    }
}


