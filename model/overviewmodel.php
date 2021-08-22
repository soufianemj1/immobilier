<?php 
require "connection.php";
class Overviewmodel {
    function countingmessage(){
        $con = new Connection;
        $con = $con->connect();
        // contact
        $sqlcontact = "SELECT * FROM `contact`";
        $querycontact = $con->query($sqlcontact);
        $contact = $querycontact->fetchAll(PDO::FETCH_ASSOC);
        return $contact;

        
    }
    function countingrdv(){
        $con = new Connection;
        $con = $con->connect();
        // rdv
        $sqlrdv = "SELECT * FROM `rendezvous`";
        $queryrdv = $con->query($sqlrdv);
        $rendezvous = $queryrdv->fetchAll(PDO::FETCH_ASSOC);
        return $rendezvous;

        
    }
    function countingOffres(){
        $con = new Connection;
        $con = $con->connect();
        // offres
        $sqloffres = "SELECT * FROM `appartement`";
        $queryoffres = $con->query($sqloffres);
        $offres = $queryoffres->fetchAll(PDO::FETCH_ASSOC);
        return $offres;

        
    }
}




?>