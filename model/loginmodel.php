<?php 
require "connection.php";

class loginmodel {

    function check($user,$password){
        $con= new connection;
        $con = $con->connect();

        $sql = "SELECT * FROM `admin` WHERE email='$user' and password='$password' ";
        $query = $con->query($sql);
        if($query->rowCount()>0){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            return $data[0];
        }else{
             return false;
        }   
        
    }


}








?>