<?php 
    function createConnection(){
        $hostname = "localhost:3306";
        $username = "root";
        $password = "";
        $databaseName = "LoL";

        $connection = new mysqli($hostname, $username, $password, $databaseName);
        if($connection -> connect_error){
            echo 'Connection Fail!';
            die();
        }else{
            return $connection;
        }
    }

?>