<?php 
require "connection.php";

class Contactmodel {

    function insert($email,$telephone,$nom,$message){
        $con= new Connection;
        $con=$con->connect();

        $sql = "INSERT INTO `contact`(`email`, `telephone`, `nom`, `message`) VALUES ('$email','$telephone','$nom','$message')";

        $query=$con->query($sql);
        

    }

    function show(){
        $con = new Connection;
        $con=$con->connect();

        $sql="SELECT * FROM `contact`";
        $query=$con->query($sql);
        return  $query->fetchAll(PDO::FETCH_ASSOC);
        
    }
    function delete($id){
        $con=new Connection;
        $con =$con->connect();
        $sql="DELETE FROM `contact` WHERE id=$id";
        $query=$con->query($sql);
    }
	
    
}

?>