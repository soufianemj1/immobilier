<?php 
require "connection.php";

class Rdvmodel {

    function insert($email,$telephone,$nom,$date){
        $con= new Connection;
        $con=$con->connect();

        $sql = "INSERT INTO `rendezvous`(`email`, `telephone`, `nom`, `date`) VALUES ('$email','$telephone','$nom','$date')";

        $query=$con->query($sql);
        

    }

    function show(){
        $con = new Connection;
        $con=$con->connect();

        $sql="SELECT * FROM `rendezvous`";
        $query=$con->query($sql);
        $query = $query->fetchAll(PDO::FETCH_ASSOC);
        return $query ;
        
    }
    function delete($id){
        $con=new Connection;
        $con =$con->connect();
        $sql="DELETE FROM `rendezvous` WHERE id=$id";
        $query=$con->query($sql);
    }
	
    
}

?>