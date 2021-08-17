<?php 

class Connection {
    private $user='root';
    private $pass='';
    private $dbname='immobilier';
    private $server='localhost';
    private $db;
     public function connect() 
     {
        try {
            $this->db = new PDO("mysql:host=".$this->server.";dbname=".$this->dbname,$this->user,$this->pass);
          
            return $this->db;
        }
        catch(PDOException $e){
            echo "erreur".$e->getmessage();

        }
    }
    
    
}



