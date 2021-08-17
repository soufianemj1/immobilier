<?php 
require "connection.php";

class Offresmodel {

    function insert($prix,$photo,$description,$type,$ville){
        $con= new Connection;
        $con=$con->connect();

        $sql = "INSERT INTO `appartement`(`prix`, `photos`, `description`, `type`, `ville`) VALUES ('$prix','$photo','$description','$type','$ville')";
        
        $query=$con->query($sql);
        

    }

    function show(){
        $con = new Connection;
        $con=$con->connect();

        $sql="SELECT * FROM `appartement`";
        $query=$con->query($sql);
        return  $query->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function delete($id){
        $con=new Connection;
        $con =$con->connect();
        $sql="DELETE FROM `appartement` WHERE id=$id";
        $query=$con->query($sql);
    }

    function insertphotos($id,$photo){
        $con= new Connection;
        $con=$con->connect();

        $sql = "INSERT INTO `photos`(`photos`, `id_appartement`) VALUES ('$photo','$idappartement')";
        
        $query=$con->query($sql);
        

    }
	
    
}

?>