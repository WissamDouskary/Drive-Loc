<?php 
require_once '../classes/user.php';
require_once '../classes/conn.php';

class admin extends User{
    private $pdo;

    function __construct(){
        $connection = new DBconnection();
        $this->pdo = $connection->PDOconnect();
    }

    function gereVehicule(){

    }

    function gererCategories(){
        
    }

    function gererReservation(){

    }

    function gererClients(){

    }

    function approuverReservation(){

    }

    function refuseReservation(){

    }
}


?>