<?php 
    function createConnection(){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "ql_menu";
        $conn = new mysqli($hostname,$username,$password,$databaseName);

        if ($conn -> connect_error){
            echo "Connection fail!";
        }
        else{
            return $conn;
        }
    }
?>